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
        <div class="">
            <p>Your Order status has been updated</p>

            <h3>{{ $email }}</h3>
            <h3>Order Status {{ $order_status }}</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Shipping Charges </th>
                        <th scope="col"> Status </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row"> {{ $name }}</th>
                        <td> {{ $admin_id }}</td>
                        <td> {{ $shipping_chargges }}</td>
                        <td> {{ $order_status }}</td>
                    </tr>

                </tbody>
            </table>
            <br><br><br>
            <div class="er">
                <a href="{{ route('userOrder') }}" target="_blank"><b>Payment link</b></a>
            </div>

        </div>

    </div>

</body>

</html>
