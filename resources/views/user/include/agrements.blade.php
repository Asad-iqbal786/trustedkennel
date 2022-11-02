<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')


<section class="about-us section">
    <div class="container">
        <div class="row pt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="about-content">
                    <h3>Please read and agree to the following</h3>
                    <p>(1) I understand that I am getting a puppy and that no matter how well prepared and trained my puppy is, it is still a baby and I should expect my puppy to have accidents in the house and crate, to cry and bark, to nip and bite, and to require a great deal of patience and attention. I understand that these are NORMAL puppy behaviors and that I expect them to happen.</p>
                    <p> (2) I understand that dogs have grooming requirements. </p>
                    <p>
                        (3) I understand that the ears of my dog will need to be cleaned weekly or more if my dog swims or is in a humid environment.
                    </p>
                    <p>
                        (4) I understand that I need to learn how to train and maintain my dog's training and that may require the assistance of a dog trainer or behaviorist.
                    </p>
                    <p>
                        (5) I understand that while you screen your breeding dogs for common problems and that it is equally important that I maintain my dog/puppy at an ideal weight, provide quality nutrition, don't over exercise my puppy, and provide a safe environment to do my part in maintaining my puppy's health.
                    </p>
                    <p>
                        (6)   <a href="">  I have read and agree to the Reservation Policy.br <br>
                            •	I agree to the terms of my agreement <br></a>
                    </p>
                    <b class="font-weight-bold"> Signature</b>
                    <p>
                        (1) I have answered the above questions truthfully and understand that if any false statements have been given, Trusted Kennels reserves the right to refuse to sell a puppy to me and my reservation fee is forfeited. 
                    </p>
                    <p>

                        (2) By entering my name in this textbox, I agree that the signature is the legal equivalent of my manual signature.
                    </p>

                    <div class="button">
                        <a href="" class="btn"> Please Read this </a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
      
    </div>
</section>




@endsection

@push('styles')

@endpush




@push('scripts')

@endpush
