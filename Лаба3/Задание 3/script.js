"use strict";

const trueAnswers = ["a1", "a2", "a3", "a4", "a5", "a6", "a7"];



const divs = document.querySelectorAll(".question");

document.querySelector(".btn").onclick = function () {
    for (let i = 0; i < trueAnswers.length; i++) {
        const answers = divs[i].querySelector("input[type='radio']:checked");
        console.log(answers);
        if (answers.id == trueAnswers[i]) {
            divs[i].style.background = "#42ff9e";
        }
        else {
            divs[i].style.background = "#ff6666";
        }
    }
};

