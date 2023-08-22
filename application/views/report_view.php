<html>
<head>
    <title>Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Report</h1>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>
    <table id="logsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Log Message</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= $log->id ?></td>
                    <td><?= $log->log_message ?></td>
                    <td><?= $log->user_id ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table id="consignmentsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consignments as $consignment): ?>
                <tr>
                    <td><?= $consignment->id ?></td>
                    <td><?= $consignment->status ?></td>
                    <td><?= $consignment->user_id ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        // Add pagination or sorting functionality to the tables
    </script>
</body>
</html>

