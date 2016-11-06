<?php 
	 include 'class_lib.php';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>oop in php</title>
</head>
<body>
	<?php
	 	$diego = new Person();
	 	$lalo = new Person;

	 	$diego->set_name("Diego Delfin");
	 	$lalo->set_name("Eduardo Rivera");
	 ?>

	 <div> Su nombre completo de Diego es : <?php echo  $diego->get_name(); ?>
	 </div>
	 <div> Su nombre completo de Eduardo es : <?php echo $lalo->get_name(); ?></div>
</body>
</html>