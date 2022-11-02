<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Basic Table</h2>
        <p>Pleasa confirm your emails :</p>
        <div class="">
            <h3>Your Order Status has been change</h3>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>admin_id</th>
                    <th>vendor_id</th>
                    <th>pupName</th>
                    <th>shcharges</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $name }}</td>
                    <td>Doe</td>
                    <td>{{ $admin_id }}</td>
                    <td>{{ $vendor_id }}</td>
                    <td>{{ $pupName }}</td>
                    <td>{{ $shcharges }}</td>
                    <td>{{ $email }}</td>
                </tr>

            </tbody>
        </table>
        <br><br><br>
        <div class="er">
            <a href="{{ route('userOrder') }}" target="_blank"><b>Payment link</b></a>
        </div>



    </div>

</body>

</html>
