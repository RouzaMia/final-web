
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     
    
      <link rel="stylesheet" href="css/style.css">
      
      

<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<script>
    function search()
    {
      http = new XMLHttpRequest();
      var search_word=document.getElementById("search_input").value;
      http.onreadystatechange=function()
      {
        if(http.readyState == 4 && http.status == 200)
        {
          document.getElementById("search_result").innerHTML=http.responseText;
        }
      }
      http.open("GET","search.php?key="+search_word,true);
      http.send();
    }
  </script>

</head>


<body >

	
		<header>
			<div class="wrapper"> 


				<div class="logo "> 
					<img src ="images/logo2.JPG" alt="logo"> 
					 
                </div>
				
					
				<nav class="menu"> 
					
	<input type="text" id="search_input" onkeyup="search()" placeholder="search product">
	<span id="search_result">

		
	</span>
					 
         
						<ul>
						<li> <a href="#"> HOME </a> </li>
						<li> <a href="#aboutus"> ABOUT US </a></li>
						<li> <a href="login.php">LOGIN  </a></li>
						<li> <a href="signup.php">SIGN UP </a></li>
						<li> <a href="#cuscare">CUSTOMER CARE </a> </li>
					</ul>
				</nav>

			</div>

		</header>
		<!--header end-->
 
 <!-- Category -->

<div class="navbar">
	<div class="dropdown">
    <button class="dropbtn">Categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#elec">Electronics</a>
      <a href="#">Health & Beauty</a>
      <a href="#">Women's Fashion</a>
      <a href="#">Men's Fashion</a>
      <a href="#deal">Sale</a>
    </div>
  </div> 
  <a href="#deal">Today's Deal</a>
  <a href="#deliver">Deliver To</a>
  <a href="#up">Updates</a>
  <a href="#home">Gift Card</a>

  <span class="last">
  <a href="covblog.php">E-Cart's response to COVID-19</a>
  </span>

</div>






<section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- single item -->
              <div class="row">
                <div class="col-lg-5 col-md-5" >
                  <div class="inspire">
                    
                    <h1>Brand New IPHONE-11</h1>
                <h3><b>Love at first, second, third, fourth, fifth, and sixth sight.</b></h3>
                <p>All‑new dual‑camera system. Take your photos from wide to ultra wide. A redesigned interface uses the new Ultra Wide camera to show you what’s happening outside the frame — and lets you capture it. Shoot and edit videos as easily as you do photos. It’s the world’s most popular camera, now with a whole new perspective. </p>
                   <ul class="list-inline">
                  <li class="list-inline-item">  <i class="fas fa-mobile"></i></i></li>
                  <li class="list-inline-item"> <i class="fab fa-apple"></i></li>
                  <li class="list-inline-item"> <i class="fab fa-cc-apple-pay"></i></li>
                </ul>
                  </div>
                </div>
                <div class="offset-lg-2 col-lg-5 offset-md-1 col-md-5">

                 <div class="tab">
                  <img src="images/a.png" alt="mobile" class="img-fluid">
                </div>
              </div>
            </div>
            <!-- single item -->
          </div>
          <div class="carousel-item">
           <!-- single item -->
           <div class="row">
            <div class="col-md-5">
              <div class="inspire">
                <h1>Discover our Women's Collection</h1>
                    <h3><b>Find a brand new and exciting collection of fashion.</b> </h3>
                    <p> Trendiest Fashion for Women.Fashionable, elegent women's wear at a very reasonable price.You are just a click away. </p>
                     <ul class="list-inline">
                      <li class="list-inline-item">  <i class="fa fa-female"></i></i></li>
                      <li class="list-inline-item"> <i class="fa fa-glasses"></i></li>
                      <li class="list-inline-item"> <i class="fa fa-shopping-bag"></i></li>
                    </ul>
                
              </div>
            </div>
            <div class="offset-md-2 col-md-5 d-md-block d-none">
             <div class="tab">
              <img src="images/dress.jpg" alt="mobile" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- single item -->
      </div>
      <div class="carousel-item">
        <!-- single item -->
        <div class="row">
          <div class="col-md-5">
            <div class="inspire">
              <h1>Inspire your inspiration.</h1>
              <h3><b>Make you imagination come to reality.Simple to use for any application.</b></h3>
              <p>A virtual reality headset is a head-mounted device that provides virtual reality for the wearer. Virtual reality (VR) headsets are widely used with video games but they are also used in other applications, including simulators and trainers. </p>
              <ul class="list-inline">
                <li class="list-inline-item">  <i class="fab fa-android"></i></i></li>
                <li class="list-inline-item"> <i class="fab fa-apple"></i></li>
                <li class="list-inline-item"> <i class="fab fa-windows"></i></li>
              </ul>
            </div>
          </div>
          <div class="offset-md-2 col-md-5">
            <div class="tab">
              <img src="images/vrc.jpg" alt="mobile" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- single item -->
      </div>

    </div>
  </div>
  <!-- carousel end -->

