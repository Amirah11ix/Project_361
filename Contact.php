<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Contact US Page</title>
   <link rel="stylesheet" href="CONTACT.css">
   <meta charset="utf-8">
</head>

<body>
	 <section class="contact">
	 <a  class="icon" href="CatsAd.html"><ion-icon name="chevron-back-outline"></ion-icon></a>
        <div class="content">
		   <h2> Contact Us </h2>
		   	<p>If you have any work from me or any types of quries related to my tutorial,
			you can send me message from here. It's my pleasure to help you.</p>
		</div>
		<div class= "Container">
		   <div class="contactInfo">
		       <div class="box">
			      <div class="icon"> <i><ion-icon name="location-outline"></ion-icon></i></div>
				  <div class="text">
				      <h3>Address</h3>
					  <p>Riyadh 13321<br>Saudi Arabia</p>
				  </div>
			   </div>
			   <div class="box">
			      <div class="icon"><i><ion-icon name="call-outline"></ion-icon></i></div>
				  <div class="text">
				      <h3>Phone</h3>
					  <p>011 489 7383 <br> +966 489 7383</p>
				  </div>
			   </div>
			   <div class="box">
			      <div class="icon"><i><ion-icon name="mail-outline"></ion-icon></i></div>
				  <div class="text">
				      <h3>Email</h3>
					  <p>CatAdoption@gmail.com<br>info.CatAdoption@gmail.com</p>
				  </div>
			   </div>
		   </div>
		   <div class="contactForm">
		      <form action="create.php" method="post">
			     <h3>Send us a message</h3>
				 <div class="inputBox">
				     <input type="text" placeholder="Full Name" name="Name" value="Name" required="required">
				 </div>
				 <div class="inputBox">
				     <input type="text" placeholder="Email" name="email" value="email" required="required">
				 </div>
				 <div class="inputBox">
				     <textarea placeholder="Enter your Message... " value="message" name="message"required="required"></textarea>

				 </div>
				 <div class="inputBox">
				     <input type="submit" name="send" value="Send">
				 </div>
			  </form>
		   </div>
		</div>
     </section>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
