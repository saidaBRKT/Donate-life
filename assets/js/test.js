const testBtn = document.querySelector(".start-btn");
const questionnaire = document.querySelector(".questionnaire");
const Préambule = document.querySelector(".Préambule");
const stepper = document.querySelectorAll(".stepper h1");
const nextBtn = document.querySelector(".next");
const previousBtn = document.querySelector(".previous");
const currentquestion = document.querySelector(".question");
const answerInputs = document.querySelector(".answer-inputs");
const progressBar = document.querySelector(".bar");
const questionNumber = document.querySelector(".question-number");
const animateBox = document.querySelector(".animation");
const result = document.querySelector(".Préambule h1");
const resultMessage = document.querySelectorAll(".Préambule p");

testBtn.addEventListener("click", startTest);

animateBox.addEventListener("input", (e) => {
  const input = e.target;

  // if (input.type === "number") {
   
    answers[input.name] = input.id;
    console.log(answers);
    nextBtn.disabled = false;
   
});

// ! :::::::::::::::::::     fuction

let currentQuestionIndex = 0;

function hideprevious() {
  if (currentQuestionIndex === 0) {
    previousBtn.classList.add("hide");
  } else {
    previousBtn.classList.remove("hide");
  }
}

function startTest() {
  stepper[0].classList.remove("select");
  stepper[1].classList.add("select");
  testBtn.style.display = "none";
  Préambule.style.display = "none";
  questionnaire.style.display = "block";
  hideprevious();
  nextBtn.disabled = true;
  showQuestion(questions[currentQuestionIndex]);
}

nextBtn.addEventListener("click", () => {
  if (currentQuestionIndex < 16) {
    currentQuestionIndex++;
    showQuestion(questions[currentQuestionIndex]);
    folowProgress(currentQuestionIndex);
    hideprevious();
    transition("next");
    nextBtn.disabled = true;
    if (currentQuestionIndex === 9) {
      nextBtn.innerText = "Terminer le test";
      nextBtn.classList.add("result");
      const resultBtn = document.querySelector(".result");
      resultBtn.addEventListener("click", Results);
    } else {
      nextBtn.innerText = "Suivant";
    }
  }
});

previousBtn.addEventListener("click", () => {
  currentQuestionIndex--;
  showQuestion(questions[currentQuestionIndex]);
  folowProgress(currentQuestionIndex);
  hideprevious();
  transition("previous");
  nextBtn.disabled = true;
  if (currentQuestionIndex === 9) {
    nextBtn.innerText = "Terminer le test";
  } else {
    nextBtn.innerText = "Suivant";
    nextBtn.classList.remove("result");
  }
});

function showQuestion(question) {
  currentquestion.innerText = question.question;
  answerInputs.innerHTML = "";
  const inputAnswer = question.input.answer;
  const input = question.input;

  if (question.input.type === "radio") {
    inputAnswer.forEach((answer) => {
      answerInputs.innerHTML += `
        <div class="w-100 d-flex justify-content-center align-item-center">
          <div class="d-flex">
              <input type="radio" name="${input.qNumber}" id="${answer.text}" class="ms-5">
              <label for="${answer.text}">
              <i class="fa-solid  ${answer.icon}"></i>
              <span>${answer.text}</span></label>
          </div>
        </div>  
        `;
    });
  }
  
}

function folowProgress(number) {
  const currentNmber = number + 1;
  questionNumber.innerText = currentNmber;
  progressBar.style.width = `calc(${currentNmber} * calc(100% / 10))`;
}

function transition(frame) {
  animateBox.style.animation = ` ${frame} .5s ease `;
  animateBox.addEventListener("animationend", () => {
  animateBox.style.animation = ``;
  });
}

let answers = {};

let severity = 0;

function Results() {
  if (answers["Q1"] === "Oui" || answers["Q2"] === "Oui" || answers["Q3"] === "Oui" || answers["Q4"] === "Oui" || answers["Q5"] === "Oui" || answers["Q6"] === "Oui" || answers["Q7"] === "Oui" || answers["Q8"] === "Oui" || answers["Q92"] === "Oui" || answers["Q10"] === "Oui") {
    severity=1;
  }
  showResult(severity);
}

function showResult(severity) {
  stepper[1].classList.remove("select");
  stepper[2].classList.add("select");
  testBtn.style.display = "block";
  Préambule.style.display = "block";
  questionnaire.style.display = "none";
  testBtn.textContent = " Recommencer le test";
  testBtn.addEventListener("click", () => {
    window.location.reload();
  });

  result.innerText = "Résultats";

  if (severity === 0) {
    resultMessage[0].innerText =
      "Bravo !!";
    resultMessage[1].innerText =
      "This result is given for information only. a member of the authorized medical staff at the CNTS and CRTS collection points will be able to confirm your suitability during the interview prior to blood donation";
    resultMessage[0].style.fontSize = "30px";
    resultMessage[0].style.fontWeight = "bold";
    resultMessage[0].style.color = "#787878";
  }
  if (severity === 1) {
    resultMessage[0].innerText =
      "Sorry !!";
    resultMessage[1].innerText =
      "To preserve your health you cannot donate your blood.";
    resultMessage[0].style.fontSize = "30px";
    resultMessage[0].style.fontWeight = "bold";
    resultMessage[0].style.color = "#787878";
  }
}

// --------------- Questions ----------------------//

const questions = [
  {
    question:
      "Are you under 18 or over 60?",

    input: {
      type: "radio",
      qNumber: "Q1",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Do you weigh less than 50 kg ?",

    input: {
      type: "radio",
      qNumber: "Q2",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Have you ever been treated for cancer?",

    input: {
      type: "radio",
      qNumber: "Q3",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question: "Have you been treated for a chronic disease such as: insulin-treated diabetes, inflammatory bowel disease, autoimmune disease...?",

    input: {
      type: "radio",
      qNumber: "Q4",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Are you followed by the doctor for anemia or lack of iron? additional info: anemia is a drop in the level of hemoglobin.",

    input: {
      type: "radio",
      qNumber: "Q5",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Have you had a fever or an infection (cough, diarrhoea, urinary tract infection, skin wound, etc.) in the last 2 weeks?",

    input: {
      type: "radio",
      qNumber: "Q6",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Have you had a piercing (earring included) or a tattoo in the last 4 months?",

    input: {
      type: "radio",
      qNumber: "Q7",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Have you had any dental care (caries, repair), root treatment or tooth extraction in the past 4 months?",

    input: {
      type: "radio",
      qNumber: "Q8",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
  {
    question:
      "Have you had more than one sexual partner in the past 4 months?",

    input: {
      type: "radio",
      qNumber: "Q9",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
 {
    question:
      "Have you sent to countries at risk of malaria?",

    input: {
      type: "radio",
      qNumber: "Q10",
      answer: [
        {
          text: "Oui",
        },
        {
          text: "Non",
        },
      ],
    },
  },
];



// class="answer-inputs"