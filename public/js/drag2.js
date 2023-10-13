let container = document.querySelector(".room");
let cards = document.querySelectorAll(".card");
let details = document.querySelector(".description");
console.log(cards);
cards.forEach((card) => {
  card.addEventListener('mouseenter', () => {
   details.innerHTML = `${card.getAttribute('description')}`
});
card.addEventListener('mouseleave', () => {
  details.innerHTML = ``
});
})
cards.forEach((element) => {
  element.addEventListener("click", (el) => {
    console.log(element.getAttribute('height'))
    if (element.classList.contains("furniture")) {
      const image = document.createElement('img');
      image.className = 'furniture element';
      image.style.height = `${element.getAttribute('height')}px`;
      image.style.position = 'absolute';
      image.style.bottom = '0';
      image.src = element.childNodes[1].src;
      image.alt = '';




      // Append the image to the container
      container.appendChild(image);

      let valueToAdd = element.getAttribute('value');
    console.log(valueToAdd);
      axios.post('/add-value-to-session-array', {
        data: valueToAdd
    })
    .then(function (response) {
        console.log(response.data.message); // Output the response message
        // You can update the DOM or perform other actions here if needed
    })
    .catch(function (error) {
        console.error(error);
    });
      move()
    } else if (element.classList.contains("painting")) {

      container.style = `background-image: url(${element.childNodes[1].src});`;

      let valueToAdd = element.getAttribute('value');
      axios.post('/add-value-to-session-array', {
        data: valueToAdd
    })
    .then(function (response) {
        console.log(response.data.message); // Output the response message
        // You can update the DOM or perform other actions here if needed
    })
    .catch(function (error) {
        console.error(error);
    });
      move()
    } else if (element.classList.contains("lightning")) {
      container.innerHTML += `<img
      class="lightning element"
      style="height: ${element.getAttribute('height')}px;position: absolute;top: 0;"
      src="${element.childNodes[1].src}"
      alt="" />`;


      let valueToAdd = element.getAttribute('value');
      axios.post('/add-value-to-session-array', {
        data: valueToAdd
    })
    .then(function (response) {
        console.log(response.data.message); // Output the response message
        // You can update the DOM or perform other actions here if needed
    })
    .catch(function (error) {
        console.error(error);
    });
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
  // For the thumbnail demo! :]

