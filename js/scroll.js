var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (this.screen.width > 500) {
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-100px";
    }
  }
  if (currentScrollPos > 300) {
    document.getElementById("navbar").style.background = "rgba(4, 92, 140, 1)";
  } else {
    document.getElementById("navbar").style.background = "rgba(0, 0, 0, 0)";
  }
  prevScrollpos = currentScrollPos;
};
