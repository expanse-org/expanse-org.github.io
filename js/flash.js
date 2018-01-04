document.addEventListener('mousemove', function (e) {
  document.documentElement.style.setProperty('--mouseX', e.clientX);
  document.documentElement.style.setProperty('--mouseY', e.clientY);
});