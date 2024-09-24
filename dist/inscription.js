window.onload = function () {
  let password = document.getElementById("password");
  let birthdate = document.getElementById("birth");

  if (password.value !== "") {
    correctMdp();
  }

  if (birthdate.value !== "") {
    correctBirth();
  }
};

var goodMdp = false;
var goodBirthdate = false;
var acceptCGU = false;

function correctBirth() {
  let birthdate = document.getElementById("birth");
  birthdate.value = birthdate.value.replace(/^(\d{2})(\d{2})/, "$1/$2/");
  if (/(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}/.test(birthdate.value)) {
    birthdate.classList.remove("border-red-500");
    goodBirthdate = true;
  } else {
    birthdate.classList.add("border-red-500");
    goodBirthdate = false;
  }

  checkIfEverythingIsCorrect();
}

function correctMdp() {
  let password = document.getElementById("password");
  let confirmPassword = document.getElementById("confirmPassword");

  let minuscule = document.getElementById("minuscule");
  let majuscule = document.getElementById("majuscule");
  let chiffre = document.getElementById("chiffre");
  let special = document.getElementById("special");
  let minimum = document.getElementById("minimum");

  let sendButton = document.getElementById("sendButton");
  let count = 0;

  if (/[a-z]/.test(password.value)) {
    minuscule.classList.add("text-green-400");
    minuscule.classList.remove("text-red-500");
    count++;
  } else {
    minuscule.classList.remove("text-green-400");
    minuscule.classList.add("text-red-500");
    count--;
  }

  if (/[A-Z]/.test(password.value)) {
    majuscule.classList.add("text-green-400");
    majuscule.classList.remove("text-red-500");
    count++;
  } else {
    majuscule.classList.remove("text-green-400");
    majuscule.classList.add("text-red-500");
    count--;
  }

  if (/[0-9]/.test(password.value)) {
    chiffre.classList.add("text-green-400");
    chiffre.classList.remove("text-red-500");
    count++;
  } else {
    chiffre.classList.remove("text-green-400");
    chiffre.classList.add("text-red-500");
    count--;
  }

  if (/[!@#$%^&*)(+=._-]/.test(password.value)) {
    special.classList.add("text-green-400");
    special.classList.remove("text-red-500");
    count++;
  } else {
    special.classList.remove("text-green-400");
    special.classList.add("text-red-500");
    count--;
  }

  if (password.value.length >= 8) {
    minimum.classList.add("text-green-400");
    minimum.classList.remove("text-red-500");
    count++;
  } else {
    minimum.classList.remove("text-green-400");
    minimum.classList.add("text-red-500");
    count--;
  }

  if (count == 5) {
    goodMdp = true;
    password.classList.remove("border-red-500");
    confirmPassword.classList.remove("border-red-500");
  } else {
    goodMdp = false;
    password.classList.add("border-red-500");
    confirmPassword.classList.add("border-red-500");
  }

  checkIfEverythingIsCorrect();
}

function cguBox() {
  acceptCGU = !acceptCGU;
  checkIfEverythingIsCorrect();
}

function checkIfEverythingIsCorrect() {
  if (goodMdp && goodBirthdate && acceptCGU) {
    let sendButton = document.getElementById("sendButton");
    sendButton.removeAttribute("disabled");
  } else {
    sendButton.setAttribute("disabled", "");
  }

  console.log(goodMdp, goodBirthdate, acceptCGU);
}
