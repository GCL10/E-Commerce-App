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
<?php
    function calculateDiscountedPrice($price, $discountPercentage) {
    $discountedPrice = $price - ($price * $discountPercentage / 100);
    return $discountedPrice;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gym Equipment Store</title>
</head>
<body>
    <!-- Page Header -->
	<h1>EQUIP</h1>
    <!-- Equipment Name -->
	<h2><?php echo $equipment_name; ?></h2>
    <!-- Equipment Price -->
	<p>Price: <?php echo $equipment_price; ?></p>
    <!-- Equipment Availability -->
	<?php if($equipment_in_stock){ ?>
		<p>In Stock: Yes</p>
        <!-- Calculate and display the discounted price -->
		<p>Discount: <?php echo                                            calculateDiscountedPrice($equipment_price,                         DISCOUNT_PERCENTAGE); ?></p>
	<?php } else { ?>
		<p>In Stock: No</p>
	<?php } ?>
	<!-- Other Available Equipment -->
	<h2>Other Available Equipment:</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>In Stock</th>
		</tr>
		<?php foreach ($equipment_details as $equipment) { ?>
			<tr>
                <!-- Display equipment details -->
				<td><?php echo $equipment['name']; ?></td>
				<td><?php echo $equipment['price']; ?></td>
				<td><?php echo ($equipment['in_stock'] ? "Yes" : "No"); ?></td>
			</tr>
		<?php } ?>
	</table>
    <!-- Available Equipment Colors -->
    <h2>Available Equipment Colors:</h2>
	<ul>
		<?php
		$i = 0;
		while($i < count($equipment_colors)) {
            // Display each equipment color
			echo "<li>" . $equipment_colors[$i] . "</li>";
			$i++;
		}
		?>
	</ul>
        <!-- Equipment Color Combinations -->
    <h2>Equipment Color Combinations:</h2>
	<ul>
		<?php
		foreach ($equipment_colors as $color1) {
			foreach ($equipment_colors as $color2) {
				if ($color1 != $color2) {
                     // Display color combinations
					echo "<li>" . $color1 . " and " . $color2 . "</li>";
				}
			}
		}
		?>
	</ul>
</body>
</html>