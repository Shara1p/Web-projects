"use strict";

const trueAnswers = ["a1", "a2", "a3", "a4", "a5", "a6", "a7"];



const divs = document.querySelectorAll(".question");

localStorage.setItem('rights', "0");
localStorage.setItem("lastRights", "0");
let lastRights = JSON.parse(localStorage.getItem("lastRights"));
let rights = JSON.parse(localStorage.getItem("rights"));


let clicks = 0;


document.querySelector(".btn").onclick = function () {
    rights = 0;
    clicks++;
    if (clicks > 1) {
        localStorage.setItem("lastRights", localStorage.getItem("rights"));
        document.getElementById("lastRight").innerText = `В предыдущей попытке было правильных ответов: 
        ${localStorage.getItem("lastRights")}`;
    }

    for (let i = 0; i < trueAnswers.length; i++) {
        const answers = divs[i].querySelector("input[type='radio']:checked");
        console.log(answers);
        if (answers.id == trueAnswers[i]) {
            divs[i].style.background = "#42ff9e";
            rights++;
            localStorage.setItem("rights", rights);
        }
        else {
            divs[i].style.background = "#ff6666";
        }
    }

    document.getElementById("right").innerText = `Количество правильных ответов: ${localStorage.getItem("rights")}`;

};

