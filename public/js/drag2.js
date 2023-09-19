let container = document.querySelector(".room");
console.log(container.scrollHeight);
console.log(container.clientHeight);

let cards = document.querySelectorAll(".card");
console.log(cards);
cards.forEach((element) => {
  element.addEventListener("click", (el) => {
    if (element.classList.contains("furniture")) {
      container.innerHTML += `<img
      class="furniture element"
      style="height: 150px;position: absolute;bottom: 0;"
      src="${element.childNodes[1].src}"
      alt="" />`;
      move()
    } else if (element.classList.contains("painting")) {
      console.log(container.style.backgroundImage);
      container.style = `background-image: url(${element.childNodes[1].src});`;
    } else if (element.classList.contains("lightning")) {
      container.innerHTML += `<img
      class="lightning element"
      style="height: 110px;position: absolute;top: 0;"
      src="${element.childNodes[1].src}"
      alt="" />`;
      move()
    }
    // console.log(element.childNodes[1].src);
  });
});


function move() {
  
    let elements = document.querySelectorAll(".element");
    elements.forEach((element) => {
      element.addEventListener("mousedown", (eo) => {
        elements.forEach((ele) => {
          ele.style.zIndex = "0";
        });
        let width = element.clientWidth;
        console.log(width);
        element.style.zIndex = "1";

        element.style.position = "absolute";

        choozeElement = element;
        document.onmousemove = (eo) => {
          var x = eo.pageX;
          var y = eo.pageY;
          // if (y < 50) {
          //   choozeElement.style.top = 0;
          // } else if (y > container.clientHeight) {
          //   choozeElement.style.bottom = 0;
          // } else {
          //     choozeElement.style.top = y - 50 + "px";
          // }
console.log(element.classList.contains('furniture'));
          // choozeElement.style.bottom = "0";
          if (x < width) {
            choozeElement.style.left = 0;
          } else if (x > container.clientWidth) {
            choozeElement.style.right = 0;
          } else {
            choozeElement.style.left = x - width + "px";
          }

          // console.log(element);
        };
      });
    });
    document.onmouseup = (eo) => {
      choozeElement = null;
    };
  }