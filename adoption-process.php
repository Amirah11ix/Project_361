<!DOCTYPE html>
<head>
      <title>adoption-process Form</title>
      <link rel="stylesheet" href="formex.css">
      <meta charset="utf-8">
</head>
<body>

  <script type= "text/jscript">
  document.getElementById('checkbox').onclick = function() {
  var markedCheckbox = document.querySelectorAll('input[type="checkbox"]:checked');
  for (var checkbox of markedCheckbox) {
  document.body.append(checkbox.value + ' ');
  }
  }
  </script>

      <div class="content">
  <div class="container-fluid" >
     <div class="container">
<br>
<h2>Adoption-Process Form</h2><br>
<br><p>Please fill the following form:</p> <hr><br>
</div>
<form action="connect.php" method="post">
<label class="btn">First Name:</label>
<input type="text" id="name"><br><br>
<label >Last Name:</label>
<input type=text id="name"><br><br>

<label >Gender:</label>
<input type="radio" id="male" name="gender" value="male"> <label >Male</label>
<input type="radio" id="female" name="gender" value="female"> <label >Female</label><br><br>
<label for="address">Your reason for adopting:</label><br>
<textarea id="address" rows="4" cols="60" placeholder="Write your reason here!"></textarea><br><br>
<label >E-mail Address:</label>
<input type="email" id="email" ><br><br>
<label >Contact No:</label>
<input type="tel" id="contact" ><br><br>
<label >Date of birth:</label>
<input type="date" id="birth" ><br><br> <hr>
<label >Cat Name:</label>
<input type="text" id="name"><br><br>
<label >Have you ever adopted a cat?</label><br>
<input type="checkbox" id="Yes" value="Yes" checked="checked"> <label >Yes</label>
<input type="checkbox" id="No" value="No"><label >No</label>
<br><br>

<label >Cat Breeds:</label > <select id="Breeds" >
  <option value="Scottish Fold">Scottish Fold</option>
  <option value="Devon Rex">Devon Rex</option>
  <option value="Exotic">Exotic</option>
  <option value="Domestic Cat">Domestic Cat</option>
  <option value="Himalayan Cat">Himalayan Cat</option>
  <option value="Siamese">Siamese</option>
  <option value="Persian Cat">Persian Cat</option>
</select><br><br> <hr>
<input type="submit" value="Submit">
<input type="reset" value="Clear"> </form>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<footer id= "footer">
  <p> &copy; 2023 Cat Adoption Design by Razan and Noura, Amirah</p>
</footer>
</body>
</html>
