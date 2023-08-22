<html>
<head>
    <title>Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Admin Panel</h1>
    <form id="updatePriceForm">
        <label for="newPrice">New Standard Price:</label>
        <input type="number" id="newPrice">
        <button type="submit">Update Price</button>
    </form>
    <script>
        $('#updatePriceForm').submit(function(e) {
            e.preventDefault();
            var newPrice = $('#newPrice').val();
            $.post("/admin_controller/updateStandardPrice", { newPrice: newPrice })
                .done(function(data) {
                    alert("Price updated successfully");
                });
        });
    </script>
</body>
</html>

