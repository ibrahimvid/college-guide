const fullname = document.getElementById("fullname");
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");


function errorFun(input, textMessage) {
  const parentForm = input.parentElement;
  parentForm.className = "form-control invalid";
  const small = parentForm.querySelector("small");
  small.innerText = textMessage;
}

function successFun(input, textMessage) {
  const parentForm = input.parentElement;
  parentForm.className = "form-control valid";
}

function emailValidation(input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(input.value.trim())
    ? successFun(input)
    : errorFun(input, "Email is not Valid");
}

function validation(input, min) {
  return input.value.length < min
    ? errorFun(input, `Password must be at least ${min} characters`)
    : successFun(input);
}
function formValidation(inputArr) {
  inputArr.forEach((input) => (input.value.trim() === "")? errorFun(input, `Please enter the details`):successFun(input));
      
}

form.addEventListener("submit", function (event) {
  event.preventDefault();
  formValidation([fullname, username, email, password]);
  emailValidation(email);
  validation(password, 6)
  
});
