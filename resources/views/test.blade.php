<html>
<head>
    <title>Checkout</title>
</head>
<body>
<form action="{{route('stripeCheckOut')}}" method="POST">
    <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="pk_test_51LzQjnHOUF1948MIPG1TTLDdQun22vcSw1A1IG05ujFpJBJTPng4QO4M3MsT3qSaLpjwSdXJTpqOgFISjVhfgBBD00xMSEEEVq"
        data-name="Custom t-shirt"
        data-description="Your custom designed t-shirt"
        data-amount="2000"
        data-currency="cad">
    </script>
</form>
</body>
</html>
