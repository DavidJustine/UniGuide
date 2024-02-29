var timeLimit = 300; // Time limit in seconds

// Function to check the answers
function checkUniversityAnswers() {
  var blanks = [
    "philosophy-blank1",
    "philosophy-blank2",
    "vision-blank1",
    "vision-blank2",
    "mission-blank1",
    "mission-blank2",
    "mission-blank3",
    "goal-blank1",
    "goal-blank2",
    "goal-blank3",
    "goal-blank4",
    "goal-blank5"
  ];

  var correctAnswers = [
    // Fill in the correct answers here
    "human development",
    "appropriate competencies",
    "globally",
    "competitive",
    "instruction",
    "research",
    "extension",
    "transforming",
    "resources",
    "productive",
    "self-reliant",
    "leaders"
  ];

  var correctCount = 0;

  for (var i = 0; i < blanks.length; i++) {
    var userInput = document.getElementById(blanks[i]).value.trim();

    if (userInput.toLowerCase() === correctAnswers[i].toLowerCase()) {
      document.getElementById(blanks[i]).style.border = "2px solid green";
      correctCount++;
    } else {
      document.getElementById(blanks[i]).style.border = "2px solid red";
    }
  }

  var resultMessage = "You got " + correctCount + " out of " + correctAnswers.length + " answers correct.";
  document.getElementById("result").innerHTML = resultMessage;

  // Show the "View Answers" button
  document.getElementById("view-answers-btn").style.display = "block";
}

// Function to go back to the previous page
function goBack() {
  window.history.back();
}

// Function to display the correct answers on the same tab
function onViewAnswersClick() {
  // Directly set the answer key URL
  var answerKeyURL = 'fillin_pmvgo_key.html'; // Adjust this path based on your project's structure

  // Hide the current content
  document.body.innerHTML = '';

  // Load the answer key content in the current tab
  fetch(answerKeyURL)
    .then(response => response.text())
    .then(data => {
      // Replace the current page's content with the answer key content
      document.open();
      document.write(data);
      document.close();
    })
    .catch(error => {
      console.error('Error fetching answer key:', error);
    });
}

// Function to go back to the form page
function goBackToForm() {
  window.location.href = 'fillin.html';
}
