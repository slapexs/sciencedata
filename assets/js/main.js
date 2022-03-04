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

// Get dat alab4
$("#cal_element").submit((e) => {
  e.preventDefault();
  const form_data = $("#find_elements").val();
  $.ajax({
    url: "./backend/function.php",
    type: "post",
    data: {
      findelem: form_data,
    },
    dataType: "json",
    success: (res) => {
      if (res.data) {
        $("#lab4_error").removeClass("d-none");
        $("#find_elements").addClass("is-invalid");
      } else {
        $("#lab4_error").addClass("d-none");
        if ($("#find_elements").hasClass("is-invalid")) {
          $("#find_elements").removeClass("is-invalid");
        }
        $("#list_elements").removeClass("text-muted");
        $("#element_value").addClass("text-primary");
        $("#list_elements").html("");
        $("#element_value").html(res.sum.toFixed(4));
        // $("#list_elements").html(res.list_elements);
        const list_elements = res.list_elements;
        const regex = /[0-9]/;
        for (let i = 0; i < list_elements.length; i++) {
          if (!isNaN(list_elements[i + 1])) {
            let element = `${list_elements[i]}<sub>${
              list_elements[i + 1]
            }</sub>`;
            $("#list_elements").append(`<span>${element}</span>`);
          } else if (isNaN(list_elements[i])) {
            $("#list_elements").append(`<span>${list_elements[i]}</span>`);
          }
        }
      }
    },
    error: (err) => console.log(err),
  });
});