</div>
</div>
</div>
</section>
</div>
</div>
</section>





<!-- SALE ITEMS -->
<section class=banner>
        <div class="banner-content" id="deal">
        <h4>Today's Deals  <button id="grab"><h6>Click Me!</h6></button></h4>
        <div id="universities"></div>
    <script>

    document.getElementById('grab').addEventListener('click', showValues);
    function showValues() {
        var req = new XMLHttpRequest();
        req.open('GET','returnhandler.php',true );

        req.onload = function(){
            if(req.status==200){
            var namez = JSON.parse(req.responseText);
            var display = '';

            for (var i in namez){
                display +=   ' <img id="sale" src='+namez[i].image+'alt="Image from DB" width="150" height="150">'+'<ul>'+
                    '<li>Name: '+namez[i].name+'</li>'+
                    '<li>Price: '+namez[i].price+'</li>'+'<li>Discount: '+namez[i].discount+ '% off'+'</li>'
                    ''+''+
                   '</ul>';


            }

            document.getElementById('universities').innerHTML=display;
        }
    }
        req.send();
    }
    </script>





<div class="banner-content" id="deliver">
<h4>Delivery Areas <button id="getInfo"><h6>Click Me!</h6></button></h4>

    <div id="showme"></div>   
    <script>
       // Event Listner 
       document.getElementById('getInfo').addEventListener('click', showText);
        // Implement showText function
        function showText() {
            // Creating XHR 
            var req = new XMLHttpRequest();
            // Creates a connection with the engine
            // Takes in 3 parameters
            req.open('GET', 'rouza.txt', true);
            /* 200 - Good to go!
               403 - Forbidden 
               404 - Not found
            */
            req.onload = function() {
                if(req.status==200){
                    document.getElementById('showme').innerHTML = req.responseText;
                }
               
            }
            // Request sent to the Engine
            req.send();

        }

    </script>

       
</section>

	
  <!-- PRODUCTS -->
