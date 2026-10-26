<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gift Card</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>ADD GIFT CARD</h1>

    <form>

        <label for="card-name">Card Name</label>
        <input type="text" id="card-name" name="card-name" required>

        <label for="card-type">Card Type</label>
        <input type="text" id="card-type" name="card-type" required>

        <label for="card-value">Card Value</label>
        <input type="number" id="card-value" name="card-value" step="0.01" required>

        <label for="points-required">Points Required</label>
        <input type="number" id="points-required" name="points-required" required>

        <button type="submit" onclick="window.location.href='card-list.php'">Add Card</button>


</body>

</html>