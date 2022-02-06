function loadLab(labid) {
  if (labid != 0) {
    $("#super").addClass("d-none");
    $("#content").removeClass("d-none");
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
      document.getElementById("content").innerHTML = this.responseText;
    };
    xhttp.open("GET", `./pages/lab${labid}.php`);
    xhttp.send();
  } else {
    $("#super").removeClass("d-none");
    $("#content").addClass("d-none");

  }
}
