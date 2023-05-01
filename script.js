let text = document.querySelector(".text"),
  btn1 = document.querySelector("#btn1"),
  btn2 = document.querySelector("#btn2");

btn1.onclick = addText;
btn2.onclick = removeText;

function addText() {
  text.hidden = false;
}

function removeText() {
  text.hidden = true;
}
