'use strict';

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var CustomPQ = function CustomPQ() {
  _classCallCheck(this, CustomPQ);

  this.arr = [];
  this.N = 0;
};

CustomPQ.prototype = (function () {
  var greater = function greater(ev1, ev2) {
    return ev1.time > ev2.time > 0;
  };

  var exch = function exch(idx1, idx2) {
    var temp = this.arr[idx1];
    this.arr[idx1] = this.arr[idx2];
    this.arr[idx2] = temp;
  };

  var swim = function swim(k) {
    while (k > 1 && greater(this.arr[Math.floor(k / 2)], this.arr[k])) {
      exch.call(this, k, Math.floor(k / 2));
      k = Math.floor(k / 2);
    }
  };

  var sink = function sink(k) {
    while (2 * k <= this.N) {
      var j = 2 * k;
      if (j < this.N && greater(this.arr[j], this.arr[j + 1])) ++j;
      if (!greater(this.arr[k], this.arr[j])) break;
      exch.call(this, k, j);
      k = j;
    }
  };

  var insert = function insert(val) {
    this.arr[++this.N] = val;
    swim.call(this, this.N);
  };

  var getMin = function getMin() {
    //if(this.N == 0) throw "Empty PQ Error";
    exch.call(this, 1, this.N);
    var min = this.arr[this.N--];
    sink.call(this, 1);
    this.arr[this.N + 1] = null;
    return min;
  };

  var isEmpty = function isEmpty() {
    return this.N === 0;
  };

  return {
    insert: insert,
    getMin: getMin,
    isEmpty: isEmpty
  };
})();

var Ball = (function () {
  function Ball() {
    var x = arguments.length <= 0 || arguments[0] === undefined ? 100 : arguments[0];
    var y = arguments.length <= 1 || arguments[1] === undefined ? 100 : arguments[1];
    var velocityX = arguments.length <= 2 || arguments[2] === undefined ? 10 : arguments[2];
    var velocityY = arguments.length <= 3 || arguments[3] === undefined ? 10 : arguments[3];
    var radius = arguments.length <= 4 || arguments[4] === undefined ? 8 : arguments[4];

    _classCallCheck(this, Ball);

    this.x = Math.random() * window.innerWidth;
    this.y = Math.random() * window.innerHeight;
    this.velocityX = Math.random() * 5;
    this.velocityY = Math.random() * 5;
    this.radius = radius;
    this.mass = 0.5;
    this.count = 0;
  }

  Ball.prototype.getCount = function getCount() {
    return this.count;
  };

  Ball.prototype.draw = function draw(ctx) {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, 360);
    ctx.fill();
  };

  Ball.prototype.move = function move(time) {
    this.x += this.velocityX * time;
    this.y += this.velocityY * time;
    Math.floor(this.x);
    Math.floor(this.y);
  };

  Ball.prototype.timeToHit = function timeToHit(that) {
    if (this === that) return Infinity;
    var dx = that.x - this.x;
    var dy = that.y - this.y;
    var dvx = that.velocityX - this.velocityX;
    var dvy = that.velocityY - this.velocityY;
    var dvdr = dx * dvx + dy * dvy;
    if (dvdr > 0) return Infinity;
    var dvdv = dvx * dvx + dvy * dvy;
    var drdr = dx * dx + dy * dy;
    var sigma = this.radius + that.radius;
    var d = dvdr * dvdr - dvdv * (drdr - sigma * sigma);
    if (d < 0) return Infinity;
    return -(dvdr + Math.sqrt(d)) / dvdv;
  };

  Ball.prototype.timeToHitVerticallWall = function timeToHitVerticallWall() {
    if (this.velocityX > 0) return (window.innerWidth - this.x - this.radius) / this.velocityX;else if (this.velocityX < 0) return (this.radius - this.x) / this.velocityX;else return Infinity;
  };

  Ball.prototype.timeToHitHorizontalWall = function timeToHitHorizontalWall() {
    if (this.velocityY > 0) return (window.innerHeight - this.y - this.radius) / this.velocityY;else if (this.velocityY < 0) return (this.radius - this.y) / this.velocityY;
    return Infinity;
  };

  Ball.prototype.bounceOff = function bounceOff(that) {
    var dx = that.x - this.x;
    var dy = that.y - this.y;
    var dvx = that.velocityX - this.velocityX;
    var dvy = that.velocityY - this.velocityY;
    var dvdr = dx * dvx + dy * dvy;
    var dist = this.radius + that.radius;
    var J = 2 * this.mass * that.mass * dvdr / ((this.mass + that.mass) * dist);
    var Jx = J * dx / dist;
    var Jy = J * dy / dist;
    this.velocityX += Jx / this.mass;
    this.velocityY += Jy / this.mass;
    that.velocityX -= Jx / that.mass;
    that.velocityY -= Jy / that.mass;
    ++this.count;
    ++that.count;
  };

  Ball.prototype.bounceOffVerticalWall = function bounceOffVerticalWall() {
    this.velocityX = -this.velocityX;
    ++this.count;
  };

  Ball.prototype.bounceOffHorizontalWall = function bounceOffHorizontalWall() {
    this.velocityY = -this.velocityY;
    ++this.count;
  };

  return Ball;
})();

