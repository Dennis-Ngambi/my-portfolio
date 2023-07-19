document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    // Perform form validation
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var messageInput = document.getElementById("message");
    
    if (nameInput.value.trim() === "") {
      // Display error message for name input
      return;
    }
    
    if (emailInput.value.trim() === "") {
      // Display error message for email input
      return;
    }
    
    if (messageInput.value.trim() === "") {
      // Display error message for message input
      return;
    }
    
    // Form is valid, proceed to submit
    submitForm();
  });
  
  function submitForm() {
    // Collect form data
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    
    // Prepare data to send to the server
    var formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("message", message);
    
    // Send data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_contact.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Handle server response (success or error)
        console.log(xhr.responseText);
      }
    };
    xhr.send(formData);
  }
  