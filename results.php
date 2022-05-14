<?php

// initilaized varibales
  define ("SNACK_PRICE", 3.78);
  define ("MED_PRICE", 5.27);
  define ("REG_PRICE", 7.69);
  define ("PROT_PRICE", 5.00);
  define ("FRUIT_PRICE", 4.00);
  define ("SWEE_PRICE", 3.00);
  define ("SCONE_PRICE", 2.67);
  define ("BITES_PRICE", 2.98);
  define ("CUP_PRICE", 1.79);
  define ("COOKIE", 2.56);
  define ("HST", 0.13);

  //cost 
  $sizePrice = 0;
  $extraPrice = 0;
  $sidePrice = 0;

   //get the input from text field
  $size = ($_POST['size']);
  $extra = ($_POST['extra']);
  $side = ($_POST['side']);

    // calculate the volume
  if ($size == "snack")  {
		$sizePrice = SNACK_PRICE;
	}
	else if ($size == "medium") {
		$sizePrice = MED_PRICE;
 }
	else if ($size == "regular") {
		$sizePrice = REG_PRICE;
	}

  // extras
   if ($extra == "protein") {
		$extraPrice = PROT_PRICE;
	}
	else if ($extra == "fruit") {
		$extraPrice = FRUIT_PRICE;
	}
	else if ($extra == "sweetener") {
		$extra = SWEE_PRICE;
	}

  //drinks
  if ($side == "scone") {
		$sidePrice = SCONE_PRICE;
	}
	else if ($side == "bites") {
		$sidePrice = BITES_PRICE;
	}
	else if ($side == "cup") {
		$sidePrice = CUP_PRICE;
	}
	else if ($side == "cookie") {
		$sidePrice = COOKIE_PRICE;
	}


    $subtotal = $sizePrice + $extraPrice + $sidePrice;
    $tax = $subtotal * HST;
    $total = $subtotal + $tax; 


    $subtotal = number_format($subtotal, 2);
    $tax = number_format($tax, 2);
    $total = number_format($total, 2);
?>

    <center><h3>Order Cost:</h3></center>
    <center>Your subtotal is $<?php echo "$subtotal" ?> <br> The amount of HST added is $<?php echo "$tax" ?> <br> Your total is $<?php echo "$total" ?> </br></center>