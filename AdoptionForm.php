<!DOCTYPE html>
<head>
      <title>adoption-process Form</title>
      <link rel="stylesheet" href="formex.css">
      <script type="text/javascript">
function Validateoption()
{
    var checkboxes = document.getElementsByName("pick_one");
    var numberOfCheckedItems = 0;
    for(var i = 0; i < checkboxes.length; i++)
    {
        if(checkboxes[i].checked)
            numberOfCheckedItems++;
    }
    if(numberOfCheckedItems > 1)
    {
        alert("You can't select more than One option!");
        return false;
    }
}
</script>

</head>
<body>


<div class="container">
  <form  action="connect.php" method="post">
    <div class="row">
      <h4>Adoption-Process Form</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="FullName" value="FullName" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="number" name="number" value="number" placeholder="Enter your number"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" value="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="Password" name="password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4 >Gender</h4>
        <div class="input-group">
          <input id="gender-male" type="radio" name="gender"  value="male"/>
          <label for="gender-male">Male</label>
          <input id="gender-female" type="radio" name="gender" value="female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="input-group"><hr>
        <h4>Cat Name:</h4>
        <input type="text" id="name" name="catname" value="catname">
        <h4 >Have you ever adopted a cat?</h4>
        <input id="Yes" type="checkbox" name="pick_one" onclick="return Validateoption();"/>
        <label for="Yes">Yes</label>
        <input id="No" type="checkbox" name="pick_one" onclick="return Validateoption();"/>
        <label for="No">No</label>


         </div>
        <h4>Cat Breeds:</h4>
        <select id="Breeds" >
          <option value="Scottish Fold">Scottish Fold</option>
          <option value="Devon Rex">Devon Rex</option>
          <option value="Exotic">Exotic</option>
          <option value="Domestic Cat">Domestic Cat</option>
          <option value="Himalayan Cat">Himalayan Cat</option>
          <option value="Siamese">Siamese</option>
          <option value="Persian Cat">Persian Cat</option>
        </select>
      </div>
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input id="terms" name="terms" type="checkbox"  />
        <label for="terms">I accept the terms and conditions for Adoption Process, and hereby confirm I have agree the privacy policy.</label>
      </div>
      <div class="input-group input-group-icon">
        <input type="Submit" value="Submit">
        <input type="reset" value="Clear">

    </div>
  </form>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<footer id= "footer">
  <p> &copy; 2023 Cat Adoption Design by Razan and Noura, Amirah</p>
</footer>
</body>
</html>
