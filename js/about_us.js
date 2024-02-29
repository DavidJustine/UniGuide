var form = document.getElementById("feedbackForm");

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  var formData = new FormData(form);

  fetch('send_feedback.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    if (data === "success") {
      alert("Feedback submitted successfully!"); // Show alert on success
    } else {
      alert("Failed sending a feedback."); // Show alert on error
    }
  })
  .catch(error => console.error('Error:', error));
});

///////////////////////////////
function toggleImage() {
  var orgImage = document.getElementById('orgImage');
  var anotherImage = document.getElementById('anotherImage');
  var titleOrg = document.querySelector('.title_org h1');
  var toggleButton = document.getElementById('toggleButton');

  if (orgImage.classList.contains('hidden')) {
      // Show orgImage and hide anotherImage
      anotherImage.style.opacity = 0;
      anotherImage.classList.add('hidden');
      orgImage.classList.remove('hidden');
      orgImage.style.opacity = 1;
      // Change the title back to original
      titleOrg.textContent = 'DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY ORGANIZATIONAL STRUCTURE';
      // Change button label
      toggleButton.textContent = 'SAS';
  } else {
      // Show anotherImage and hide orgImage
      orgImage.style.opacity = 0;
      orgImage.classList.add('hidden');
      anotherImage.classList.remove('hidden');
      anotherImage.style.opacity = 1;
      // Change the title
      titleOrg.textContent = 'STUDENT AFFAIRS AND SERVICES';
      // Change button label
      toggleButton.textContent = 'DMMMSU';
  }
}