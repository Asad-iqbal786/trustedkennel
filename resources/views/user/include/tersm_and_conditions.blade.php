@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')


        </div>

    </header>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-3">
                @include('user.include.sidebar')
            </div>
            <div class="col-9">
                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="h3">Dashboard</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-10">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">PUPPY APPLICATION</h6>
                                </div>
                                <div class="card-body">

                                    <p>
                                        PLEASE READ AND AGREE TO THE FOLLOWING
                                        • I UNDERSTAND THAT I AM GETTING A PUPPY AND THAT NO MATTER HOW WELL PREPARED AND
                                        TRAINED MY PUPPY IS, IT IS STILL A BABY AND I SHOULD EXPECT MY PUPPY TO HAVE
                                        ACCIDENTS IN THE HOUSE AND CRATE, TO CRY AND BARK, TO NIP AND BITE, AND TO REQUIRE A
                                        GREAT DEAL OF PATIENCE AND ATTENTION. I UNDERSTAND THAT THESE ARE NORMAL PUPPY
                                        BEHAVIORS AND THAT I EXPECT THEM TO HAPPEN.
                                        • I UNDERSTAND THAT DOGS HAVE GROOMING REQUIREMENTS.
                                        • I UNDERSTAND THAT THE EARS OF MY DOG WILL NEED TO BE CLEANED WEEKLY OR MORE IF MY
                                        DOG SWIMS OR IS IN A HUMID ENVIRONMENT.
                                        • I UNDERSTAND THAT I NEED TO LEARN HOW TO TRAIN AND MAINTAIN MY DOG'S TRAINING AND
                                        THAT MAY REQUIRE THE ASSISTANCE OF A DOG TRAINER OR BEHAVIORIST.
                                        • I UNDERSTAND THAT WHILE YOU SCREEN YOUR BREEDING DOGS FOR COMMON PROBLEMS AND THAT
                                        IT IS EQUALLY IMPORTANT THAT I MAINTAIN MY DOG/PUPPY AT AN IDEAL WEIGHT, PROVIDE
                                        QUALITY NUTRITION, DON'T OVER EXERCISE MY PUPPY, AND PROVIDE A SAFE ENVIRONMENT TO
                                        DO MY PART IN MAINTAINING MY PUPPY'S HEALTH.
                                        • I HAVE READ AND AGREE TO THE RESERVATION POLICY. [INSERT LINK TO RESERVATION
                                        POLICY]
                                        ☐ I AGREE TO THE TERMS OF MY AGREEMENT

                                        I HAVE ANSWERED THE ABOVE QUESTIONS TRUTHFULLY AND UNDERSTAND THAT IF ANY FALSE
                                        STATEMENTS HAVE BEEN GIVEN, TRUSTED KENNELS RESERVES THE RIGHT TO REFUSE TO SELL A
                                        PUPPY TO ME AND MY RESERVATION FEE IS FORFEITED.
                                        BY ENTERING MY NAME IN THIS TEXTBOX, I AGREE THAT THE SIGNATURE IS THE LEGAL
                                        EQUIVALENT OF MY MANUAL SIGNATURE.
                                    </p>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush




@push('scripts')
    <script>
        // show courier name and Teracking Number
        $("#if_yes").hide();
        //order status
        $(".show_hide").on("click", function() {
            if (this.value == "yes_surrendered") {

                $("#if_yes").show();
            } else if (this.value == "no_surrendered") {
                $("#if_yes").hide();
            } else {

            }
        });
    </script>
@endpush
