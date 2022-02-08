"use strict";

let passPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/,
    mailPattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
    phonePattern = /\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/,
    namePattern = /^[А-Яа-яЁё\s]+$/;



let names = document.getElementsByClassName("name"),
    mail = document.querySelector(".mail"),
    pass = document.querySelector(".pass"),
    inputs = document.getElementsByTagName("input");


document.querySelector(".submit").onclick = function () {
    for (let i = 0; i < names.length; i++) {
        console.log(names[i]);
        if (!validate(namePattern, names[i].value)) {
            alert(`Введеные не корректные данные в поле вашего имени`);
            return 0;
        }
    }
    if (!validate(mailPattern, mail.value)) {
        alert("Введены некорректные данные в почте");
        return 0;
    }
    else if (!validate(passPattern, pass.value)) {
        alert("Введены некорректные данные в пароле");
        return 0;
    }
};

document.querySelector(".submit").onclick = function () {
    console.log(inputs[0]);
    for (let i = 0; i < inputs.length; i++) {
        if (i == 3) {
            continue;
        }
        if (inputs[i].value == "") {
            alert("Вы не заполнили все необходимыe поля");
            return 0;
        }
    }
};

function validate(pattern, inp) {
    return pattern.test(inp);
}