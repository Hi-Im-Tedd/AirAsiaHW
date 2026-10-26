<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gift Card Details</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>

	<main class="gift-card-details-page">

    <h1>GIFT CARD DETAILS</h1>
    
        <button  onclick="window.location.href='card-update.php'">Update Card</button>
    
		<dl class="gift-card-details-list">
			<dt class="visually-hidden">Gift card image</dt>
			<dd class="gift-card-image">
				<img src="images/Gift Card.jpg" alt="Home Depot Gift Card">
			</dd>

			
			<dd class="gift-card-name-value">Home Depot Giftcard</dd>

			<dt class="gift-card-description-label">Card description</dt>
			<dd class="gift-card-description">Use this gift card toward your next Home Depot purchase.</dd>

			<dt>Card type</dt>
			<dd>Home Improvement</dd>

			<dt>Card value</dt>
			<dd>$200.00</dd>

			<dt>Points required</dt>
			<dd>20,000 points</dd>
		</dl>
	</main>

</body>

</html>