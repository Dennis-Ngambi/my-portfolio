document.getElementById("add-skill-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var skillInput = document.getElementById("skill-input");
    var skill = skillInput.value.trim();
    
    if (skill === "") {
      // Display error message for empty skill input
      return;
    }
    
    // Add the skill to the list
    addSkill(skill);
    
    // Clear the input field
    skillInput.value = "";
  });
  
  function addSkill(skill) {
    var skillsList = document.getElementById("skills-list");
    
    // Create a new list item
    var listItem = document.createElement("li");
    listItem.textContent = skill;
    
    // Append the list item to the skills list
    skillsList.appendChild(listItem);
    
    // Save the skill to the database
    saveSkill(skill);
  }
  
  function saveSkill(skill) {
    // Send the skill data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "save_skill.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Handle server response (success or error)
        console.log(xhr.responseText);
      }
    };
    xhr.send("skill=" + encodeURIComponent(skill));
  }
  