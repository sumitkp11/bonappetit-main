
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- code for three equal columns -->
  <style type="text/css">
  /* start of red alert box */
  .redalert {
    padding: 50px;
    background-color: #f44336;
    color: white;
    
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
  
  
  /* end of alert box
    /* start of green alert box */
  .greenalert {
    padding: 50px;
    background-color: #00FF00;
    color: white;
    
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
  
  
  /* end of green alert box
  
  /* CSS for Collapsible */
  .collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
}
/* End of Collapsible Text */
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    
<!--start of three equal columns -->
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column  {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column  {
        width: 100%;
    }
}
<!-- end of three equal columns -->
<!-- start of nutrition facts table -->
@import "compass/css3";

.image {
  width: 250px;
  float: left;
  margin: 20px;
}
body {
  font-size: small;
  line-height: 1.4;
}
p {
  margin: 0;
}

.performance-facts {
  border: 1px solid black;
  margin: 20px;
  float: left;
  width: 280px;
  padding: 0.5rem;
  table {
    border-collapse: collapse;
  }
}
.performance-facts__title {
  font-weight: bold;
  font-size: 2rem;
  margin: 0 0 0.25rem 0;
}
.performance-facts__header {
  border-bottom: 10px solid black;
  padding: 0 0 0.25rem 0;
  margin: 0 0 0.5rem 0;
  p {
    margin: 0;
  }
}
.performance-facts__table {
  width: 100%;
  thead tr {
    th, td {
      border: 0;
    }
  }
  th, td {
    font-weight: normal;
    text-align: left;
    padding: 0.25rem 0;
    border-top: 1px solid black; 
    white-space: nowrap;
  }
  td {
    &:last-child {
      text-align: right;
    }
  }
  .blank-cell {
    width: 1rem;
    border-top: 0;
  }
  .thick-row {
    th, td {
      border-top-width: 5px;
    }
  }
}
.small-info {
  font-size: 0.7rem;
}

.performance-facts__table--small {
  @extend .performance-facts__table;
  border-bottom: 1px solid #999;
  margin: 0 0 0.5rem 0;
  thead {
    tr {
      border-bottom: 1px solid black; 
    }
  }
  td {
    &:last-child {
      text-align: left;
    }
  }
  th, td {
    border: 0;
    padding: 0;
  }
}

.performance-facts__table--grid {
  @extend .performance-facts__table;
  margin: 0 0 0.5rem 0;
  td {
    &:last-child {
      text-align: left;
      &::before {
        content: "•";
        font-weight: bold;
        margin: 0 0.25rem 0 0;
      }
    }
  }
}

.text-center {
  text-align: center;
}
.thick-end {
  border-bottom: 10px solid black;
}
.thin-end {
  border-bottom: 1px solid black;
}
<!-- end of nutrition facts table -->   
</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
   <link rel="stylesheet" type="text/css" href="style.css">

     

	 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<meta charset="UTF-8">
	<title>bon appétit - The foodie's tool.</title>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="css/fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/fonts/fonts.css" />
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animat/animate.min.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="css/themes/default/default.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/nutrition.css" />
	<link rel="stylesheet" type="text/css" href="rating_style.css">
	
	
	
	<script type="text/javascript">
  
    function insert_like()
    {
	  $.ajax({
	    type: 'post',
	    url: 'store_rating.php',
	     data: {
	      post_like:"like"
	    },
	    success: function (response) {
 	      $('#totalvotes').slideDown()
	      {			
	        $('#totalvotes').html(response);
	      }
	    }
	    });
    }

    function insert_dislike()
    {
	  $.ajax({
	    type: 'post',
	    url: 'store_rating.php',
	    data: {
	      post_dislike:"dislike"
	    },
	    success: function (response) {
 	      $('#totalvotes').slideDown()
	      {			
	        $('#totalvotes').html(response);
	      }
	    }
	    });
    }
</script>
  
</head>
<body>
    




	<div class='preloader'><div class='loaded'>&nbsp;</div></div>
	
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">
							<div class="logo">
								<img src="images/logo.png" alt="" />
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="http://bonappetit.cf">Home</a></li>
						
							<li><a href="#contact">Contact</a></li>
							
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	 <!--Live Search Here-->
		<section id="banner" class="banner">
		<div class="container">
			<div class="row">
				<div class="main_banner_area text-center">
					<div class="col-md-12 col-sm-12">
						<div class="single_banner_text wow zoomIn" data-wow-duration="1s">
							<center>
        					   <br>
        					   <br>
        					   
							    <div class="search-box">
							 <form action="dish_search.php#abouts" method="POST" >
							   <input type="text" name="dish_selected" placeholder="Search your dish..." autocomplete="off"  />
							 	<center> <div class="center-content">
											<input type="submit" value="SEARCH" class="btn btn-lg">
										  </div>
										 
								    </center>
							  <div class="result"></div>
							  </form>
							 
						
							</div>

							<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js">
							</script>
							</center>
							
							
						</div>
					</div>
					
					<!-- end of live search -->
	
	
	
							
						
					
					
				<div class="scrolldown">
						<a href="#abouts" class="scroll_btn"></a>
					</div>
				
				</div>
				
				
			</div>
		</div>
	</section><!-- End of Banner Section -->
	
	
	<section id="abouts" class="abouts">
		<div class="container">
			<div class="single_abouts wow fadeInLeft" data-wow-duration="1s">
						<center><h1>You have selected <?php echo $_POST['dish_selected'];?></h1></center>
						
													
						
											
							    <!-- start of code of three equal columns -->
						        <div class="row">
                                  <div class="column">
                                    <h2>Ingredients</h2> <!-- first column -->
                                        <p>
                                            <?php
    								$link = mysqli_connect("localhost", "id3420339_sumit", "sumit1197", "id3420339_food"); 
    								// Check connection
    								if($link === false){
    									die("ERROR: Could not connect. " . mysqli_connect_error());
    								}
    								// Attempt select query execution of first phone
    								$dish = $_POST['dish_selected'];
    								$sql  = "SELECT * FROM dish_info WHERE dish_name = '$dish' ";
    								if($result = mysqli_query($link, $sql)){
    									if(mysqli_num_rows($result) > 0){
    									
    										while($row = mysqli_fetch_array($result)){
    											
    											   						
    											   // echo "<ul>";
    											    echo "<li>" . $row['ING1'] . "</li>";
    												echo "<li>" . $row['ING2'] . "</li>";
    												echo "<li>" . $row['ING3'] . "</li>";
    												echo "<li>" . $row['ING4'] . "</li>";
    												echo "<li>" . $row['ING5'] . "</li>";
    												//echo "</ul>";
    										
    										}
    									
    										// Close result set
    										mysqli_free_result($result);
    									} else{
    										echo "No records matching your query were found.";
    									}
    								} else{
    									echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    								}
    								 echo "<br>";
    								?>
                                        </p>
                                      </div>
                            <div class="column">
                                        <h2>Nutrition Facts</h2>
                                        <p>
                                            
                                            <section class="performance-facts">
                                          <header class="performance-facts__header">
                                            <h1 class="performance-facts__title">Nutrition Facts</h1>
                                            </header>
                                          <?php
    								$link = mysqli_connect("localhost", "id3420339_sumit", "sumit1197", "id3420339_food"); 
    								// Check connection
    								if($link === false){
    									die("ERROR: Could not connect. " . mysqli_connect_error());
    								}
    								// Attempt select query execution of first phone
    								$dish = $_POST['dish_selected'];
    								$sql  = "SELECT * FROM nutrition WHERE dish_name = '$dish' ";
    								if($result = mysqli_query($link, $sql)){
    									if(mysqli_num_rows($result) > 0){
    									
    									echo '<table class="performance-facts__table">
                                            
                                            <tbody>
                                              <tr>';
                                              while($row = mysqli_fetch_array($result)){
                                                
                                              echo '<th colspan="2">
                                                  <b>Calories</b>
                                                  
                                                </th>';
                                            echo '<td>'.'<b>'.$row['calories'].'</b>'.'</td>';
                                              echo '</tr>
                                              <tr class="thick-row">
                                                
                                              </tr>
                                              <tr>
                                                <th colspan="2">
                                                  <b>Total Fat</b></th>';
                                                echo '<td>'.'<b>'.$row['total fat'].'g'.'</b>'.'</td>';
                                              
                                              echo '</tr>
                                              <tr>
                                                <td class="blank-cell">
                                                </td>
                                                <th>
                                                  Saturated Fat
                                                  
                                                </th>';
                                                echo '<td>'.'<b>'.$row['sat_fat'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr>
                                                <td class="blank-cell">
                                                </td>
                                                <th>
                                                  Trans Fat
                                                  0g
                                                </th>';
                                                echo '<td>'.'<b>'.$row['trans_fat'].'g'.'</b>'.'</td>';
                                             echo '</tr>
                                              <tr>
                                                <th colspan="2">
                                                  <b>Cholesterol</b>
                                                  55mg
                                                </th>';
                                               echo '<td>'.'<b>'.$row['cholesterol'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr>
                                                <th colspan="2">
                                                  <b>Sodium</b>
                                                 
                                                </th>';
                                                echo '<td>'.'<b>'.$row['sodium'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr>
                                                <th colspan="2">
                                                  <b>Total Carbohydrate</b>
                                                  
                                                </th>';
                                                echo '<td>'.'<b>'.$row['total_carbohydrate'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr>
                                                <td class="blank-cell">
                                                </td>
                                                <th>
                                                  Dietary Fiber
                                                  
                                                </th>';
                                                echo '<td>'.'<b>'.$row['dietery_fiber'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr>
                                                <td class="blank-cell">
                                                </td>
                                                <th>
                                                  Sugars
                                                  
                                                </th>';
                                                echo '<td>'.'<b>'.$row['sugar'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                              <tr class="thick-end">
                                                <th colspan="2">
                                                  <b>Protein</b>
                                                  
                                                </th>';
                                                echo '<td>'.'<b>'.$row['protein'].'g'.'</b>'.'</td>';
                                              echo '</tr>
                                            </tbody>
                                          </table>';
                                              }
                                             // Close result set
    										mysqli_free_result($result);
    									} else{
    										echo "No records matching your query were found.";
    									}
    								} else{
    									echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    								}
    								 echo "<br>";
    								?>
                                          

                                        </p>
                                        
                             
                                          
    							
    								
                                          
                                        
                                          </div>
                                      
                                      <div class="column">
                                          

                                        <h2>Dish Ratings</h2>
                                        <input type="image" src="like.png" onclick="insert_like();" id="like_button">
                                          <input type="image" src="dislike.png" onclick="insert_dislike();" id="dislike_button">
                                          <div id="totalvotes"></div>
                                          
                                          

                                         
                                          
                                    </div>    
                                    </div>
    								<center><form action="index.html#banner">
										  <div class="center-content">
											<input type="submit" value="SEARCH ANOTHER?" class="btn btn-lg">
										  </div>
										  </form
								    </center>
								
    								</div>
							</left>
						</div>
					
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInRight" data-wow-duration="1s">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<hr>
			<!-- Contact form -->
		<section id="contact" class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
							<h2>Get In Touch With Us</h2>
							<div class="separetor"></div>
							<p>We are here to help. Want to learn more about our services? Please get in touch, we'd love to hear from you!</p>
						</div>
					</div>
				</div>
			
				<div class="row">
					<div class="messsage_contant">
						<div class="col-md-7 col-sm-7">
							<div class="single_message_left wow fadeIn" data-wow-duration="1s">
								<form action="#" id="formid">
										<!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
										  
										 <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="Name" required="">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email" required="">
												</div>
											</div>
										 </div>
										
										  

										  <div class="form-group">
											<textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
										  </div>

										  <div class="center-content">
											<input type="submit" value="SUBMIT NOW" class="btn btn-lg">
										  </div>
										<!--</div>--> 
								</form>
							</div>
						</div>
						
						<div class="col-md-5 col-sm-5">
							<div class="single_message_right wow fadeIn" data-wow-duration="1s">
								
								<p>
									<i class="fa fa-map-marker"></i> 
									CSE Department, Sharda University 
									<span>Greater Noida, Uttar Pradesh, India</span>
								</p>
								<p><i class="fa fa-envelope-o"></i>sumitapps11@gmail.com</p>
								<p><i class="fa fa-phone"></i>+91 954 25 267</p>
								
							</div>
						</div>
					</div> <!-- End of messsage contant-->
				</div>
			</div>
		</section>	
	
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="main_footer text-center wow zoomIn" data-wow-duration="1s">
						
					</div>
				</div>
			</div>
		</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	
	
	
	

	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	
	<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
	
	
	
	
	
	<script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/wow/wow.min.js"></script>
	<!--<script type="text/javascript" src="js/counterup/counterup.min.js"></script>-->
	
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
	<!--<script type="text/javascript" src="js/counterup/jquery.counterup.min.js"></script>-->
	
	
	<script type="text/javascript" src="js/isotop/isotope.min.js"></script>
	<script type="text/javascript" src="js/isotop/isotop.function.js"></script>
	
	<script type="text/javascript" src="js/masonry/masonry.min.js"></script>
	
	<script type="text/javascript" src="js/mixitup/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/masonry/masonry.pkgd.min.js"></script>
</body>
</html>