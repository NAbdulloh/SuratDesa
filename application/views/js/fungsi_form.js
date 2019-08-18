function validateForm() {
  var x = document.forms["formSurat"]["nama"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}