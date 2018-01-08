function validateForm(e) {

  var errors = [];

  e.preventDefault();
  console.log("hep");
  var x = document.forms["lomake"]["name"].value;
  if (x.length < 3) {
    errors.push("Nimi on pakollinen");
    alert("Nimi on liian lyhyt");

  }
}
