<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
  margin-top: 20px;
}

section {
  max-width: 900px;
  margin: 0 auto;
  padding: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea,
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="file"] {
  width: auto; /* Adjust as needed */
}

button {
  background-color: #4caf50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

button:hover {
  background-color: #45a049;
}

#map {
  height: 300px;
  margin-top: 20px;
}

@media screen and (max-width: 600px) {
  /* Responsive styles for screens smaller than 600px */
  section {
    padding: 10px;
  }
}
/* Additional CSS styles */

/* Styling for form labels */
label {
  font-weight: bold;
}

/* Styling for form inputs */
input[type="text"],
textarea,
select {
  outline: none; /* Remove default focus outline */
}

/* Styling for form select dropdown arrow */
select {
  /* appearance: none; Remove default select arrow */
  background-image: url("dhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWJBvJFzfUQeu624jGaePUx400k28d6h5Piw&s");
  background-position: right 10px center; /* Position dropdown arrow */
  background-repeat: no-repeat;
}

/* Styling for form file input */
input[type="file"] {
  width: auto; /* Adjust as needed */
}

.file-upload-label {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4caf50;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}

/* Styling for map container */
#map {
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Styling for error messages */
.error-message {
  color: red;
  font-size: 12px;
  margin-top: 5px;
}

/* Styling for success messages */
.success-message {
  color: green;
  font-size: 12px;
  margin-top: 5px;
}
/* Additional CSS styles */

/* Styling for the entire form */
form {
  border: 1px solid #ccc; /* Add border to the form */
  border-radius: 10px; /* Add border radius */
  padding: 20px; /* Add padding to the form */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
  transition: box-shadow 0.3s ease; /* Add transition for shadow animation */
}

/* On hover, increase the shadow intensity */
form:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
#balu {
  margin-left: 380px;
}
</style>