function $i(id) {
    return document.getElementById(id);
}

function $r(parent, child) {
    (document.getElementById(parent)).removeChild(document.getElementById(child));
}

function $t(name) {
    return document.getElementsByTagName(name);
}

function $c(code) {
    return String.fromCharCode(code);
}

function $h(value) {
    return ('0' + Math.max(0, Math.min(255, Math.round(value))).toString(16)).slice(-2);
}

function _i(id, value) {
    $t('div')[id].innerHTML += value;
}

function _h(value) {
    return !hires ? value : Math.round(value / 2);
}

function get_screen_size() {
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
    return Array(w, h);
}

var url = document.location.href;

var flag = true;
var test = true;
var n = parseInt((url.indexOf('n=') != -1) ? url.substring(url.indexOf('n=') + 2, ((url.substring(url.indexOf('n=') + 2, url.length)).indexOf('&') != -1) ? url.indexOf('n=') + 2 + (url.substring(url.indexOf('n=') + 2, url.length)).indexOf('&') : url.length) : 512);
var w = 0;
var h = 0;
var x = 0;
var y = 0;
var z = 0;
var star_color_ratio = 0;
var star_x_save, star_y_save;
var star_ratio = 256;
var star_speed = 3;
var star_speed_save = 0;
var star = new Array(n);
var color;
var opacity = 0.1;

var hyperspace = 0;

var cursor_x = 0;
var cursor_y = 0;
var mouse_x = 0;
var mouse_y = 0;

var canvas_x = 0;
var canvas_y = 0;
var canvas_w = 0;
var canvas_h = 0;
var context;

var key;
var ctrl;

var timeout;
var fps = 0;



function anim() {
    mouse_x = cursor_x - x;
    mouse_y = cursor_y - y;
    if (hyperspace == 1) {
        star_speed = star_speed * 1.025;
        star_ratio = star_ratio * 0.99;
        var c = Math.round(star_speed * 2.5) + 32;
        context.fillStyle = 'rgb(' + c + ',' + c + ',' + c + ')';
        if (star_speed > 112) {
            context.fillStyle = 'rgb(43,45,53)';
            star_speed = 16;
            star_ratio = 256;
            hyperspace = 2;
        }
    }
    context.fillRect(0, 0, w, h);
    for (var i = 0; i < n; i++) {
        test = true;
        star_x_save = star[i][3];
        star_y_save = star[i][4];
        star[i][0] += mouse_x >> 4;
        if (star[i][0] > x << 1) {
            star[i][0] -= w << 1;
            test = false;
        }
        if (star[i][0] < -x << 1) {
            star[i][0] += w << 1;
            test = false;
        }
        star[i][1] += mouse_y >> 4;
        if (star[i][1] > y << 1) {
            star[i][1] -= h << 1;
            test = false;
        }
        if (star[i][1] < -y << 1) {
            star[i][1] += h << 1;
            test = false;
        }
        star[i][2] -= star_speed;
        if (star[i][2] > z) {
            star[i][2] -= z;
            test = false;
        }
        if (star[i][2] < 0) {
            star[i][2] += z;
            test = false;
        }
        star[i][3] = x + (star[i][0] / star[i][2]) * star_ratio;
        star[i][4] = y + (star[i][1] / star[i][2]) * star_ratio;
        if (star_x_save > 0 && star_x_save < w && star_y_save > 0 && star_y_save < h && test) {
            context.lineWidth = (1 - star_color_ratio * star[i][2]) * 2;
            context.beginPath();
            context.moveTo(star_x_save, star_y_save);
            context.lineTo(star[i][3], star[i][4]);
            context.stroke();
            context.closePath();
        }
    }
    timeout = setTimeout('anim()', fps);
}

// function move(evt) {
//     evt = evt || event;
//     cursor_x = evt.pageX - canvas_x;
//     cursor_y = evt.pageY - canvas_y;
// }

function key_manager(evt) {
    evt = evt || event;
    key = evt.which || evt.keyCode;
    //ctrl=evt.ctrlKey;
    switch (key) {
    case 27:
        flag = flag ? false : true;
        if (flag) {
            timeout = setTimeout('anim()', fps);
        } else {
            clearTimeout(timeout);
        }
        break;
    }
    top.status = 'key=' + ((key < 100) ? '0' : '') + ((key < 10) ? '0' : '') + key;
}

function start() {
    resize();
    anim();
}

function resize() {
    w = parseInt((url.indexOf('w=') != -1) ? url.substring(url.indexOf('w=') + 2, ((url.substring(url.indexOf('w=') + 2, url.length)).indexOf('&') != -1) ? url.indexOf('w=') + 2 + (url.substring(url.indexOf('w=') + 2, url.length)).indexOf('&') : url.length) : get_screen_size()[0]);
    h = parseInt((url.indexOf('h=') != -1) ? url.substring(url.indexOf('h=') + 2, ((url.substring(url.indexOf('h=') + 2, url.length)).indexOf('&') != -1) ? url.indexOf('h=') + 2 + (url.substring(url.indexOf('h=') + 2, url.length)).indexOf('&') : url.length) : get_screen_size()[1]);
    x = Math.round(w / 2);
    y = Math.round(h / 2);
    z = (w + h) / 2;
    star_color_ratio = 1 / z;
    cursor_x = x;
    cursor_y = y;
    init();
}

function init()
        {
        var a=0;
        for(var i=0;i<n;i++)
    {
        star[i]=new Array(5);
        star[i][0]=Math.random()*w*2-x*2;
        star[i][1]=Math.random()*h*2-y*2;
        star[i][2]=Math.round(Math.random()*z);
        star[i][3]=0;
        star[i][4]=0;
    }

    var starfield=$i('starfield');
        starfield.style.position='absolute';
        starfield.width=w;
        starfield.height=h;
        context=starfield.getContext('2d');

        //context.lineCap='round';
        context.fillStyle = 'rgba(32,35,45,' + opacity + ')'; // Background's color
        context.strokeStyle='rgb(241,231,192)'; // Star's color
    }

// document.onmousemove = move;
document.onkeypress = key_manager;
document.onkeyup = release;
document.onmousewheel = mouse_wheel;
if (window.addEventListener) window.addEventListener('DOMMouseScroll', mouse_wheel, false);