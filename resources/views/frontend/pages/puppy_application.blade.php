
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
        <h5 class="text-center">PUPPY APPLICATION</h5>
        <div class="form-group">

            <div class="form-group">
                <p> YOUR FAMILY AND HOME  </p>
              <div class="section-title">RESIDENCE
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="elder" name="elder" class="custom-control-input">
              <label class="custom-control-label" for="elder">APARTMENT </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="disable" name="disable" class="custom-control-input">
              <label class="custom-control-label" for="disable">House with Small Yard</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="special_needs" name="special_needs" class="custom-control-input">
              <label class="custom-control-label" for="special_needs"> House with Large Yard </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="allergic_to_dogs" name="allergic_to_dogs" class="custom-control-input">
              <label class="custom-control-label" for="allergic_to_dogs"> Farm </label>
            </div>
        
            <div class="form-group">
              <div class="section-title">FENCE
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="yes_fence" name="yes" class="custom-control-input">
              <label class="custom-control-label" for="yes_fence"> Yes </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="no_fence" name="no" class="custom-control-input">
              <label class="custom-control-label" for="no_fence">No</label>
            </div>


              <div class="form-group">
                <p>HOUSEHOLD MEMBERS  </p>
                <div class="section-title">CHILDREN
                  </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no_member" name="no" class="custom-control-input">
                <label class="custom-control-label" for="no_member">No</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes__under_10" name="yes" class="custom-control-input">
                <label class="custom-control-label" for="yes__under_10"> YES (UNDER 10) </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes_over_10" name="yes" class="custom-control-input">
                <label class="custom-control-label" for="yes_over_10"> YES (OVER 10)         </label>
              </div>

              <div class="form-group">
                <p>   </p>
                <div class="section-title">ANYONE
                  </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no_member" name="special_member" class="custom-control-input">
                <label class="custom-control-label" for="ELDERLY">ELDERLY</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="DISABLED" name="special_member" class="custom-control-input">
                <label class="custom-control-label" for="DISABLED"> DISABLED </label>
              </div>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="HAS SPECIAL NEEDS" name="special_member" class="custom-control-input">
                <label class="custom-control-label" for="HAS SPECIAL NEEDS"> HAS SPECIAL NEEDS</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="HALLERGIC TO DOGS " name="special_member" class="custom-control-input">
                <label class="custom-control-label" for="ALLERGIC TO DOGS ">  ALLERGIC TO DOGS   </label>
              </div>

              <div class="form-group">
                <p>   </p>
                <div class="section-title">OTHER DOGS
                  </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no__other_dog" name="other_dog" class="custom-control-input">
                <label class="custom-control-label" for="no__other_dog">no__other_dog</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes_other_dog" name="other_dog" class="custom-control-input">
                <label class="custom-control-label" for="yes_other_dog"> Yes other dog </label>
              </div>

              <div class="form-group">
                <p>   </p>
                <div class="section-title">OTHER Cats
                  </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no_other_cat" name="other_cat" class="custom-control-input">
                <label class="custom-control-label" for="no_other_cat">no__other_Cat</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes_other_cat" name="other_cat" class="custom-control-input">
                <label class="custom-control-label" for="yes_other_cat"> Yes other dog </label>
              </div>

        
              <div class="form-group">
                <label>PLEASE TELL US ABOUT YOUR PRIOR EXPERIENCE WITH PUPPIES AND DOGS. (FIRST TIME PUPPY FAMILIES ARE WELCOME TO APPLY.)</label>
                
                <textarea name="" id=""  class="form-control" cols="30" rows="5"></textarea>
              </div>


              <div class="form-group">
                <p>   </p>
                <div class="section-title">HOW MANY DOGS HAVE YOU OWNED IN YOUR LIFETIME?   
                  </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="0_only" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="0_only">0</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="1_only" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="1_only">1</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="2_only" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="2_only">2</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="3_only" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="3_only">3</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="4_only" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="4_only">4</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="5_or_more" name="total_dog" class="custom-control-input">
                <label class="custom-control-label" for="5_or_more"> 5 OR MORE </label>
              </div>


              <div class="form-group">
                <p>   </p>
                <div class="section-title">HAVE YOU EVER RAISED A PUPPY? (PLEASE DO NOT INCLUDE YOUR PARENTS RAISING A PUPPY WHEN YOU WERE GROWING UP)      </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no_puppy" name="rised_puppy" class="custom-control-input">
                <label class="custom-control-label" for="no_puppy">No</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes_puppy" name="rised_puppy" class="custom-control-input">
                <label class="custom-control-label" for="yes_puppy">Yes</label>
              </div>


              <div class="form-group">
                <p>   </p>
                <div class="section-title">HAVE YOU EVER SURRENDERED A DOG TO A SHELTER OR RESCUE OR TAKEN ONE BACK TO A BREEDER?       </div>
              </div>
            
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no_surrendered" name="surrendered_dog" class="custom-control-input">
                <label class="custom-control-label" for="no_surrendered">No</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes_surrendered" name="surrendered_dog" class="custom-control-input">
                <label class="custom-control-label" for="yes_surrendered">Yes</label>
              </div>

              <div class="form-group">
                <label>IF YES, PLEASE EXPLAIN</label>
                
                <textarea name="" id=""  class="form-control" cols="30" rows="2"></textarea>
              </div>

              <div class="form-group">
                <p>   PLANS FOR PUPPY </p>
                <div class="form-group">
                    <label>  WHO IN YOUR HOUSEHOLD WILL BE THE PRIMARY CAREGIVER FOR THE PUPPY?  </label>
                    <textarea name="" id=""  class="form-control" cols="30" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label> PLEASE TELL US A LITTLE BIT ABOUT HOW YOU PLAN TO INTEGRATE YOUR NEW PUPPY INTO YOUR FAMILY  </label>
                    <textarea name="" id=""  class="form-control" cols="30" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label> PLEASE DESCRIBE THE LIVING SITUATION FOR THE PUPPY. IS SOMEONE HOME DURING THE DAY AT YOUR HOUSE? HOW MANY HOURS DAILY WOULD THE DOG BE LEFT ALONE? IF NO ONE IS AT HOME DURING THE DAY, WOULD YOU PLAN FOR SOMEONE TO COME INTO YOUR HOME TO LET THE PUPPY IN AND OUT DURING THE POTTY-TRAINING STAGE? (A DOGGY DAYCARE IF RUN PROPERLY, CAN BE AN EXCELLENT CHOICE FOR WORKING NEW PUPPY PARENTS AS WELL ONCE YOUR PUPPY HAS HAD ALL HIS/HER VACCINES.)       </label>
                    <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label> WHERE DO YOU PLAN ON HAVING YOUR PUPPY SPEND THE NIGHT? (PLEASE BE SPECIFIC, E.G., IN A KENNEL IN THE GARAGE, IN A PLAYPEN IN THE KITCHEN, IN A CRATE IN MY BEDROOM, ON THE BED WITH MY KIDS.)           </label>
                    <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
                </div>
              </div>
            

          
              <div class="form-group">
                <p>   WHAT TYPE OF TRAINING WILL YOU AND YOUR PUPPY PARTICIPATE IN?  CHOOSE ALL THAT APPLIES   </p>
                
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="private_lesson" name="traning_type" class="custom-control-input">
                    <label class="custom-control-label" for="private_lesson">PRIVATE LESSONS WITH TRAINER</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="selft_traning" name="traning_type" class="custom-control-input">
                    <label class="custom-control-label" for="selft_traning"> SELF-TRAINING </label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="online_class" name="traning_type" class="custom-control-input">
                    <label class="custom-control-label" for="online_class"> ONLINE CLASSES</label>
                  </div>
              </div>

            <div class="form-group">
                <label> SOCIALIZATION WITH HUMANS AND OTHER DOGS IS CRITICAL TO THE HEALTHY EMOTIONAL DEVELOPMENT OF A PUPPY. HOW DO YOU PLAN TO PROPERLY SOCIALIZE YOUR PUPPY?          </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label> ARE YOU OR ANYONE IN YOUR HOUSEHOLD PLANNING ON GETTING ANOTHER PUPPY DURING THE NEXT YEAR? IF SO, PLEASE PROVIDE DETAILS ON THE BREED, BREEDER, AND GOALS FOR THAT PUPPY.             </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label> PUPPIES OFTEN HAVE A LOT OF ENERGY AND CAN CHEW, DIG, BARK, SOIL THE HOUSE, AND CRY AT NIGHT. THEY CAN PLAY ROUGHLY AND SCRATCH YOUR SKIN WITH TEETH AND NAILS, THEY CAN GET SICK ON FLOORS, FURNITURE, AND IN CARS. PLEASE TELL US YOUR PATIENCE LEVEL AND HOW YOU MIGHT DEAL WITH THE CHALLENGES OF PUPPYHOOD.              </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label> PLEASE TELL US MORE. IS THERE ANYTHING ELSE YOU WOULD LIKE US TO KNOW ABOUT YOU, YOUR FAMILY, OR YOUR LIVING SITUATION THAT RELATES TO HAVING A PUPPY?                </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
            </div>


            <div class="form-group">
                <p>  PREFERENCES   </p>
               
                <div class="form-group">
                    <label> I AM INTERESTED IN THESE COAT COLORS:</label>
                    <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
                </div>

                    <p>  I PREFER </p>
    
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="private_lesson" name="prefer" class="custom-control-input">
                    <label class="custom-control-label" for="private_lesson">MALE</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="selft_traning" name="prefer" class="custom-control-input">
                    <label class="custom-control-label" for="selft_traning"> FEMALE </label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="online_class" name="prefer" class="custom-control-input">
                    <label class="custom-control-label" for="online_class"> EITHER </label>
                  </div>
            </div>

            <div class="form-group">
                <label> WHEN IS YOUR IDEAL TIME TO TAKE A PUPPY HOME? FOR EXAMPLE, SPRING 2023, ONLY DURING THE SUMMER, NOT BEFORE OCTOBER, ETC.                  </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
            </div>


              <div class="form-group">
                <div class="section-title">THE ENERGY LEVEL IN MY HOUSEHOLD IS:      </div>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">  WE ARE A VERY LOW-ENERGY HOUSEHOLD AND NEED A DOG THAT SHOULDN'T BE EXPECTED TO DO OR GET OUT MUCH BEYOND POTTY BREAKS AND THE OCCASIONAL SHORT WALK. </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2"> WE ARE SPORADICALLY ACTIVE AND WANT A DOG THAT IS MORE INTERESTED IN LOUNGING THAN PLAYING.  </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">  WE LEAD A MODERATELY ACTIVE LIFE AND ARE FREQUENTLY BUSY AND WANT A DOG THAT WE CAN DO THINGS WITH ON WEEKENDS.  </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">  WE ARE A VERY ACTIVE HOUSEHOLD AND ALWAYS ON THE GO AND WANT A DOG THAT IS ENERGETIC ENOUGH FOR DAILY PHYSICAL ACTIVITY (THIS INCLUDES FAMILIES WITH KIDS THAT WILL PLAY DAILY WITH THE DOG). </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">  WE ARE ENERGIZER BUNNIES AND NEED A VERY ACTIVE DOG THAT CAN KEEP UP WITH MULTIPLE DAILY ACTIVITIES. </label>
              </div>


              <div class="form-group">
                <div class="section-title"> MY PUPPY IS INTENDED TO BE (SELECT ALL THAT APPLY): </div>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1"> A PET AND A COMPANION </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">  A SERVICE DOG OR ASSISTANCE DOG CANDIDATE (PROVIDES SPECIFIC TASKS FOR ONE INDIVIDUAL).  </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">  EMOTIONAL SUPPORT/PTSD/ANXIETY DOG CANDIDATE (I HAVE A REFERRAL FROM OR AM UNDER THE CARE OF A HEALTH PROFESSIONAL FOR THIS).  </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">   A THERAPY DOG CANDIDATE (PROVIDES COMFORT IN FACILITIES SUCH AS HOSPITALS AND NURSING HOMES FOR A VARIETY OF INDIVIDUALS) </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">  A BREEDING/SHOW DOG </label>
              </div>

              <div class="form-group">
                <label> IF YOU CHECKED ANYTHING OTHER THAN "A PET AND COMPANION" IN THE QUESTION ABOVE, PLEASE ELABORATE ON YOUR NEEDS.           </label>
                <textarea name="" id=""  class="form-control" cols="30" rows="4"></textarea>
             </div>

             <h5>PLEASE READ AND AGREE TO THE FOLLOWING</h5>
             <div class="form-group">
                <p> •	I UNDERSTAND THAT I AM GETTING A PUPPY AND THAT NO MATTER HOW WELL PREPARED AND TRAINED MY PUPPY IS, IT IS STILL A BABY AND I SHOULD EXPECT MY PUPPY TO HAVE ACCIDENTS IN THE HOUSE AND CRATE, TO CRY AND BARK, TO NIP AND BITE, AND TO REQUIRE A GREAT DEAL OF PATIENCE AND ATTENTION. I UNDERSTAND THAT THESE ARE NORMAL PUPPY BEHAVIORS AND THAT I EXPECT THEM TO HAPPEN.</p>
                <p> •	I UNDERSTAND THAT DOGS HAVE GROOMING REQUIREMENTS.</p>
                <p> •	I UNDERSTAND THAT THE EARS OF MY DOG WILL NEED TO BE CLEANED WEEKLY OR MORE IF MY DOG SWIMS OR IS IN A HUMID ENVIRONMENT.</p>
                <p> •	I UNDERSTAND THAT I NEED TO LEARN HOW TO TRAIN AND MAINTAIN MY DOG'S TRAINING AND THAT MAY REQUIRE THE ASSISTANCE OF A DOG TRAINER OR BEHAVIORIST.</p>
                <p> •	
                    I UNDERSTAND THAT WHILE YOU SCREEN YOUR BREEDING DOGS FOR COMMON PROBLEMS AND THAT IT IS EQUALLY IMPORTANT THAT I MAINTAIN MY DOG/PUPPY AT AN IDEAL WEIGHT, PROVIDE QUALITY NUTRITION, DON'T OVER EXERCISE MY PUPPY, AND PROVIDE A SAFE ENVIRONMENT TO DO MY PART IN MAINTAINING MY PUPPY'S HEALTH.
                </p>
                <p> •	<a href="">I HAVE READ AND AGREE TO THE RESERVATION POLICY.</a></p>
                
                
           
             </div>
              
             
             <div class="custom-control custom-checkbox">
                <input type="checkbox" id="agree" name="agree" class="custom-control-input">
                <label class="custom-control-label" for="agree"> I AGREE TO THE TERMS OF MY AGREEMENT </label>
              </div>
             <p>I HAVE ANSWERED THE ABOVE QUESTIONS TRUTHFULLY AND UNDERSTAND THAT IF ANY FALSE STATEMENTS HAVE BEEN GIVEN, TRUSTED KENNELS RESERVES THE RIGHT TO REFUSE TO SELL A PUPPY TO ME AND MY RESERVATION FEE IS FORFEITED. 
                BY ENTERING MY NAME IN THIS TEXTBOX, I AGREE THAT THE SIGNATURE IS THE LEGAL EQUIVALENT OF MY MANUAL SIGNATURE.
                </p>

             <div class="form-group">
                <p>PLEASE READ AND AGREE TO THE FOLLOWING</p>
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
