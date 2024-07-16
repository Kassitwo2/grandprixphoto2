<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style>
        /* Custom CSS for DataTable */
#users-table_wrapper {
    padding: 20px;
}

#users-table th {
    background-color: #f4f4f4;
    border-bottom: 2px solid #ddd;
}

#users-table td {
    border-bottom: 1px solid #ddd;
}

#users-table tbody tr:hover {
    background-color: #f9f9f9;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <table id="users-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('users/data') }}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    // Add more columns as needed
                ]
            });
        });
    </script>
</body>
</html>