<section>
<div class="container"> 
	<div class="row">

	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ecart');

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }


	$query = " SELECT `name`, `image`, `price`, `discount` FROM `ecart` order by id ";

	$check = mysqli_query($con, $query);

	$num = mysqli_num_rows($check);

	if($num > 0){
		while($product = mysqli_fetch_array($check)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12"> <br>
		
			<form method="post" action="login.php">
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['image'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h6>  &#2547; <?php echo $product['price'];  ?><span> (<?php echo $product['discount'];  ?>% off) </span> </h6> 

					<h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </h6>

					 <input type="text" name="" class="form-control" placeholder="Quantity">

					</div>
					<div class="btn-group d-flex">
						 <button type="submit"  name="buynow" class="btn btn-grey">Buy Now</button><button type="submit" class="btn btn-deep-orange">Add to cart</button>
					</div>


				</div>
				
			</form>
 
		</div>

<br><br>

	<?php		
		}
	}
	?>

	</section>
</div>
<br> 
<!-- updates -->
<section class=slider>
<div class="container"> 
<h2 >Get all the latest Updates </h2>
<h4>Click on the button and fill the form to be updated.</h4>

<button class="open-button" onclick="openForm()" id="up">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container"  >
    <h1>To Get Updates</h1>
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="person">

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="em" required>

    <label for="psw"><b>Number</b></label>
    <input type="number" placeholder="+880" name="number" id="num" required>

    <button type="submit" value ="Insert" class="btn"><b>Submit</b></button>
    <button type="button" class="btn cancel" onclick="closeForm()"><b>Close</b></button>
  </form>
</div></div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script>
    document.getElementById('myForm').addEventListener('submit', submitName);

    function submitName(pd) {
        pd.preventDefault();
        var name = document.getElementById('person').value;
       
        var sm = "name="+name;
   



        var req = new XMLHttpRequest();
        req.open('POST', 'handler.php', true);
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        req.onload = function() {
            
        }
        req.send(sm);
    }
     

    </script>

<script>
    document.getElementById('myForm').addEventListener('submit', submitEmail);

    function submitEmail(ema) {
        ema.preventDefault();
        var email = document.getElementById('em').value;
       
        var tm = "email="+email;
   



        var req = new XMLHttpRequest();
        req.open('POST', 'emhandler.php', true);
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        req.onload = function() {
            
        }
        req.send(tm);
    }
     

    </script>

</section>
<!-- customercare -->
<section class="message"  id="cuscare">
<div class="container">
<button class="o-button" onclick="oForm()"><b>Message</b></button>

<div class="chat-popup" id="messForm" >
    <form action="/action_page.php" class="form-container"  >
    <h1>Message</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="mesg" required></textarea> 
       
<!-- 
    <button type="submit" class="btn">Send</button> -->
     <button type="submit" value ="Insert" class="btn"><b>Submit</b></button>
    <button type="button" class="btn cancel" onclick="cForm()">Close</button>
  </form>
</div>

<script>
function oForm() {
  document.getElementById("messForm").style.display = "block";

}

function cForm() {
  document.getElementById("messForm").style.display = "none";
}
</script>
<script>
    document.getElementById('messForm').addEventListener('submit', submitMsg);

    function submitMsg(mg) {
        mg.preventDefault();
        var msg = document.getElementById('mesg').value;
       
        var mm = "msg="+msg;
   



        var req = new XMLHttpRequest();
        req.open('POST', 'mhandler.php', true);
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        req.onload = function() {
            
        }
        req.send(mm);
    }
     

    </script>
</section>


<!-- About Us -->
<section class="Information" id="aboutus">

      <div class="wrapper" >
      

      <div class="info_box">
<span class="whitetext">E-Cart's</span>&nbsp;<span class="bluetext"><b>Site</b></span>&nbsp;<span class="wt">
<p> 1861 Wiehle Avenue, Suite #250 <br> Reston, VA 20190<br><br>

Toll free&nbsp;&nbsp; +1 (703) 793.9217<br>
Fax&nbsp;&nbsp; +1 (703) 535-3321<br>

Email&nbsp; e-cart@gmail.com</p></span>
  
  
</div>
     <div class="info_box">
<span class="wc">Customer's</span>&nbsp;<span class="bc"><b>Testimonials <br></b></span>&nbsp;<span class="pc"
<p>"This is the best e-commerce site to buy authentic and trendy clothes. The website is user friendly and very easy to use."<br><br>

Rhoda Worku</p></span>
  
  
</div>


 <div class="info_box">

              <img src="images/abt.png" alt="app" > 
            </div>
          
          
        </div>




</section>
    

</section>


 <!--Information end-->
 <!-- about us end -->

<!-- footer start -->

<section id="footer" >
<div class="wrapper"> 


<nav class="footer_content"> 
<p>Copyright &copy; 2020 2020 E-Cart's Site</p>
</nav>

<div class="links">
<ul>



<li> <a href="#"> <img src="images/fb.png" alt="fb"></a></li>
<li> <a href="#"> <img src="images/insta.png" alt="insta"></a></li>
<li> <a href="#"> <img src="images/twitter.png"  alt="twitter"></a></li> 
</ul>
</div>

</div>

</section>


<!-- footer end -->

</body>
</html>

</body>
</html>