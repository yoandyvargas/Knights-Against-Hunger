function toggleAct() {
  document.getElementById("act").classList.toggle("show");
}
function toggleHelp() {
  document.getElementById("help").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches(".toggler")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var bing = document.getElementsByClassName("dropdown-content-alt");
    var i;
    var x;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
    for (x = 0; x < bing.length; x++) {
      var openDropdown2 = bing[x];
      if (openDropdown2.classList.contains("show")) {
        openDropdown2.classList.remove("show");
      }
    }
  }
};