var BigBall = (function (_Ball) {
  _inherits(BigBall, _Ball);

  function BigBall() {
    _classCallCheck(this, BigBall);

    _Ball.call(this);
    this.radius = 24;
    this.mass = 3;
  }

  return BigBall;
})(Ball);

var Event = (function () {
  function Event(time, a, b) {
    _classCallCheck(this, Event);

    this.time = time;
    this.a = a;
    this.b = b;
    if (a != null) this.countA = a.getCount();else this.countA = -1;
    if (b != null) this.countB = b.getCount();else this.countB = -1;
  }

  Event.prototype.isValid = function isValid() {
    if (this.a != null && this.a.getCount() != this.countA) return false;
    if (this.b != null && this.b.getCount() != this.countB) return false;
    return true;
  };

  Event.prototype.getA = function getA() {
    return this.a;
  };

  Event.prototype.getB = function getB() {
    return this.b;
  };

  Event.prototype.getTime = function getTime() {
    return this.time;
  };

  return Event;
})();

var CollisionSystem = (function () {
  function CollisionSystem() {
    _classCallCheck(this, CollisionSystem);

    this.c = document.getElementById("bubble");
    this.ctx = this.c.getContext("2d");
    this.balls = [];
    this.t = 0;
    this.hz = 1; //frequency
    this.pq = new CustomPQ();
    this.numBalls = 25;
    window.addEventListener('resize', this.windowResizeHandler.bind(this), false);
    this.windowResizeHandler();
  }

  //todo: doesn't really belong to this class, but meh

  CollisionSystem.prototype.windowResizeHandler = function windowResizeHandler() {
    this.SCREEN_WIDTH = window.innerWidth;
    this.SCREEN_HEIGHT = window.innerHeight;
    this.c.width = this.SCREEN_WIDTH;
    this.c.height = this.SCREEN_HEIGHT;
    var grd = this.ctx.createRadialGradient(0, 0, this.SCREEN_WIDTH * 1.3, 0, 0, 0);
    grd.addColorStop(0, "darkblue");
    grd.addColorStop(0.3, "purple");
    grd.addColorStop(0.6, "orange");
    grd.addColorStop(0.8, "red");
    grd.addColorStop(1, "darkred");
    this.ctx.fillStyle = grd;
  };

  CollisionSystem.prototype.redraw = function redraw() {
    var _this = this;

    var k = 0;
    this.ctx.clearRect(0, 0, this.SCREEN_WIDTH, this.SCREEN_HEIGHT);

    this.balls.forEach(function (ball) {
      ball.draw(_this.ctx);
    });

    this.pq.insert(new Event(this.t + 1 / this.hz, null, null));
  };

  CollisionSystem.prototype.predict = function predict(a) {
    var _this2 = this;

    if (a == null) return;
    this.balls.forEach(function (ball) {
      var dt = a.timeToHit(ball);
      if (dt !== Infinity) _this2.pq.insert(new Event(_this2.t + dt, a, ball));
    });

    var dtX = a.timeToHitVerticallWall();
    var dtY = a.timeToHitHorizontalWall();
    if (dtX !== Infinity) this.pq.insert(new Event(this.t + dtX, a, null));
    if (dtY !== Infinity) this.pq.insert(new Event(this.t + dtY, null, a));
  };

  CollisionSystem.prototype.simulate = function simulate() {
    var me = this;
    for (var i = 0; i < this.balls.length; ++i) {
      this.predict(this.balls[i]);
    }
    this.pq.insert(new Event(0, null, null));

    function step() {
      var ev = me.pq.getMin();
      if (ev.isValid()) {
        var a = ev.getA();
        var b = ev.getB();

        me.balls.forEach(function (ball) {
          ball.move(ev.getTime() - me.t);
        });

        me.t = ev.getTime();
        if (a != null && b != null) a.bounceOff(b);else if (a != null && b == null) a.bounceOffVerticalWall();else if (a == null && b != null) b.bounceOffHorizontalWall();else if (a == null && b == null) me.redraw();
        me.predict(a);
        me.predict(b);
      }
      window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
  };

  CollisionSystem.prototype.go = function go() {
    for (var i = 0; i < this.numBalls; ++i) {
      this.balls[i] = new Ball();
    }
    this.balls[this.balls.length] = new BigBall();
    this.simulate();
  };

  return CollisionSystem;
})();

var cs = new CollisionSystem();
cs.go();