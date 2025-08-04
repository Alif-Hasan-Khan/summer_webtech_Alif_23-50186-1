document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Stop form from submitting

  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let age = document.getElementById("age").value;

  if (name === "") {
    alert("Name is required.");
    return;
  }

  if (email === "" || !email.includes("@")) {
    alert("Enter a valid email.");
    return;
  }

  if (age === "" || age < 10) {
    alert("Age must be at least 10.");
    return;
  }

  alert("Form submitted successfully!");
});
