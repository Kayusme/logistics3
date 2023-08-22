<html>
<head>
    <title>Update Consignment Status</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Update Consignment Status</h1>
    <form id="updateStatusForm">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <label for="status">New Status:</label>
        <select id="status">
            <option value="created">Created</option>
            <option value="processing">Processing</option>
            <option value="delivered">Delivered</option>
        </select>
        <button type="submit">Update Status</button>
    </form>
    <script>
        $('#updateStatusForm').submit(function(e) {
            e.preventDefault();
            var status = $('#status').val();
            $.post("/package_controller/updateConsignmentStatus", { status: status })
                .done(function(data) {
                    alert("Consignment status updated successfully");
                });
        });
    </script>
</body>
</html>

