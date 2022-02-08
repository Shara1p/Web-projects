/* Задания на урок:

1) Удалить все рекламные блоки со страницы (правая часть сайта)

2) Изменить жанр фильма, поменять "комедия" на "драма"

3) Изменить задний фон постера с фильмом на изображение "bg.jpg". Оно лежит в папке img.
Реализовать только при помощи JS

4) Список фильмов на странице сформировать на основании данных из этого JS файла.
Отсортировать их по алфавиту 

5) Добавить нумерацию выведенных фильмов */

'use strict';

const movieDB = {
    movies: [
        "Логан",
        "Лига справедливости",
        "Ла-ла лэнд",
        "Одержимость Говна",
        "Скотт Пилигрим против...",
    ]
};

//удаление рекламы
document.querySelector('.promo__adv-title').remove();

const advers2 = document.querySelectorAll('.promo__adv img');

advers2.forEach(items => {
    items.remove();
});

//Замена комедии на драму
document.querySelector('.promo__genre').innerText = 'драма';

//замена картинки фильма
const mars = document.querySelector('.promo__bg');
mars.style.backgroundImage = 'url("img/bg.jpg")';

//список фильмов
const filmList = document.querySelector(".promo__interactive-list");

filmList.innerHTML = "";


movieDB.movies.forEach((items, index) => {
    filmList.innerHTML += `<li class="promo__interactive-item">${index + 1} ${items}
                                <div class="delete"></div> 
                          </li>`;
});


let button = document.querySelector(".add").lastElementChild;
let checkBox = document.querySelector(".add").childNodes[9];


button.addEventListener("click", () => {
    let input = document.querySelector(".add").childNodes[5].value;
    let string = "";
    if (checkBox.checked) {
        console.log("Добавляем любимый фильм");
    }

    for (let i = 0; i < input.length; i++) {
        if (i == 21) {
            string += "...";
            break;
        }
        else {
            string += input[i];
        }
    }
    movieDB.movies.push(string);

    filmList.innerHTML += `<li class="promo__interactive-item">${movieDB.movies.length} ${string}
                                <div class="delete"></div> 
                          </li>`;
});

movieDB.movies.sort();
movieDB.movies.forEach((items, index) => {
    filmList.innerHTML = ``;
});
movieDB.movies.forEach((items, index) => {
    filmList.innerHTML += `<li class="promo__interactive-item">${index + 1} ${items}
                                <div class="delete"></div> 
                          </li>`;
});

let list = document.querySelector(".promo__interactive-list").childNodes;
// console.log(list[0].lastElementChild);
let i = 0;
list.forEach((item) => {
    item.lastElementChild.addEventListener("click", () => {
        //delete movieDB.movies[item];
        item.remove();
        //movieDB.movies.splice(i, 1);

        // movieDB.movies.forEach((items, index) => {
        //     filmList.innerHTML = ``;
        // });
        // movieDB.movies.forEach((items, index) => {
        //     filmList.innerHTML += `<li class="promo__interactive-item">${index + 1} ${items}
        //                                 <div class="delete"></div> 
        //                           </li>`;
        // });
    });
});