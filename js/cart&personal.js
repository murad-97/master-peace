let card_form = document.querySelector(".card-form");
let card = document.querySelector(".card1");
let personal = document.querySelector(".personal");
let completed = document.querySelector(".Completed");
let input = document.querySelector(".input");

let btn = document.querySelector(".btn");

card_form.addEventListener("submit", (ev) => {
  ev.preventDefault();

  card.classList.add("display");
  personal.classList.remove("display");
});
personal.addEventListener("submit", (ev) => {
  ev.preventDefault();

  personal.classList.add("display");
  completed.classList.remove("display");
});
