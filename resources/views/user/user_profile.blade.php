@extends('admin-layout.master')
@section('content')
<style>
.user-profile {
    width: 100%;
    max-width: 1200px;
    margin: 200px auto 0; /* Top margin added for spacing */
    padding: 30px; /* Adjusted padding for better spacing */
    background-color: #f9f9f9; /* Light background for the profile section */
    border-radius: 8px; /* Rounded corners for a modern look */
}

table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    border-radius: 8px; /* Rounded corners for the table */
    overflow: hidden; /* Ensures corners of the table are rounded */
}

thead {
    background-color: #25df7c; /* Bright blue for the header */
    color: #fff; /* White text for contrast */
}

thead th {
    padding: 16px;
    text-align: left;
    border-bottom: 2px solid #de69e4; /* Darker blue for the border */
    white-space: nowrap; /* Prevent header text from wrapping */
}

tbody tr {
    border-bottom: 1px solid #ddd;
}

tbody td {
    padding: 14px;
    text-align: left;
    font-size: 16px;
    white-space: nowrap; /* Prevent cell content from wrapping */
}

tbody tr:nth-child(even) {
    background-color: #e9efee; /* Light gray for even rows */
}

tbody tr:nth-child(odd) {
    background-color: #fff; /* White for odd rows */
}

tbody tr:hover {
    background-color: #cce5ff; /* Light blue for hover effect */
}

th, td {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
}

@media (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto; /* Allows horizontal scroll on small screens */
        width: 100%;
    }

    thead {
        display: none; /* Hide table headers on small screens */
    }

    tbody, tr, td {
        display: block;
        width: 100%;
    }

    tr {
        margin-bottom: 10px;
        border-bottom: 2px solid #ddd;
    }

    td {
        position: relative;
        padding-left: 50%;
        text-align: right;
        font-size: 14px;
        white-space: nowrap;
    }

    td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 45%;
        padding-left: 10px;
        font-weight: bold;
        background: #e9ecef;
        border-right: 1px solid #ddd;
    }
}

/* this is user profile */

</style>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="user-profile">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Number</th>
                                        <th>Stripe ID</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->number }}</td>
                                        <td>{{ $user->stripe_customer_id ?? 'null' }}</td>
                                        <td>{{ $user->is_approved ?? 'null' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <!-- Include jQuery before your custom script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.user-card').click(function() {
                // event.stopPropagation();
                let id = $(this).find('.user-id').data('id');
                alert(`User ID: ${id}`);
                window.location.href = `/edit-profile/${id}`;
            });
        });
    </script>
@endsection
