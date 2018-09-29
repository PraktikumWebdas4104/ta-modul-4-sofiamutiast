<?php 
	$user = array('username' => "sofiamutiast" ,
						'password' => "6701174062" );

?>

<h3> DATA PENGGUNA : </h3>

<?php

	foreach ($user as $key => $value) {

		echo $key." : ".$value;

		echo "<br>";
		# code...
	}

 ?>



<form method="post">
<h2> Genre Film </h2>
<input type="checkbox" name="film[]" alt="Checkbox" value="Horor"> Horor <br>
<input type="checkbox" name="film[]" alt="Checkbox" value="Action">  Action <br>
<input type="checkbox" name="film[]" alt="Checkbox" value="Anime"> Anime <br>
<input type="checkbox" name="film[]" alt="Checkbox" value="Thriller"> Thriller <br>
<input type="checkbox" name="film[]" alt="Checkbox" value="Animasi"> Animasi <br>


<h2> Tempat Wisata </h2>
<input type="checkbox" name="wisata[]" alt="Checkbox" value="Bali"> Bali <br>
<input type="checkbox" name="wisata[]" alt="Checkbox" value="Raja Ampat">  Raja Ampat <br>
<input type="checkbox" name="wisata[]" alt="Checkbox" value="Pulau Derawan"> Pulau Derawan <br>
<input type="checkbox" name="wisata[]" alt="Checkbox" value="Bangka Belitung"> Bangka Belitung <br>
<input type="checkbox" name="wisata[]" alt="Checkbox" value="Labuan Bajo"> Labuan Bajo <br>

<input type="submit"   name="submit">
</form>


<?php
if(isset($_POST['submit'])){

?>
	<h3> Genre Film yang di pilih : </h3> 

<?php 
	foreach($_POST['film'] as $data){
      
      echo $data ."<br>";
	}
}
	
 
?>
<?php 

echo "<br>";
 ?>

<?php
if(isset($_POST['submit'])){

?>
	<h3> Tempat wisata tujuan : </h3> 

<?php 

	
	foreach($_POST['wisata'] as $data2){
      
      echo $data2 ."<br>";
	}
}
	
 
?>

