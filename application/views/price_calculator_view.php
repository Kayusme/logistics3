<html>
<head>
    <title>Price Calculator</title>
</head>
<body>
    <h1>Price Calculator</h1>
    <form action="/price_calculator/calculate" method="post">
        <div id="packages">
            <div class="package">
                <label for="weight">Weight:</label>
                <input type="number" id="weight" name="packages[0][weight]">
                <label for="length">Length:</label>
                <input type="number" id="length" name="packages[0][length]">
                <label for="width">Width:</label>
                <input type="number" id="width" name="packages[0][width]">
                <label for="height">Height:</label>
                <input type="number" id="height" name="packages[0][height]">
            </div>
        </div>
        <label for="from">From:</label>
        <input type="text" id="from" name="from">
        <label for="to">To:</label>
        <input type="text" id="to" name="to">
        <button type="button" onclick="addPackage()">Add another package</button>
        <input type="submit" value="Calculate">
    </form>
    <script>
        var packageIndex = 1;
        function addPackage() {
            var packageDiv = document.createElement('div');
            packageDiv.className = 'package';
            packageDiv.innerHTML = `
                <label for="weight">Weight:</label>
                <input type="number" id="weight" name="packages[${packageIndex}][weight]">
                <label for="length">Length:</label>
                <input type="number" id="length" name="packages[${packageIndex}][length]">
                <label for="width">Width:</label>
                <input type="number" id="width" name="packages[${packageIndex}][width]">
                <label for="height">Height:</label>
                <input type="number" id="height" name="packages[${packageIndex}][height]">
            `;
            document.getElementById('packages').appendChild(packageDiv);
            packageIndex++;
        }
    </script>
</body>
</html

