var email = document.getElementById("email");
var btn = document.getElementById("btn");
var password = document.getElementById("password");
// btn.style.display = "none";
function validation() {
  var l = password.value.length;

  var x = email.value;
  btn.disabled = true;

  if (x != "") {
    if (l > 5) {
      //   btn.style.display = "block";
      btn.innerHTML = "submit";
      btn.classList = "btn btn-primary";
    } else {
      btn.classList = "btn btn-secondary";
    }
  }
}
