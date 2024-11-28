let currentQuestion = 1; // Start with the first question

// Show the current question and hide the others
function showQuestion(questionNumber) {
  const allQuestions = document.querySelectorAll('.question');
  allQuestions.forEach((question, index) => {
    if (index + 1 === questionNumber) {
      question.style.display = 'block'; // Show the current question
    } else {
      question.style.display = 'none'; // Hide other questions
    }
  });
}

// Move to the next question
function nextQuestion(questionNumber) {
  // Check if an answer has been selected for the current question
  const selectedAnswer = document.querySelector(`input[name="q${questionNumber}"]:checked`);
  if (selectedAnswer) {
    currentQuestion++;
    if (currentQuestion <= 5) {
      showQuestion(currentQuestion); // Show the next question
    }
  } else {
    alert('Please select an answer before proceeding.');
  }
}

// Submit the quiz and calculate the score
function submitQuiz() {
  const form = document.getElementById('quizForm');
  const resultDiv = document.getElementById('result');
  
  // Correct answers
  const correctAnswers = {
    q1: 'correct1',
    q2: 'correct2',
    q3: 'correct3',
    q4: 'correct4',
    q5: 'correct5'
  };

  let score = 0;
  const totalQuestions = 5;

  // Check answers
  for (let i = 1; i <= totalQuestions; i++) {
    const selectedAnswer = form.querySelector(`input[name="q${i}"]:checked`);
    if (selectedAnswer && selectedAnswer.value === correctAnswers[`q${i}`]) {
      score++;
    }
  }

  // Display result
  resultDiv.textContent = `You scored ${score} out of ${totalQuestions}.`;
  resultDiv.style.color = score === totalQuestions ? 'green' : 'red';
}

// Initialize the quiz by showing the first question
showQuestion(currentQuestion);
