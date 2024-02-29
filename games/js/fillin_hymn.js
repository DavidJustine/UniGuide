var timeLimit = 300; // Time limit in seconds

function checkAlmaMaterAnswers() {
  var blanks = [
    "blank1",
    "blank2",
    "blank3",
    "blank4",
    "blank5",
    "blank6",
    "blank7",
    "blank8",
    "blank9",
    "blank10",
    "blank11",
    "blank12",
    "blank13",
    "blank14",
    "blank15",
    "blank16"
  ];

  var correctAnswers = [
    "Hail",
    "honored",
    "heads",
    "hands",
    "institution",
    "life",
    "inspiration",
    "knowledge",
    "wisdom",
    "instruction",
    "research",
    "extension",
    "transforming",
    "great nation",
    "love",
    "Beloved"
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

  var resultMessage = "You got " + correctCount + " out of " + blanks.length + " answers correct.";
  document.getElementById("result").innerHTML = resultMessage;

  // Show the "View Answers" button
  document.getElementById("view-answers-btn").style.display = "block";

  // Disable form inputs after submitting
  disableFormInputs();
}

function goBack() {
  window.history.back();
}

function disableFormInputs() {
  var form = document.getElementById("almamater-form");
  var inputs = form.getElementsByTagName("input");

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].disabled = true;
  }
}

function onViewAnswersClick() {
  var currentURL = window.location.href;
  var answerKeyURL = currentURL.substring(0, currentURL.lastIndexOf("/") + 1) + "fillin_hymn_key.html";
  
  window.open(answerKeyURL, '_blank');
}

function goBackToForm() {
  window.location.href = 'fillin.html';
}
