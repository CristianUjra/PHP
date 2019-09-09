	<?php
	$i = 1;
	while($i <= 10){
	echo $i. "<br>";
	$i++;
}
echo "<br>";
	$i = 1;
	do{
		echo $i."<br>";
		$i++;
	} while ($i <= 10);
	?>

	<?php
	echo "<br>";
	$a = 1;
		while($a <=10):
		if($a == 7) {
			$a++;
			break;
		}
		echo $a."<br>";
		$a++;
	endwhile;
	?>