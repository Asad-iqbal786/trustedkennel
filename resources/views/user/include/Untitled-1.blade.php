
<?php  

use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;

?>
@extends('layouts.frontend_app')

@section('main-content')
<div class="breadcrumbs">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="bread-inner">
                  <ul class="bread-list">
                      <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                      <li class="active"><a href="blog-single.html">Shop Details</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="container">
  <div class="row pt-5">
    <div class="col-md-1"></div>
    <div class="col-md-10">
  
      <form class="forms-sample" method="post"
          @if(empty($appData['id']))
              action="{{route('addEditApplication')}}"
          @else
                  action="{{route('addEditApplication',$appData['id'])}}"
          @endif 
              method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="first_name">first_name</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first_name">
            </div>
            <div class="form-group col-md-6">
              <label for="last_name">last_name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="country">Country</label>
              <input type="text" class="form-control" name="country" id="country" placeholder="1234 Main St">
            </div>
            <div class="form-group col-md-4">
              <label for="street">street</label>
              <input type="text" class="form-control" name="street" id="street" placeholder="1234 Main St">
            </div>
            <div class="form-group col-md-4">
              <label for="city">city</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="1234 Main St">
            </div>
          </div>
        
       
       
      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="state">state</label>
            <input type="text" class="form-control" name="state" id="state">
          </div>
          
          <div class="form-group col-md-3">
            <label for="inputZip">zip_code</label>
            <input type="text" class="form-control" name="zip_code" id="inputZip">
          </div>
          <div class="form-group col-md-3">
            <label for="phone">phone </label>
            <input type="number" class="form-control" name="phone" id="phone" placeholder="phone">
          </div>
        </div>
        <div class="form-row">
         
          <div class="form-group col-md-6">
            {{-- <label for="inputState">Family and Home</label>
            <input type="text" class="form-control" name="family_and_home" id="family_and_home">
            <div id="welcomeText" class="welcomeText"  title="Please tell us a little about your family and home situation"><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div> --}}
          </div>
        
        
          
        </div>

        <div class="row">
          
          <div class="form-group col-md-6">
            <label for="inputState">Family and Home</label>
            <input type="text" class="form-control" name="family_and_home" id="family_and_home">

            <div id="welcomeText" class="welcomeText"   title="Please tell us a little about your family and home situation" ><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
          <div class="form-group col-md-8">
            <label for="inputZip">Fenced</label>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <label for="yes" class="form-check-label">
                          <input type="radio" class="form-check-input" name="fenced" id="yes" value="Yes" >
                          Yes
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <label for="no" class="form-check-label">
                          <input type="radio" class="form-check-input" name="fenced" id="no" value="No" >
                          No
                        <i class="input-helper"></i></label>
                      </div>
                </div>
            </div>
          </div>
      
        </div>



        <div class="form-row">
          
          <div class="form-group col-md-6">
            <label for="inputState">HOUSEHOLD MEMBERS Text </label>
            <input type="text" class="form-control" name="puppy_night" id="puppy_night">

            <div id="welcomeText" class="welcomeText"  title="Please let us know if there are any children and/or pets in your household. If so, please let us know numbers of and ages for children, type of animal, and age of pet(s)." ><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
          <div class="form-group col-md-6 puppy_night">
     
                <label for="primary_caregiver">Primary Caregiver</label>
                
                <input type="text" class="form-control" name="primary_caregiver" id="primary_caregiver">
                <div id="welcomeText" class="welcomeText"  title="Who in your household will be the primary caregiver for the puppy?" ><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>

          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="puppy_experience">Experience</label>
            <input type="text" class="form-control" name="puppy_experience" id="puppy_experience">
            <div id="welcomeText" class="welcomeText"  title="Please tell us about your prior experience with puppies and dogs. (First time puppy families are welcome to apply.)"><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>

          </div>
          <div class="form-group col-md-12">
            <div class="form-group">
              <label for="">Residence</label>
              <div class="row">
                  <div class="col-3">
                      <div class="form-check">
                          <label for="house" class="form-check-label">
                            <input type="radio" class="form-check-input" name="residence" id="house" value="House">
                            House
                          <i class="input-helper"></i></label>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="form-check">
                          <label for="farm" class="form-check-label">
                            <input type="radio" class="form-check-input" name="residence" id="farm" value="Farm" >
                            Farm
                          <i class="input-helper"></i></label>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="form-check">
                          <label for="apartment" class="form-check-label">
                            <input type="radio" class="form-check-input" name="residence" id="apartment" value="Apartment" >
                            Apartment
                          <i class="input-helper"></i></label>
                        </div>
                  </div>

              </div>
          </div>
          </div>
          
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="inputState">Puppy in your family</label>
            <input type="text" class="form-control" name="how_you_plan_puppy" id="how_you_plan_puppy">
            <div id="welcomeText" class="welcomeText"  title="Please tell us a little bit about how you plan to integrate your new puppy into your family"><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Have you ever raised a puppy? </label>
            <input type="text" class="form-control" name="raised_a_puppy" id="raised_a_puppy">
            <div id="welcomeText" class="welcomeText"  title="(Please do not include your parents raising a puppy when you were growing up)"><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
        </div>
        <div class="form-group col-md-12">
            <label for="inputState">How many dogs have you owned in your lifetime?</label>
            <div class="row">
                <div class="col-2">
                    <div class="form-check">
                        <label for="0" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="0" value="0">
                          0
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <label for="1" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="1" value="1" >
                          1
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <label for="2" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="2" value="2" >
                          2
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <label for="3" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="3" value="3" >
                          3
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <label for="4" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="4" value="4" >
                          4
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <label for="5" class="form-check-label">
                          <input type="radio" class="form-check-input" name="many_dogs" id="5" value="5" >
                          5
                        <i class="input-helper"></i></label>
                      </div>
                </div>
                <div class="col-6">
                  <div class="form-check">
                      <label for="5 or more" class="form-check-label">
                        <input type="radio" class="form-check-input" name="many_dogs" id="5 or more" value="5 Or More" >
                        5 Or More
                      <i class="input-helper"></i></label>
                    </div>
              </div>
            </div>
          </div>
        <div class="form-row">
          
         
          <div class="form-group col-md-6">
            <label for="inputZip">LIVING SITUATION FOR YOUR PUPPY.     </label>
            <input type="text" class="form-control" name="living_situation_puppy" id="living_situation_puppy">
            <div id="welcomeText" class="welcomeText"  title="Please describe the living situation for the puppy. Is someone home during the day at your house? How many hours daily would the dog be left alone? If no one is at home during the day, would you plan for someone to come into your home to let the puppy in and out during the potty-training stage? (A doggy daycare if run properly, can be an excellent choice for working new puppy parents as well once your puppy has had all his/her vaccines.) "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">versus any other breed.</label>
            <input type="text" class="form-control" name="why_you_chose_this_breeds" id="why_you_chose_this_breeds">
            <div id="welcomeText" class="welcomeText"  title="Please let us know why you have decided on this breed (versus any other breed)."><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
        </div>
        <div class="form-row">
       
          <div class="form-group col-md-6">
            <label for="inputState">TRAINING.   </label>
            <input type="text" class="form-control" name="puppy_training" id="puppy_training">
            <div id="welcomeText" class="welcomeText"  title="What type of training will you and your puppy participate in? "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
          <div class="form-group col-md-5">
            <label for="inputZip">SOCIALIZATION.</label>
            <input type="text" class="form-control" name="socialization" id="socialization">
            <div id="welcomeText" class="welcomeText"  title=" Socialization with humans and other dogs is critical to the healthy emotional development of a puppy. How do you plan to properly socialize your puppy?   "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
        </div>

          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="state">PLANS FOR NEW DOGS.   </label>
            <input type="text" class="form-control" name="plan_new_dog" id="plan_new_dog">
            <div id="welcomeText" class="welcomeText"  title="  Are you or anyone in your household planning on getting another puppy during the next year? If so, please provide details on the breed, breeder, and goals for that puppy. "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>


        </div>
        <div class="form-row">
        
          <div class="form-group col-md-6">
            <label for="state">PLEASE TELL US MORE.</label>
            <input type="text" class="form-control" name="tell_us_more" id="tell_us_more">
            <div id="welcomeText" class="welcomeText"  title=" Is there anything else you would like us to know about your preferences, you, your family, or your living situation that relates to having a puppy?     "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">MANAGING PUPPYHOOD.  </label>
            <input type="text" class="form-control" name="patience_level" id="patience_level">
            <div id="welcomeText" class="welcomeText"  title="Puppies often have a lot of energy and can chew, dig, bark, soil the house, and cry at night. They can play roughly and scratch your skin with teeth and nails, they can get sick on floors, furniture, and in cars. Please tell us your patience level and how you might deal with the challenges of puppyhood.      "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          
          </div>

        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="inputState">plan_for_anyother_dog</label>
            <input type="text" class="form-control" name="plan_for_anyother_dog" id="plan_for_anyother_dog">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">COLOR I am interested in these coat colors:</label>
            <input type="text" class="form-control" name="color" id="color">
            
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputState">Is there a person in your household who is</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Elderly">
                  Elderly
                  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Disabled" checked="Has special needs">
                  Disabled  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                  Has special needs  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Allergic to dogs" checked="">
                  Allergic to dogs 
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputState">Is there a person in your household who is</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Yes">
                  Yes
                  <input type="checkbox" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="no" checked="Has special needs">
              </div>
            </div>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputZip">Sex</label>
            <input type="text" class="form-control" name="gender" id="gender">
          </div>
          <div class="form-group col-md-6">
            <label for="state">ENERGY LEVEL. The energy level in my household is:</label>
            <input type="text" class="form-control" name="ideal_time" id="ideal_time">
          
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="state">TIMING. </label>
            <input type="text" class="form-control" name="ideal_time" id="ideal_time">

            <div id="welcomeText" class="welcomeText"  title=" When is your ideal time to take a puppy home? For example, Spring 2023, only during the summer, not before October, etc.      "><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i></div>
          </div>
         
          <div class="form-group col-md-12">
            <label for="state">signature</label>
            <input type="text" class="form-control" name="signature" id="signature">
          </div>
        </div>

        <div class="col-md-6">
         
          <div class="col-md-6">
            <div class="form-group row">
              <div class="form-check">
                <label class="form-check-label text-muted">
                  <input type="checkbox" name="agree" class="form-check-input"> Agree
                   <a href="{{route('agrement')}}" target="_blank">  Terms and conditions </a>
                <i class="input-helper"></i></label>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Submit Now</button>
          </div>
        </div>

       
       
      </form>
  
  
  
    </div>
    <div class="col-md-1"></div>
  </div>
</div>









@endsection

@push('styles')
<style>
    .ps-widget__content {
        box-sizing: border-box;
    }
    .ps-widget--account-dashboard .ps-widget__content ul li.active {
        background-color: #fcb800;
    }
  .ps-widget--account-dashboard .ps-widget__content ul {
      border: 1px solid #d1d1d1;
  }
  input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea {
    color: #666;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 3px;
    width: 90%;
}
  div.welcomeText {
    position: absolute;
    bottom: 4px;
    right: 19px;
    font-size: 18px;
}
</style>
@endpush




@push('scripts')

@endpush
