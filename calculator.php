<?php 
	$page_title = 'Widget Cost Calculator';
	include('./includes/header.inc.html');
	
	function calculate_total ($tax = 17.5) {
	
		global $total;
	
		$taxrate = $tax/100;
		
		$total = ($_POST['quantity'] * $_POST['price']) * ($taxrate + 1);
		
		$total = number_format($total, 2);
		
	}
	
	if (isset($_POST['submitted'])) {
	
		if (is_numeric($_POST['quantity']) && is_numeric($_POST['price'])) {
		
			$taxrate = $_POST['tax']/100;
			$total = ($_POST['quantity'] * $_POST['price'] * ($taxrate + 1));
			
			echo '<h1 id="mainhead">Total Cost</h1>';
			
			$total = NULL;
			
			if (is_numeric($_POST['tax'])) {
			
				calculate_total ($_POST['tax']);
				
			}	else {
			
				calculate_total ();
				
			}
			
			echo '<p>The total cost of purchasing ' . number_format($_POST['quantity']) . ' widget(s) at £' . number_format($_POST['price'], 2) . ' each is <b>£' . $total . '</b>.</p>';	
			
			echo '<p><br /></p>';
			
		}	else {
			
			echo '<h1 id="mainhead">Error!</h1>
				<p class="error">Please enter a valid quantity and price.</p><p><br /></p>';
			
		}
	}
?>

<h2>Widget Cost Calculator</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<p><i>Please enter using numbers only</i></p>
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php if(isset($_POST['quantity'])) {echo $_POST['quantity'];} ?>" /></p>
	<p>Price £: <input type="text" name="price" size="5" maxlength="10" value="<?php if(isset($_POST['price'])) {echo $_POST['price'];} ?>" /></p>
	<p>Tax (%): <input type="text" name="tax" size="5" maxlength="10" value="<?php if(isset($_POST['tax'])) {echo $_POST['tax'];} ?>" /> (Set as standard VAT if left blank)</p>
	<p><input type="submit" name="submit" value="Calculate!" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>

<?php

	include('./includes/footer.inc.html');
	
?>