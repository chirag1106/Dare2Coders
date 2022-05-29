/*!
* Start Bootstrap - One Page Wonder v6.0.5 (https://startbootstrap.com/theme/one-page-wonder)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-one-page-wonder/blob/master/LICENSE)
*/
// import("./js/jquery.js");

// This file is intentionally blank
// Use this file to add JavaScript to your project

// // custom
// document.addEventListener("DOMContentLoaded", function(){
  
//   if (window.innerWidth > 992) {
  
//     document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
  
//       everyitem.addEventListener('mouseover', function(e){
  
//         let el_link = this.querySelector('a[data-bs-toggle]');
  
//         if(el_link != null){
//           let nextEl = el_link.nextElementSibling;
//           el_link.classList.add('show');
//           nextEl.classList.add('show');
//         }
  
//       });
//       everyitem.addEventListener('mouseleave', function(e){
//         let el_link = this.querySelector('a[data-bs-toggle]');
  
//         if(el_link != null){
//           let nextEl = el_link.nextElementSibling;
//           el_link.classList.remove('show');
//           nextEl.classList.remove('show');
//         }
  
  
//       })
//     });
  
//   }
  
//   }); 
// $(document).ready(function(){
//   console.log('chirag');
  


  
// });
 
function side_bar_show_hide() {
  var x = document.getElementById("side-bar-collapse");
  var wid_100 = document.getElementById("quiz-box");
  if(wid_100.classList.contains("col-lg-9"))
    {
      wid_100.classList.remove("col-lg-9");
      wid_100.classList.add("col-lg-12");
    }  
    if(wid_100.classList.contains("col-lg-12"))
    {
    wid_100.classList.remove("col-lg-12");
    wid_100.classList.add("col-lg-9");
    
  }

}


function password_show_hide() {
  var x = document.getElementById("inputPassword");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
function con_password_show_hide() {
  var x = document.getElementById("inputPassword2");
  var show_eye = document.getElementById("show_eye1");
  var hide_eye = document.getElementById("hide_eye1");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}

// custom-end

// validation



(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
// validation end