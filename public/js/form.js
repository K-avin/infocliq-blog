window.addEventListener("DOMContentLoaded", function () {
    // get the form elements defined in your form HTML above
  
    var form = document.getElementById("my-form");
    // var button = document.getElementById("my-form-button");
    var sucess = document.getElementById("sucess");
    var fail = document.getElementById("fail");
  
    // Success and Error functions for after the form is submitted
  
    function success() {
      form.reset();
      sucess.classList.add("success");
      sucess.innerHTML = "Thanks for your submission, our team will contact you soon";
    }
  
    function error() {
      fail.classList.add("error");
      fail.innerHTML = "Failed to send your message";
    }
  
    // handle the form submission event
  
    form.addEventListener("submit", function (ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request
  
  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function () {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
//   Valtation form

function myFunction() {
    var inpObj = document.getElementById("name");
    if (!inpObj.checkValidity()) {
      document.getElementById("valitaion").innerHTML = inpObj.validationMessage;
    } else {
      document.getElementById("valitaion").innerHTML = "Input OK";
    } 
  } 