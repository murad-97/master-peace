let container = document.querySelector(".room");
console.log(container.scrollHeight);
console.log(container.clientHeight);

let cards = document.querySelectorAll(".card");
console.log(cards);
cards.forEach((element) => {
  element.addEventListener("click", (el) => {
    console.log(element.childNodes[1].src);
    container.innerHTML += `<img
       class="element"
       style="height: 174px"
       src="${element.childNodes[1].src}"
       alt="" />`;
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

          choozeElement.style.bottom = "0";
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
  });
});
