function checkAlmaMaterAnswers() {
    var inputs = document.querySelectorAll('#almamater-form input[type="text"]');
    var answers = [
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
    var score = 0;

    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        var answer = answers[i];

        if (input.value.trim().toLowerCase() === answer.toLowerCase()) {
            input.style.backgroundColor = "lightgreen";
            score += 1;
        } else {
            input.style.backgroundColor = "pink";
        }
    }

    var totalQuestions = inputs.length;
    var percentage = (score / totalQuestions) * 16;
    var scoreText = "You scored " + score + " out of " + totalQuestions + " (" + percentage + "%).";

    document.getElementById("score-text").textContent = scoreText;
    document.getElementById("result-container").style.display = "block";
}

function goBack() {
    document.getElementById("result-container").style.display = "none";
    var inputs = document.querySelectorAll('#almamater-form input[type="text"]');
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        input.value = "";
        input.style.backgroundColor = "";
    }

}

    // JavaScript code for showing the answers
    function showAnswers() {
    var answers = [
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
    var answerList = document.getElementById("answer-list");

    // Clear the answer list
    answerList.innerHTML = "";

    // Append each answer to the list
    for (var i = 0; i < answers.length; i++) {
        var listItem = document.createElement("li");
        listItem.textContent = answers[i];
        answerList.appendChild(listItem);
    }

    document.getElementById("answer-container").style.display = "block";
}
var hasViewedAnswers = false; // Track if the user has viewed the answers

// JavaScript code for checking the Alma Mater answers
function checkAlmaMaterAnswers() {
// ...existing code...

var viewAnswersBtn = document.getElementById("view-answers-btn");

if (hasViewedAnswers) {
    viewAnswersBtn.style.display = "block";
} else {
    viewAnswersBtn.style.display = "none";
}

// ...rest of your answer checking code...
}

// JavaScript code for handling the submit button click event
function submitForms() {
checkAlmaMaterAnswers();
hasViewedAnswers = false; // Reset the flag
document.getElementById("view-answers-btn").style.display = "none"; // Hide the "View Answers" button
}

// JavaScript code for handling the "View Answers" button click event
function onViewAnswersClick() {
showAnswers();
hasViewedAnswers = true; // Set the flag to true
document.getElementById("view-answers-btn").style.display = "none"; // Hide the "View Answers" button
}

function goBack() {
      window.history.back(); // Go back to the previous page
    }