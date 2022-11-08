
    <style>
        .lds-roller {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
            }
            .lds-roller div {
            animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            transform-origin: 40px 40px;
            }
            .lds-roller div:after {
            content: " ";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #fff;
            margin: -4px 0 0 -4px;
            }
            .lds-roller div:nth-child(1) {
            animation-delay: -0.036s;
            }
            .lds-roller div:nth-child(1):after {
            top: 63px;
            left: 63px;
            }
            .lds-roller div:nth-child(2) {
            animation-delay: -0.072s;
            }
            .lds-roller div:nth-child(2):after {
            top: 68px;
            left: 56px;
            }
            .lds-roller div:nth-child(3) {
            animation-delay: -0.108s;
            }
            .lds-roller div:nth-child(3):after {
            top: 71px;
            left: 48px;
            }
            .lds-roller div:nth-child(4) {
            animation-delay: -0.144s;
            }
            .lds-roller div:nth-child(4):after {
            top: 72px;
            left: 40px;
            }
            .lds-roller div:nth-child(5) {
            animation-delay: -0.18s;
            }
            .lds-roller div:nth-child(5):after {
            top: 71px;
            left: 32px;
            }
            .lds-roller div:nth-child(6) {
            animation-delay: -0.216s;
            }
            .lds-roller div:nth-child(6):after {
            top: 68px;
            left: 24px;
            }
            .lds-roller div:nth-child(7) {
            animation-delay: -0.252s;
            }
            .lds-roller div:nth-child(7):after {
            top: 63px;
            left: 17px;
            }
            .lds-roller div:nth-child(8) {
            animation-delay: -0.288s;
            }
            .lds-roller div:nth-child(8):after {
            top: 56px;
            left: 12px;
            }
            @keyframes lds-roller {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
            }
            #loader{
                display: none;
                justify-content: center;
                align-items: center;
                background-color: rgba(5, 0, 0, 0.315);
                position: fixed;
                top: 0;
                left: 0;
                z-index: 99999;
                width: 100vw;
                height: 100vh;
            }

    </style>

<div id="loader">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>
    <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">TrustedKennel - Payment Form</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item">
                                 <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"> </i> Credit Card </a>
                            </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form id="payment-form">
                                <div class="form-group"> <label for="username">
                                        <h6>Car Name</h6>
                                    </label> <input type="text" name="username" required class="form-control" disabled value=""> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group" id="payment-element">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Total Rent</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="text" placeholder="MM" name="rent" class="form-control" disabled value="Rs. /-"> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" >
                                                <h6> Days <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" disabled class="form-control" value=""> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> 
                                    <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                            <input type="hidden" value="" id="secretSt">
                        </div>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("pk_test_51LbjutJUTMcsF2hF4cvzveiYTZ48GftdcG06AzFsUlccGhPaFBJ8efykeK0gaNG4KAQR0jCnNIUJsM0jB90qz0ay00pV7j6Jal");
    let elements;
    let secret = document.getElementById('secretSt').value;
    console.log(secret);
    elements = stripe.elements({clientSecret: secret});

    const paymentElement = elements.create("payment");
    paymentElement.mount("#payment-element");


    document.getElementById('payment-form').addEventListener("submit", sendMoney);
    async function sendMoney(e){
        e.preventDefault();
        setLoading(true);
        const { error } = await stripe.confirmPayment({
            elements,
            confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: "http://127.0.0.1:8000/payment-complete",
            },
        });

        if (error.type === "card_error" || error.type === "validation_error") {
            showMessage(error.message);
        } else {
            showMessage("An unexpected error occurred.");
        }

        setLoading(false);
    }
    function setLoading(x){
        if(x)
        document.getElementById('loader').style.display = "flex";
        else
        document.getElementById('loader').style.display = "none";
    }
</script>
