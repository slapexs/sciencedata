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
function clearDisplay() {
  $("#elements").html("");
  $("#list_elements").html("");
  $("#value_elements").html("");
  $("#element_value").html("0");
}
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
      clearDisplay();
      if (res.data) {
        $("#lab4_error").removeClass("d-none");
        $("#find_elements").addClass("is-invalid");
      } else {
        $("#lab4_error").addClass("d-none");
        if ($("#find_elements").hasClass("is-invalid")) {
          $("#find_elements").removeClass("is-invalid");
        }
        $("#list_elements").removeClass("text-muted");
        $("#list_elements").html("");
        $("#element_value").html(res.sum.toFixed(4));

        const list_elements = res.list_elements;
        let arr_elements = [];
        for (let i = 0; i < list_elements.length; i++) {
          if (!isNaN(list_elements[i + 1])) {
            arr_elements.push(
              `${list_elements[i]}<sub>${list_elements[i + 1]}</sub>`
            );
          } else if (isNaN(list_elements[i])) {
            arr_elements.push(`${list_elements[i]}`);
          }
        }

        // Display elements and values
        $("#value_elements").html("");
        for (let i = 0; i < arr_elements.length; i++) {
          $("#elements").append(`<span>${arr_elements[i]}</span>`);
          if (res.value_elem[i] > 0) {
            $("#list_elements").append(`<span>${arr_elements[i]}</span>`);
            $("#value_elements").append(`<span>${res.value_elem[i]}</span>`);
          } else {
            $("#list_elements").append(
              `<span class="text-danger"><small>ไม่พบธาตุ ${arr_elements[i]}</small></span>`
            );
            $("#value_elements").append(
              `<span class="text-danger">${res.value_elem[i]}</span>`
            );
          }
          if (i != arr_elements.length - 1) {
            $("#list_elements").append(`<span class="mx-1">+</span>`);
            $("#value_elements").append(`<span class="mx-1">+</span>`);
          }
        }
      }
    },
    error: (err) => console.log(err),
  });
});
