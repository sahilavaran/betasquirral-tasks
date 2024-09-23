// first thing is to access the body components using the  document.
const body = document.getElementsByTagName("body")[0];
body.style.backgroundColor = "grey";

function setColor(name) {
  body.style.backgroundColor = name;
}

//setColor("green");  by calling the function it comes in different color whatever color i typed

//now lets create a way that when a particular button is pressed we can change the color

//for that go to the button and place the onClick and in the onclick place the function name and the color

///////////////////////////////////////////

//NOW WE NEED TO SET THE RANDOM COLOR

function randomColor() {
  const red = Math.round(Math.random() * 255);
  const green = Math.round(Math.random() * 255);
  const blue = Math.round(Math.random() * 255);

  //below i am gonna use template Literals
  const color = `rgb(${red}, ${green}, ${blue})`;
  body.style.backgroundColor = color;
}
randomColor();
// 1. Why Use rgb in the Line?
// The rgb function is part of CSS, and it’s used to define colors by specifying the amounts of red, green, and blue light that make up the color. In your JavaScript code, you're constructing a string that uses this rgb function to set the background color of an element.

//`` temeplate literal used for that so we can make it a string
//specially when variables or expressions need to be included within the string.

//dollar and {} used for to add the vaue of the variable

randomColor();
