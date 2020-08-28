const form = document.getElementById("form");
const username = document.getElementById("username");
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
  formValidation([username, password]);
  validation(password, 6);
});
