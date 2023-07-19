let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
} 


function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }
  function validateForm() {
    let x = document.forms["myForm"]["middlename"].value;
    if (x == "") {
      alert("Middle Name must be filled out");
      return false;
    }
  }
  function validateForm() {
    let x = document.forms["myForm"]["surname"].value;
    if (x == "") {
      alert("Surname must be filled out");
      return false;
    }
  }
function validateForm() {
  let x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email Address must be filled out");
    return false;
  }

}
