let element;

/*** unique for each html element. Returns HTML element. Returns null if not found. ***/
element = document.getElementById('value');

/*** NOT unique for each html element. Returns element list of all elements. Returns null if not found. ***/
element = document.getElementsByName('value');

/*** sets an attribute for an element. ***/
element.setAttribute('border', 1);

/*** returns boolean whether an element has a certain attribute or not. ***/
let check = element.hasAttribute('border');

/*** gets parent element for element ***/
let parent = element.parentNode;

/*** creates an element and appends it to the document ***/
let div = document.createElement('div');
div.id = 'content';
div.innerHTML = '<p>create element example</p>';
document.body.appendChild(div);

/*** Document Fragment Interface ***/

/*** Events ***/
element.setAttribute('onmouselick', 'eventFunction()');
let btn = document.getElementById('button_id');
element.addEventListener(btn);

function eventFunction() {
    alert("It was clicked");
}