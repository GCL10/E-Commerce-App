<?php
$equipment_name = "Dumbbell Set"; //string variable
$equipment_price = 100; //integer variable
$equipment_in_stock = true; //boolean variable

define("DISCOUNT_PERCENTAGE", 10); //constant variable

//multi-dimensional array with equipment details
$equipment_details = array(
    array("name"=>"Treadmill", "price"=>500, "in_stock"=>true),
    array("name"=>"Elliptical Trainer", "price"=>400, "in_stock"=>true),
    array("name"=>"Weight Bench", "price"=>200, "in_stock"=>true)
);
?>
<?php
$equipment_colors = array("red", "blue", "green", "yellow");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gym Equipment Store</title>
</head>
<body>
	<h1>EQUIP</h1>
	<h2><?php echo $equipment_name; ?></h2>
	<p>Price: <?php echo $equipment_price; ?></p>
	<?php if($equipment_in_stock){ ?>
		<p>In Stock: Yes</p>
		<p>Discount: <?php echo $equipment_price - ($equipment_price * DISCOUNT_PERCENTAGE / 100); ?></p>
	<?php } else { ?>
		<p>In Stock: No</p>
	<?php } ?>
	
	<h2>Other Available Equipment:</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>In Stock</th>
		</tr>
		<?php foreach ($equipment_details as $equipment) { ?>
			<tr>
				<td><?php echo $equipment['name']; ?></td>
				<td><?php echo $equipment['price']; ?></td>
				<td><?php echo ($equipment['in_stock'] ? "Yes" : "No"); ?></td>
			</tr>
		<?php } ?>
	</table>

    <h2>Available Equipment Colors:</h2>
	<ul>
		<?php
		$i = 0;
		while($i < count($equipment_colors)) {
			echo "<li>" . $equipment_colors[$i] . "</li>";
			$i++;
		}
		?>
	</ul>

    <h2>Equipment Color Combinations:</h2>
	<ul>
		<?php
		foreach ($equipment_colors as $color1) {
			foreach ($equipment_colors as $color2) {
				if ($color1 != $color2) {
					echo "<li>" . $color1 . " and " . $color2 . "</li>";
				}
			}
		}
		?>
	</ul>
</body>
</html>