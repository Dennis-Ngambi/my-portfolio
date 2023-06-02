<script>
var form = document.getElementById('myForm');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting normally

  // Validate the form fields
  var firstnameInput = document.getElementById('First name');
  var middleInput = document.getElementById('Middle name');
  var surnameInput = document.getElementById('Surname');
  var usernameInput = document.getElementById('Username');
  var emailaddressInput = document.getElementById('Email Address');
  var dateofbirthInput = document.getElementById('Date of Birth');
  var phonenumberInput = document.getElementById('Phone Number');
  var genderInput = document.getElementById('Gender');

  if (nameInput.value === '' || emailInput.value === '') {
    alert('Please fill in all the required fields.'); // Display an alert if any required field is empty
    return;
  }

  // If all fields are valid, submit the form
  form.submit();
});
</script>