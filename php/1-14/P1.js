function myValidation() {
  let a = document.getElementById("number").value;
  let error = document.getElementById("error");
  let text;
  let regEx = /^[0-9]+$/;
  if (a == "null" || a == "") {
    alert("Please enter number");
    return false;
  }
  if (regEx.test(a) == 0) {
    text =
      "<i class='fas fa-exclamation-circle'></i> Please enter positive number";
    error.innerHTML = text;
    return false;
  }

  return true;
}
