
<?php  

use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;

?>
@extends('layouts.frontend_app')

@section('main-content')

<header class="header-slider">

  <div class="rd-navbar-wrap">
    
    @include('frontend.partials.header')

  </div>
    <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a>
</header>

<div class="page-style-a">
  <div class="container">
      <div class="page-intro">
          <ul class="bread-crumb">
              <li class="has-separator">
                  <i class="ion ion-md-home"></i>
              </li>
              <li class="is-marked">
              </li>
          </ul>
      </div>
  </div>
</div>

<div class="container">
  <div class="row pt-5">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h5 class="text-center">BREED QUESTIONNAIRE</h5>
        <div class="form-group">
          

          <p>ONE OF OUR EXPERTS WILL READ YOUR ANSWERS AND SEND YOU HIS RECOMMENDATIONS OF THE BEST BREEDS FOR YOU.</p>
          <br><br><br>
            <div class="form-group">
              <div class="section-title">ENERGY LEVEL</div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="xsmall_endergy" name="energy_level" class="custom-control-input">
              <label class="custom-control-label" for="xsmall_endergy">XSMALL</label>

            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="small_energy" name="energy_level" class="custom-control-input">
              <label class="custom-control-label" for="small_energy">SMALL</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="medium_energy" name="energy_level" class="custom-control-input">
              <label class="custom-control-label" for="medium_energy">MEDIUM  </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="large_energy" name="energy_level" class="custom-control-input">
              <label class="custom-control-label" for="large_energy">LARGE </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="xlarge_energy" name="energy_level" class="custom-control-input">
              <label class="custom-control-label" for="xlarge_energy">XLARGE </label>
            </div>

            <div class="form-group">
              <div class="section-title">  CHOOSE THE SITUATION THAT BEST DESCRIBES YOUR HOUSEHOLD:  </div>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadis1" name="household" class="custom-control-input">
              <label class="custom-control-label" for="customRadis1"> WE ARE A VERY LOW-ENERGY HOUSEHOLD AND NEED A DOG THAT SHOULDN'T BE EXPECTED TO DO OR GET OUT MUCH BEYOND POTTY BREAKS AND THE OCCASIONAL SHORT WALK</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadios2" name="household" class="custom-control-input">
              <label class="custom-control-label" for="customRadios2">  WE ARE OCCASIONALLY ACTIVE AND WANT A DOG THAT IS MORE INTERESTED IN LOUNGING THAN PLAYING.  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadis3" name="household" class="custom-control-input">
              <label class="custom-control-label" for="customRadis3"> WE LEAD A MODERATELY ACTIVE LIFE AND ARE FREQUENTLY BUSY AND WANT A DOG THAT WE CAN DO THINGS WITH ON WEEKENDS.  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadis4" name="household" class="custom-control-input">
              <label class="custom-control-label" for="customRadis4">  WE ARE A VERY ACTIVE HOUSEHOLD AND ALWAYS ON THE GO AND WANT A DOG THAT IS ENERGETIC ENOUGH FOR DAILY PHYSICAL ACTIVITY (THIS INCLUDES FAMILIES WITH KIDS THAT WILL PLAY DAILY WITH THE DOG).   </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadis5" name="household" class="custom-control-input">
              <label class="custom-control-label" for="customRadis5"> WE ARE ENERGIZER BUNNIES AND NEED A VERY ACTIVE DOG THAT CAN KEEP UP WITH MULTIPLE DAILY ACTIVITIES. </label>
            </div>
        
            <br>
            <div class="form-group">
              <div class="section-title">QUALITIES OF DOG</div>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="hunting_dog" name="quantity_of_dog" class="custom-control-input">
              <label class="custom-control-label" for="hunting_dog">  HUNTING DOG </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="guard_dog" name="quantity_of_dog" class="custom-control-input">
              <label class="custom-control-label" for="guard_dog">  GUARD DOG  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="running_dog" name="quantity_of_dog" class="custom-control-input">
              <label class="custom-control-label" for="running_dog">  RUNNING COMPANION  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="servic_dog" name="quantity_of_dog" class="custom-control-input">
              <label class="custom-control-label" for="servic_dog">  SERVICE AND ASSISTANCE DOG   </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="therapy_dog" name="quantity_of_dog" class="custom-control-input">
              <label class="custom-control-label" for="therapy_dog"> THERAPY DOG </label>
            </div>
        
        
            <div class="form-group">
              <div class="section-title">DROOLING</div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no_drooling" name="no_drooling" class="custom-control-input">
              <label class="custom-control-label" for="no_drooling">No </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="some_drooling" name="some_drooling" class="custom-control-input">
              <label class="custom-control-label" for="some_drooling">Some </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="dont-mind-drooling" name="dont-mind-droling" class="custom-control-input">
              <label class="custom-control-label" for="dont-mind-drooling">DON’T MIND DROOLING </label>
            </div>
        
            <div class="form-group">
              <div class="section-title"> BARKING </div>
            </div>
          
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="braking" class="custom-control-input">
              <label class="custom-control-label" for="no">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="some" name="braking" class="custom-control-input">
              <label class="custom-control-label" for="some">Some </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="mind_barking" name="braking" class="custom-control-input">
              <label class="custom-control-label" for="mind_barking">DON’T MIND BARKING </label>
            </div>
            <div class="form-group">
              <div class="section-title"> SHEDDING </div>
            </div>
          
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="minimal" name="shedding" class="custom-control-input">
              <label class="custom-control-label" for="minimal">MINIMAL </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="some_shedding" name="shedding" class="custom-control-input">
              <label class="custom-control-label" for="some_shedding">SOME  </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="heavy_shadding" name="shedding" class="custom-control-input">
              <label class="custom-control-label" for="heavy_shadding"> HEAVY  </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">DOG EXPERIENCE</div>
            </div>
          
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no">No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="one_years" name="one_years" class="custom-control-input">
              <label class="custom-control-label" for="one_years"> 1 YEAR </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="5_years" name="5_years" class="custom-control-input">
              <label class="custom-control-label" for="5_years"> 5 YEARS </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="10_years" name="10_years" class="custom-control-input">
              <label class="custom-control-label" for="10_years"> 10+ YEARS </label>
            </div>
        
        
        
        
            <div class="form-group">
              <div class="section-title">CLIMATE</div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInlinsd1" name="customRadioInlinsd1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInlinsd1">TROPICAL </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2adf" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2adf">DRY </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2adfs" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2adfs">TEMPERATE </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="sfcustomRadioInline2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="sfcustomRadioInline2">CONTINENTAL </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="cudfstomRadioInline2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="cudfstomRadioInline2">POLAR </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">YOUR FAMILY AND HOME
                RESIDENCE
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="appartment" name="appartment" class="custom-control-input">
              <label class="custom-control-label" for="appartment">APARTMENT </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="house_with_a_small_yard" name="house_with_a_small_yard" class="custom-control-input">
              <label class="custom-control-label" for="house_with_a_small_yard">HOUSE WITH A SMALL YARD </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="house_with_a_large_yard" name="house_with_a_large_yard" class="custom-control-input">
              <label class="custom-control-label" for="house_with_a_large_yard">HOUSE WITH A LARGE YARD </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="farm" name="farm" class="custom-control-input">
              <label class="custom-control-label" for="farm">FARM </label>
            </div>
            <div class="form-group">
              <div class="section-title">FENCE
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes" name="yes" class="custom-control-input">
              <label class="custom-control-label" for="yes">yes </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no">No </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">CHILDREN
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no">No </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes_under_10" name="yes_under_10" class="custom-control-input">
              <label class="custom-control-label" for="yes_under10">YES (UNDER 10)</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes_over_10" name="yes_over_10" class="custom-control-input">
              <label class="custom-control-label" for="yes_over_10">YES (OVER 10)         </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">ANYONE
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="elder" name="elder" class="custom-control-input">
              <label class="custom-control-label" for="elder">ELDERLY </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="disable" name="disable" class="custom-control-input">
              <label class="custom-control-label" for="disable">DISABLED</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="special_needs" name="special_needs" class="custom-control-input">
              <label class="custom-control-label" for="special_needs"> HAS SPECIAL NEEDS </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="allergic_to_dogs" name="allergic_to_dogs" class="custom-control-input">
              <label class="custom-control-label" for="allergic_to_dogs"> ALLERGIC TO DOGS  </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">OTHER DOGS
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes" name="yes" class="custom-control-input">
              <label class="custom-control-label" for="yes"> Yes </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no">No</label>
            </div>
        
        
            <div class="form-group">
              <div class="section-title">OTHER Cats
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes" name="yes" class="custom-control-input">
              <label class="custom-control-label" for="yes"> Yes </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no">No</label>
            </div>
            <div class="form-group">
              <div class="section-title">LIVING SITUATION FOR YOUR DOG</div>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">  DOG WILL BE LEFT ALONE FOR EXTENDED PERIODS </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">  DOG IS EXPECTED TO BE LEFT ALONE DURING THE DAY  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio3">  DOG WILL BE LEFT ALONE ONLY A FEW HOURS A DAY  </label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio4">  DOG WILL RARELY BE LEFT ALONE  </label>
            </div>
           
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>EMAIL TO SEND RESULTS</label>
                  <input type="text" class="form-control">
                </div>
              </div>
        
            </div>
          
            <button type="submit" class="btn btn-primary">Submit Now</button>
        
        </div>

        <!-- MultiStep Form -->
        {{-- <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2><strong>Sign Up Your User Account</strong></h2>
                        <p>Fill all form field to go to next step</p>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Account</strong></li>
                                        <li id="personal"><strong>Personal</strong></li>
                                        <li id="payment"><strong>Payment</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Account Information</h2>
                                            <input type="email" name="email" placeholder="Email Id"/>
                                            <input type="text" name="uname" placeholder="UserName"/>
                                            <input type="password" name="pwd" placeholder="Password"/>
                                            <input type="password" name="cpwd" placeholder="Confirm Password"/>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next Step"/>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Personal Information</h2>
                                            <input type="text" name="fname" placeholder="First Name"/>
                                            <input type="text" name="lname" placeholder="Last Name"/>
                                            <input type="text" name="phno" placeholder="Contact No."/>
                                            <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        <input type="button" name="next" class="next action-button" value="Next Step"/>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Payment Information</h2>
                                            <div class="radio-group">
                                                <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                                <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                                <br>
                                            </div>
                                            <label class="pay">Card Holder Name*</label>
                                            <input type="text" name="holdername" placeholder=""/>
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="pay">Card Number*</label>
                                                    <input type="text" name="cardno" placeholder=""/>
                                                </div>
                                                <div class="col-3">
                                                    <label class="pay">CVC*</label>
                                                    <input type="password" name="cvcpwd" placeholder="***"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="pay">Expiry Date*</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="list-dt" id="month" name="expmonth">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <select class="list-dt" id="year" name="expyear">
                                                        <option selected>Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Signed Up</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
    </div>
    <div class="col-md-2"></div>
  </div>
</div>









@endsection

@push('styles')
<style>

  .page-style-a {
    height: 439px;
    /* background-position: center; */
    background-repeat: no-repeat;
    background-size: cover;
    /* background: url(../images/pattern/pattern-a.png) repeat center center; */
    background-image: url(http://127.0.0.1:8000/website/images/breed-qustion.jpg);
  }
    /*Background color*/
    #grad1 {
        background-color: : #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA);
    }

    /*form styles*/
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E;
    }

    #msform input, #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px;
    }

    #msform input:focus, #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0;
    }

    /*Blue Buttons*/
    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover, #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover, #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
    }

    /*Dropdown List Exp Date*/
    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px;
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue;
    }

    /*The background card*/
    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f023";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*ProgressBar before any progress*/
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before, #progressbar li.active:after {
        background: skyblue;
    }

    /*Imaged Radio Buttons*/
    .radio-group {
        position: relative;
        margin-bottom: 25px;
    }

    .radio {
        display:inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor:pointer;
        margin: 8px 2px; 
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /*Fit image in bootstrap div*/
    .fit-image{
        width: 100%;
        object-fit: cover;
    }

</style>
@endpush




@push('scripts')
 <script>
    $(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });
 </script>
@endpush
