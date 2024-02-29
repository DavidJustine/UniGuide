const quizData = [
    {
        question: "What year DMMMSU was founded?",
        a: "1945",
        b: "1971",
        c: "2001",
        d: "1981",
        correct: "d",
    },
    {
        question: "What is the missing part? Philosphy,______,Vision, Goals",
        a: "Manage",
        b: "Mission",
        c: "Mastery",
        d: "Mind",
        correct: "b",
    },
    {
        question: "Which among these statements belong to PMVG: Goals?",
        a: "To lead in transforming human resources into productive, self-reliant citizens and responsible leaders",
        b: "Provides high quality instruction, research and extension",
        c: "A globally competitive university.",
        d: "Total human development with appropriate competencies.",
        correct: "a",
    },
    {
        question: "What is the Mantra of DMMMSU?",
        a: "A globally competetive university",
        b: "Embracing world-class standards",
        c: "Provides high quality instruction, research and extension",
        d: "none of the above",
        correct: "b",
    },
    {
        question: "What S stand for in the core values in SPECIAL?",
        a: "Stake",
        b: "Security",
        c: "Service",
        d: "Student",
        correct: "c",
    },
    {
        question: "What does SAS stands for?",
        a: "Student Appears and Security",
        b: "Student Affairs and Services",
        c: "Staff Affairs and Services",
        d: "Service Advice and Security",
        correct: "b",
    },
    {
        question: "Which does not belong here?",
        a: "DMMMSU NELUC",
        b: "DMMMSU MLUC",
        c: "DMMMSU NLUC",
        d: "DMMMSU OUS",
        correct: "a",
    },
    {
        question: "Total _______ development with appropriate competencies.",
        a: "success",
        b: "technology",
        c: "university",
        d: "human",
        correct: "d",
    },
    {
        question: "Who is the president of DMMMSU",
        a: "Dr. James I. Emmanuel, Jr.",
        b: "Dr. Jaime I. Manuel, Jr.",
        c: "Dr. Haime I. Manuel, Jr.",
        d: "Dr. Jaimie I. Emmanuel, Jr.",
        correct: "b",
    }, 
    {
        question: "What does ICJE mean?",
        a: "Investigation in Criminal Justice Education",
        b: "Institution of Crime Justice Education",
        c: "Institution of Criminal Justice Education",
        d: "Institute of Criminal Justice Education",
        correct: "c",
    },
    {
        question: "What does SPECIAL means from core values?",
        a: "Services, Productivity, Excellence, Commitment, Innovation, Advocacy, Leadership",
        b: "Services, Protection, Excellence, Community, Innovation, Advocacy, Leadership",
        c: "Services, Productivity, Excellence, Community, Initiative, Advocacy, Leadership",
        d: "Services, Protection, Excellence, Commitment, Initiative, Advocacy, Leadership",
        correct: "a",
    },
    {
        question: "Who created DMMMSU (Don Mariano Marcos Memorial State University) through Presidential Decree 1778 on January 15, 1981?",
        a: "Former President Ferdinand E. Marcos",
        b: "Former President Corazon C. Aquino",
        c: " Former President Gloria Macapagal-Arroyo",
        d: "Former President Benigno S. Aquino III",
        correct: "a",
    },
    {
        question: "Which of the following Official student publication you can only find at DMMMSU-MLUC?",
        a: "The Forum",
        b: "The Green Valley Treasure.",
        c: "The MLUC Voice",
        d: "The Literary Journal",
        correct: "c",
    },
    {
        question: "Which philosophy forms the foundation of DMMMSU (Don Mariano Marcos Memorial State University)?",
        a: "Education for all, excellence for life.",
        b: "Empowering minds, transforming futures.",
        c: "Knowledge for progress, service for society",
        d: "Total human development with appropriate competencies.",
        correct: "d",
    },
    {
        question: "What does DMMMSU stands for?",
        a: "Don Maria Marcos Memorial State University",
        b: "Don Mariano Marcos Memorial State University",
        c: "Dan Mariano Marcos Memorial State University",
        d: "Don Mariano Marcus Memorial State University",
        correct: "b",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>
           <button onclick="location.reload()">Play Again</button>
           `
       }
    }
})