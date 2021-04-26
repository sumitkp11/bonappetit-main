
<?php


if(isset($_POST['post_like']))
{
    

    $link = mysqli_connect("localhost", "id3420339_sumit", "sumit1197", "id3420339_food"); 
	// Check connection
    	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	} 
 
  //$dish1 = $_SESSION['dish_name'];
  $update = "update ratings set total_votes=total_votes+1,likes=likes+1 ";
  $select = "SELECT * FROM ratings";
   if($update_result = mysqli_query($link, $update)){
  if($result = mysqli_query($link, $select)){
	if(mysqli_num_rows($result) > 0){
  while($row=mysqli_fetch_array($result))
  {
	$total_votes=$row['total_votes'];
	$likes=$row['likes'];
	$dislike=$row['dislike'];

    echo "<p id='total_rating'>Total Ratings ( ".$total_votes." )</p>";
    echo "<p id='total_like'><img src='like.png'>".$likes." people like this dish";
    echo "<p id='total_dislike'><img src='dislike.png'>".$dislike." people dislike this dish";
    exit();
  }
  // Close result set
    										mysqli_free_result($result);
    									} else{
    										echo "No records matching your query were found.";
    									}
    								} else{
    									echo "ERROR: Could not able to execute $select. " . mysqli_error($link);
    								}
}
else{
    									echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
    								}
}


if(isset($_POST['post_dislike']))
{
    
  $link = mysqli_connect("localhost", "id3420339_sumit", "sumit1197", "id3420339_food"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  
  //$dish_name = $_SESSION['dish_name'];
  $update = "update ratings set total_votes=total_votes+1,dislike=dislike+1 ";
  $select = "SELECT * FROM ratings";
  
     if($update_result = mysqli_query($link, $update)){
    if($result = mysqli_query($link, $select)){
	if(mysqli_num_rows($result) > 0){
  while($row=mysqli_fetch_array($result))
  {
  	$total_votes=$row['total_votes'];
	$likes=$row['likes'];
	$dislike=$row['dislike'];

    echo "<p id='total_rating'>Out of ".$total_votes." people:";
    echo "<p id='total_like'><img src='like.png'>".$likes." people like this dish";
    echo "<p id='total_dislike'><img src='dislike.png'>".$dislike." people dislike this dish";
    exit();
  }
  // Close result set
  
mysqli_free_result($result);
}
else{
    	echo "No records matching your query were found.";
	}
    									
    } else{
    									echo "ERROR: Could not able to execute $select. " . mysqli_error($link);
    								}
}
else{
    									echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
    								}
}
?>