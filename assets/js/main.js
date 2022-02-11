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

// Modal view Element
function modalViewElement(data) {
  let list = data;
  $("#modal_name_element").html(list[3]);
  $("#elem_Pid").html(list[0]);
  $("#elem_AtomicWeight").html(list[1]);
  $("#elem_ElementName").html(list[2]);
  $("#elem_Symbol").html(list[3]);
  $("#elem_MeltingPoint").html(list[4]);
  $("#elem_BoilingPoint").html(list[5]);
  $("#elem_Density").html(list[6]);
  $("#elem_Discover").html(list[7]);
  $("#elem_Groups").html(list[8]);
  $("#elem_ElectronConfiguration").html(list[9]);
  $("#elem_IonizationEnergy").html(list[10]);
  $("#modal_viewelement").modal("show");
}
