<!DOCTYPE html>
<html>
<head>
    <title>Customer View</title>
</head>
<body>
    <form action="/Customer/calculate_price" method="post">
        <label for="weight">Weight:</label><br>
        <input type="text" id="weight" name="weight"><br>
        <label for="distance">Distance:</label><br>
        <input type="text" id="distance" name="distance"><br>
        <input type="submit" value="Calculate Price">
    </form>

    <form action="/Customer/checkout" method="post">
        <input type="submit" value="Checkout">
    </form>

    <form action="/Customer/track_consignment" method="post">
        <label for="consignment_number">Consignment Number:</label><br>
        <input type="text" id="consignment_number" name="consignment_number"><br>
        <input type="submit" value="Track Consignment">
    </form>
</body>
</html>

