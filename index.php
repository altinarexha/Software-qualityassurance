<!DOCTYPE html>
	<head>
    <title>Bookworm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="Style/style.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
			<?php include "includes/template/header.php";?>
			
			<section class="main-text" >
      <br>
      <div class="sidebar-contact">
    <div class="toggle"></div>
    <h2>Dërgo mesazh </h2>
    <h3>Mirëpresim sugjerime :)</h3>
    <div class="scroll">
    <form>
      <input type="text" name="" placeholder="Emri">
      <input type="email" name="" placeholder="Email">
      <textarea placeholder="Mesazhi këtu.."></textarea>
      <input type="submit" name="" value="Dërgo">
    </form>
    </div>
  </div>
			
			<i class="fa fa-book fa-5x" aria-hidden="true" style="color:#D6C299;"></i>
				<h2> Bëhu pjesë e Bookworm!</h2>
				<h3> Parajsa juaj me libra, kudo & kurdo</h3>
  
  <div class="price-box" >
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">7.00€ / muaj</li>
	<div class="hvr-glow">
        <li class="grey"><a href="#" class="button">Regjistrohu</a></li>
</div>
  </ul>
</div>

<div class="price-box">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Pro</li>
    <li class="grey">33.00€ / 6 muaj</li>
    
    <li class="grey"><a href="#" class="button">Regjistrohu</a></li>
  </ul>
</div>

<div class="price-box">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">55.00€ / vit</li>
    
    <li class="grey"><a href="#" class="button">Regjistrohu</a></li>
  </ul>
</div>
	</section>

<br>
	
<section class="main-text" >
         <div class="hvr-grow-shadow">

		<h3>Librat me te shitur</h3>
		<hr class="hrpink">
		<hr class="hrlightpink">
		</div>
		<br>
		<br>

  <div class="column">
 
  <div class="hvr-grow-shadow">
    <img src="images/L1.jpg" alt="Snow" style="width:150px; height:250px;">
    <h5 style="text-align:center">A Kingdom Of Flesh and Fire <br>Jennifer L. Armentrout</h5>
  </div>
   </div>

  
  <div class="column">

    <div class="hvr-grow-shadow">
    <img src="images/L2.jpg" alt="Snow"  style="width:150px; height:250px;">
		<h5 style="text-align:center">The Cruel Prince <br>Holly Black</h5>
    </div>
  </div>
  
  
  <div class="column">
  
    <div class="hvr-grow-shadow">
    <img src="images/L3.jpg" alt="Snow"   style="width:150px; height:250px;">
		<h5 style="text-align:center">A Court Of Wings And Ruin <br>Sarah J. Maas</h5>
    </div>
  </div>
  
  
  <div class="column">
 
    <div class="hvr-grow-shadow">
    <img src="images/L4.jpg" alt="Snow"   style="width:150px; height:250px;">
		<h5 style="text-align:center">From Blood And Ash<br>Jennifer L. Armentrout</h5>
    </div>
  </div>
 

</section>
<br>

		
<section class="main-text" >
	
		  <div class="hvr-grow-shadow">

		    <H3>Librat me te ri</h3>
			<hr class="hrpink">
			<hr class="hrlightpink">
			</div>
	   
		<br>
		<br>


  <div class="column">

    <div class="hvr-grow-shadow">

    <img src="images/L5.jpg" alt="Snow"   style="width:150px; height:250px;">
	<h5 style="text-align:center">The Fates Divide <br>Veronica Roth</h5>
  </div>
  </div>
  
  <div class="column">

    <div class="hvr-grow-shadow">

    <img src="images/L.jpg" alt="Snow"  style="width:150px; height:250px;">
		<h5 style="text-align:center">Unravel Me <br>Tahereh Mafi</h5>
</div>
  </div>
  <div class="column">
  
    <div class="hvr-grow-shadow">

    <img src="images/L7.jpg" alt="Snow"  style="width:150px; height:250px;">
		<h5 style="text-align:center">Queen Of Nothing <br>Holly Black</h5>
</div>
  </div>
  <div class="column">

    <div class="hvr-grow-shadow">
    <img src="images/L8.jpg" alt="Snow"  style="width:150px; height:250px;">
		<h5 style="text-align:center">War Storm<br>Victoria Avenyard</h5>
</div>
  </div>
 

</section >
<br>
<br>
<br>
<script>
    $(document).ready(function(){
  $('.toggle').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
  });
});
  </script>


	<footer>
	<?php include "includes/template/footer.php";?>
	</footer>
</body>
</html>
		