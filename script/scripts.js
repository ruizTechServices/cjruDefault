// import { myFunction, myVariable } from './test.js' here using the import keyword
import { myFunction, myVariable } from './test.js';
import { initHamburgerMenu } from "./hamburgerMenu.js";
import { toggleCursor } from "./blinking-cursor.js";



// call myFunction() and console.log myVariable here
myFunction();
console.log(myVariable);
initHamburgerMenu();
// Call the toggleCursor function every 500 milliseconds to create a blinking effect
setInterval(toggleCursor, 500);



