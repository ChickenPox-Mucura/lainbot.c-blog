<?php echo '<html>'; ?>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') !== FALSE) {
 ?>
 <h3>test</h3>
 <?php } else {
 ?>
 <h3>test 2</h3>
 <?php
 }
 ?>
 </body>
<?php echo '</html>'; ?>
<?php 
 $array = array(0 => the, 1 => morbid, 2 => florist);
 $i = 0;

 while($i < 3) {
	 echo "$array[$i]\n";
	 $i += 1;
 }
?>
