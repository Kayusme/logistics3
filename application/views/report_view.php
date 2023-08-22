<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Reports</h2>
        <h3>User Logs</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody id="userLogs">
                <!-- User logs will be inserted here -->
            </tbody>
        </table>
        <h3>Processed Consignments</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>User ID</th>
                </tr>
            </thead>
            <tbody id="processedConsignments">
                <!-- Processed consignments will be inserted here -->
            </tbody>
        </table>
    </div>
</body>
</html>

