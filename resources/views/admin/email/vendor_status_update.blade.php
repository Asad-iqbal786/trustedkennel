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
        <h3>Your Status has been change : {{$vendor_type}}</h3>
      </div>

  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Vendor Type</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$first_name}}</td>
        <td>{{$vendor_type}}</td>
        <td>{{$email}}</td>
      </tr>
     
    </tbody>
  </table>
</div>

</body>
</html>
