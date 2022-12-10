<?php

use App\Models\Product;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
<div class="row gutters-10">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">PUPPY APPLICATION</h6>
            </div>
            <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <p> YOUR FAMILY AND HOME </p>
                            <div class="section-title">RESIDENCE
                            </div>
                        </div> 
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="elder" name="home_style"
                                class="custom-control-input" value="{{ old('appartment', $aplicaton['home_style']) }}" >
                            <label class="custom-control-label" for="elder">APARTMENT </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="disable" name="home_style"
                                value="house_with_small_yard" class="custom-control-input">
                            <label class="custom-control-label" for="disable">House with Small
                                Yard</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inlineh">
                            <input type="radio" id="special_needs" name="home_style"
                                value="house_with_large_yard" class="custom-control-input">
                            <label class="custom-control-label" for="special_needs"> House with
                                Large
                                Yard
                            </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="allergic_to_dogs" name="home_style" value="farm"
                                class="custom-control-input">
                            <label class="custom-control-label" for="allergic_to_dogs"> Farm
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="section-title">FENCE
                            </div>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_fence" name="fence" value="yes_fence"
                                class="custom-control-input">
                            <label class="custom-control-label" for="yes_fence"> Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no_fence" name="fence"value="no_fence"
                                class="custom-control-input">
                            <label class="custom-control-label" for="no_fence">No</label>
                        </div>


                        <div class="form-group">
                            <p>HOUSEHOLD MEMBERS </p>
                            <div class="section-title">CHILDREN
                            </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no_member" name="house_members" value="no_member"
                                class="custom-control-input">
                            <label class="custom-control-label" for="no_member">No</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes__under_10" name="house_members"
                                value="yes__under_10" class="custom-control-input">
                            <label class="custom-control-label" for="yes__under_10"> YES (UNDER
                                10)
                            </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_over_10" name="house_members"
                                value="yes_over_10" class="custom-control-input">
                            <label class="custom-control-label" for="yes_over_10"> YES (OVER 10)
                            </label>
                        </div>

                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">ANYONE
                            </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ELDERLY" name="special_member"
                                value="ELDERLY" class="custom-control-input">
                            <label class="custom-control-label" for="ELDERLY">ELDERLY</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="DISABLED" name="special_member"
                                value="DISABLED" class="custom-control-input">
                            <label class="custom-control-label" for="DISABLED"> DISABLED </label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="HAS SPECIAL NEEDS" name="special_member"
                                value="HAS SPECIAL NEEDS" class="custom-control-input">
                            <label class="custom-control-label" for="HAS SPECIAL NEEDS"> HAS
                                SPECIAL
                                NEEDS</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="HALLERGIC TO DOGS" name="special_member"
                                value="HALLERGIC TO DOGS" class="custom-control-input">
                            <label class="custom-control-label" for="HALLERGIC TO DOGS"> ALLERGIC
                                TO
                                DOGS
                            </label>
                        </div>

                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">OTHER DOGS
                            </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no__other_dog" name="other_dog"
                                value="no__other_dog" class="custom-control-input">
                            <label class="custom-control-label"
                                for="no__other_dog">no__other_dog</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_other_dog" name="other_dog"
                                value="yes_other_dog" class="custom-control-input">
                            <label class="custom-control-label" for="yes_other_dog"> Yes other dog
                            </label>
                        </div>

                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">OTHER Cats
                            </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no_other_cat" name="other_cat"
                                value="no_other_cat" class="custom-control-input">
                            <label class="custom-control-label"
                                for="no_other_cat">no__other_Cat</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_other_cat" name="other_cat"
                                value="yes_other_cat" class="custom-control-input">
                            <label class="custom-control-label" for="yes_other_cat"> Yes other dog
                            </label>
                        </div>


                        <div class="form-group">
                            <label>PLEASE TELL US ABOUT YOUR PRIOR EXPERIENCE WITH PUPPIES AND DOGS.
                                (FIRST
                                TIME PUPPY FAMILIES ARE WELCOME TO APPLY.)</label>
                    

                            <textarea name="previous_expierience" id="summernote" class="form-control summernote" cols="30" rows="5">
                               
                                @if (empty($applications['previous_expierience']))
                                
                                @else
                                    {{ $applications['previous_expierience'] }}
                                @endif

                            </textarea>
                        </div>


                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">HOW MANY DOGS HAVE YOU OWNED IN YOUR
                                LIFETIME?
                            </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="0_only" name="total_dog" value="0_only"
                                class="custom-control-input">
                            <label class="custom-control-label" for="0_only">0</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="1_only" name="total_dog" value="1_only"
                                class="custom-control-input">
                            <label class="custom-control-label" for="1_only">1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="2_only" name="total_dog" value="2_only"
                                class="custom-control-input">
                            <label class="custom-control-label" for="2_only">2</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="3_only" name="total_dog" value="3_only"
                                class="custom-control-input">
                            <label class="custom-control-label" for="3_only">3</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="4_only" name="total_dog" value="4_only"
                                class="custom-control-input">
                            <label class="custom-control-label" for="4_only">4</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="5_or_more" name="total_dog" value="5_or_more"
                                class="custom-control-input">
                            <label class="custom-control-label" for="5_or_more"> 5 OR MORE
                            </label>
                        </div>


                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">HAVE YOU EVER RAISED A PUPPY? (PLEASE DO NOT
                                INCLUDE
                                YOUR PARENTS RAISING A PUPPY WHEN YOU WERE GROWING UP) </div>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no_puppy" name="rised_puppy" value="no_puppy"
                                class="custom-control-input">
                            <label class="custom-control-label" for="no_puppy">No</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_puppy" name="rised_puppy"
                                value="yes_puppy" class="custom-control-input">
                            <label class="custom-control-label" for="yes_puppy">Yes</label>
                        </div>
                        <div class="form-group">
                            <p> </p>
                            <div class="section-title">HAVE YOU EVER SURRENDERED A DOG TO A SHELTER
                                OR
                                RESCUE OR TAKEN ONE BACK TO A BREEDER? </div>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no_surrendered" name="surrendered_dog"
                                value="no_surrendered" class="custom-control-input show_hide">
                            <label class="custom-control-label" for="no_surrendered">No</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="yes_surrendered" name="surrendered_dog"
                                value="yes_surrendered" class="custom-control-input show_hide">
                            <label class="custom-control-label" for="yes_surrendered">Yes</label>
                        </div>
                        <div class="form-group" style="display: none;" id="if_yes">

                            <label>IF YES, PLEASE EXPLAIN</label>
                            <textarea type="text" name="surrendered_dog" placeholder="if_yes" value="" class="form-control summernote"
                                cols="30" rows="2">  </textarea>
                        </div>
                        <div class="form-group">
                            <p> PLANS FOR PUPPY </p>
                            <div class="form-group">
                                <label> WHO IN YOUR HOUSEHOLD WILL BE THE PRIMARY CAREGIVER FOR THE
                                    PUPPY?
                                </label>
                                <textarea name="plan_for_other_puppy" id="summernote" class="form-control summernote" cols="30" rows="2">

                                        @if (!empty($applications['plan_for_other_puppy']))
                                        {{ $applications['plan_for_other_puppy'] }}
                                        @else
                                        @endif
                                       
                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label> PLEASE TELL US A LITTLE BIT ABOUT HOW YOU PLAN TO INTEGRATE
                                    YOUR
                                    NEW
                                    PUPPY INTO YOUR FAMILY </label>
                                <textarea name="how_to_integrate" id="" class="form-control summernote" cols="30" rows="2">

                                    @if (empty($applications['how_to_integrate']))
                                    @else
                                        {{ $applications['how_to_integrate'] }}
                                    @endif
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label> PLEASE DESCRIBE THE LIVING SITUATION FOR THE PUPPY. IS
                                    SOMEONE
                                    HOME
                                    DURING THE DAY AT YOUR HOUSE? HOW MANY HOURS DAILY WOULD THE DOG
                                    BE
                                    LEFT
                                    ALONE? IF NO ONE IS AT HOME DURING THE DAY, WOULD YOU PLAN FOR
                                    SOMEONE
                                    TO COME INTO YOUR HOME TO LET THE PUPPY IN AND OUT DURING THE
                                    POTTY-TRAINING STAGE? (A DOGGY DAYCARE IF RUN PROPERLY, CAN BE
                                    AN
                                    EXCELLENT CHOICE FOR WORKING NEW PUPPY PARENTS AS WELL ONCE YOUR
                                    PUPPY
                                    HAS HAD ALL HIS/HER VACCINES.) </label>
                                <textarea name="descrbe_living_secuation" id="" class="form-control summernote" cols="30" rows="4">

                                    @if (empty($applications['descrbe_living_secuation']))
                                    @else
                                        {{ $applications['descrbe_living_secuation'] }}
                                    @endif
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label> WHERE DO YOU PLAN ON HAVING YOUR PUPPY SPEND THE NIGHT?
                                    (PLEASE
                                    BE
                                    SPECIFIC, E.G., IN A KENNEL IN THE GARAGE, IN A PLAYPEN IN THE
                                    KITCHEN,
                                    IN A CRATE IN MY BEDROOM, ON THE BED WITH MY KIDS.) </label>
                                <textarea name="puppu_spent_night" id="" class="form-control summernote" cols="30" rows="4">

                                    @if (empty($applications['puppu_spent_night']))
                                    @else
                                        {{ $applications['puppu_spent_night'] }}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <p> WHAT TYPE OF TRAINING WILL YOU AND YOUR PUPPY PARTICIPATE IN? CHOOSE
                                ALL
                                THAT APPLIES </p>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="private_lesson" name="traning_type"
                                    value="private_lesson" class="custom-control-input">
                                <label class="custom-control-label" for="private_lesson">PRIVATE
                                    LESSONS
                                    WITH TRAINER</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="selft_traning" name="traning_type"
                                    value="selft_traning" class="custom-control-input">
                                <label class="custom-control-label" for="selft_traning">
                                    SELF-TRAINING
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="online_class" name="traning_type"
                                    value="online_class" class="custom-control-input">
                                <label class="custom-control-label" for="online_class"> ONLINE
                                    CLASSES</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> SOCIALIZATION WITH HUMANS AND OTHER DOGS IS CRITICAL TO THE
                                HEALTHY
                                EMOTIONAL DEVELOPMENT OF A PUPPY. HOW DO YOU PLAN TO PROPERLY
                                SOCIALIZE
                                YOUR
                                PUPPY? </label>
                            <textarea name="socialization" id="" class="form-control summernote" cols="30" rows="4">

                                @if (empty($applications['socialization']))
                                @else
                                    {{ $applications['socialization'] }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label> ARE YOU OR ANYONE IN YOUR HOUSEHOLD PLANNING ON GETTING ANOTHER
                                PUPPY
                                DURING THE NEXT YEAR? IF SO, PLEASE PROVIDE DETAILS ON THE BREED,
                                BREEDER,
                                AND GOALS FOR THAT PUPPY. </label>
                            <textarea name="planning_another_puppy" id="" class="form-control summernote" cols="30" rows="4">
                                @if (empty($applications['planning_another_puppy']))
                                @else
                                    {{ $applications['planning_another_puppy'] }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label> PUPPIES OFTEN HAVE A LOT OF ENERGY AND CAN CHEW, DIG, BARK, SOIL
                                THE
                                HOUSE, AND CRY AT NIGHT. THEY CAN PLAY ROUGHLY AND SCRATCH YOUR SKIN
                                WITH
                                TEETH AND NAILS, THEY CAN GET SICK ON FLOORS, FURNITURE, AND IN
                                CARS.
                                PLEASE
                                TELL US YOUR PATIENCE LEVEL AND HOW YOU MIGHT DEAL WITH THE
                                CHALLENGES
                                OF
                                PUPPYHOOD. </label>
                            <textarea name="puppies_often_have" id="" class="form-control summernote" cols="30" rows="4">
                                @if (empty($applications['puppies_often_have']))
                                @else
                                    {{ $applications['puppies_often_have'] }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label> PLEASE TELL US MORE. IS THERE ANYTHING ELSE YOU WOULD LIKE US TO
                                KNOW
                                ABOUT YOU, YOUR FAMILY, OR YOUR LIVING SITUATION THAT RELATES TO
                                HAVING
                                A
                                PUPPY? </label>
                            <textarea name="please_tell_use_more" id="" class="form-control summernote" cols="30" rows="4">
                                @if (empty($applications['please_tell_use_more']))
                                @else
                                    {{ $applications['please_tell_use_more'] }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <p> PREFERENCES </p>
                            <div class="form-group">
                                <label> I AM INTERESTED IN THESE COAT COLORS:</label>
                                <textarea name="coat_color" id="" class="form-control summernote" cols="30" rows="4">
                                    @if (empty($applications['coat_color']))
                                    @else
                                        {{ $applications['coat_color'] }}
                                    @endif
                                </textarea>
                            </div>
                            <p> I PREFER </p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="male" name="prefer" value="male"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="male">MALE</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="femail" name="prefer" value="femail"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="femail"> FEMALE
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="either" name="prefer" value="either"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="either"> EITHER
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> WHEN IS YOUR IDEAL TIME TO TAKE A PUPPY HOME? FOR EXAMPLE,
                                SPRING
                                2023,
                                ONLY DURING THE SUMMER, NOT BEFORE OCTOBER, ETC. </label>
                            <textarea name="when_you_ideal" id="" class="form-control summernote" cols="30" rows="4">
                                @if (empty($applications['when_you_ideal']))
                                @else
                                    {{ $applications['when_you_ideal'] }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <div class="section-title">THE ENERGY LEVEL IN MY HOUSEHOLD IS: </div>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="low_energy_house" name="energy_level"
                                value="low_energy_house" class="custom-control-input">
                            <label class="custom-control-label" for="low_energy_house"> WE ARE A
                                VERY
                                LOW-ENERGY HOUSEHOLD AND NEED A DOG THAT SHOULDN'T BE EXPECTED TO DO
                                OR
                                GET
                                OUT MUCH BEYOND POTTY BREAKS AND THE OCCASIONAL SHORT WALK. </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="we_are_sporadically" name="energy_level"
                                value="we_are_sporadically" class="custom-control-input">
                            <label class="custom-control-label" for="we_are_sporadically"> WE ARE
                                SPORADICALLY
                                ACTIVE AND WANT A DOG THAT IS MORE INTERESTED IN LOUNGING THAN
                                PLAYING.
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="we_are_moderately" name="energy_level"
                                value="we_are_moderately" class="custom-control-input">
                            <label class="custom-control-label" for="we_are_moderately"> WE LEAD A
                                MODERATELY
                                ACTIVE LIFE AND ARE FREQUENTLY BUSY AND WANT A DOG THAT WE CAN DO
                                THINGS
                                WITH ON WEEKENDS. </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="very_active" name="energy_level"
                                value="very_active" class="custom-control-input">
                            <label class="custom-control-label" for="very_active"> WE ARE A VERY
                                ACTIVE
                                HOUSEHOLD AND ALWAYS ON THE GO AND WANT A DOG THAT IS ENERGETIC
                                ENOUGH
                                FOR
                                DAILY PHYSICAL ACTIVITY (THIS INCLUDES FAMILIES WITH KIDS THAT WILL
                                PLAY
                                DAILY WITH THE DOG). </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="we_are_energizer" name="energy_level"
                                value="we_are_energizer" class="custom-control-input">
                            <label class="custom-control-label" for="we_are_energizer"> WE ARE
                                ENERGIZER
                                BUNNIES AND NEED A VERY ACTIVE DOG THAT CAN KEEP UP WITH MULTIPLE
                                DAILY
                                ACTIVITIES. </label>
                        </div>
                        <div class="form-group">
                            <div class="section-title"> MY PUPPY IS INTENDED TO BE (SELECT ALL THAT
                                APPLY):
                            </div>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="a_pet_and-a" name="puppy_intended"
                                value="a_pet_and-a" class="custom-control-input">
                            <label class="custom-control-label" for="a_pet_and-a"> A PET AND A
                                COMPANION
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="a_service" name="puppy_intended"
                                value="a_service" class="custom-control-input">
                            <label class="custom-control-label" for="a_service"> A SERVICE DOG OR
                                ASSISTANCE DOG CANDIDATE (PROVIDES SPECIFIC TASKS FOR ONE
                                INDIVIDUAL).
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="emotional_spot" name="puppy_intended"
                                value="emotional_spot" class="custom-control-input">
                            <label class="custom-control-label" for="emotional_spot"> EMOTIONAL
                                SUPPORT/PTSD/ANXIETY DOG CANDIDATE (I HAVE A REFERRAL FROM OR AM
                                UNDER
                                THE
                                CARE OF A HEALTH PROFESSIONAL FOR THIS). </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="therapy_dog" name="puppy_intended"
                                value="therapy_dog" class="custom-control-input">
                            <label class="custom-control-label" for="therapy_dog"> A THERAPY DOG
                                CANDIDATE (PROVIDES COMFORT IN FACILITIES SUCH AS HOSPITALS AND
                                NURSING
                                HOMES FOR A VARIETY OF INDIVIDUALS) </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="show_dog" name="puppy_intended"
                                value="show_dog" class="custom-control-input">
                            <label class="custom-control-label" for="show_dog"> A BREEDING/SHOW
                                DOG
                            </label>
                        </div>
                        <div class="form-group">
                            <label> IF YOU CHECKED ANYTHING OTHER THAN "A PET AND COMPANION" IN THE
                                QUESTION
                                ABOVE, PLEASE ELABORATE ON YOUR NEEDS. </label>
                            <textarea name="if_you_checked" id="" class="form-control summernote" cols="30" rows="4">
                                @if (empty($applications['if_you_checked']))
                                @else
                                    {{ $applications['if_you_checked'] }}
                                @endif
                            </textarea>
                        </div>

                        <div class="form-co">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="termssnad-conditions" name="agree"
                                    value="termssnad-conditions" class="custom-control-input">
                                <label class="custom-control-label" for="termssnad-conditions"> <a href="{{route('termsAndConditions')}}" target="_blank">
                                    PLEASE READ AND AGREE TO THE FOLLOWING
                                </a>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="email"
                                        @if (!empty($applications['email'])) value="{{ $applications['email'] }}" @else value="{{ old('email') }}" @endif
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

</div>
@endsection





@push('scripts')
    <script>
        // admin status
        $(".updateProductStatus").click(function() {
            var status = $(this).text();
            var product_id = $(this).attr("product_id");
            // alert(status);
            $.ajax({
                type: 'post',
                url: '/admin/update-product-status',
                data: {
                    status: status,
                    product_id: product_id
                },
                success: function(resp) {

                    if (resp['status'] == 0) {
                        $("#product-" + product_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-outline'><p style='display:none;'> Inactive</p></i>"
                        );
                    } else if (resp['status'] == 1) {
                        $("#product-" + product_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-check'> <p style='display:none;'> Active</p> </i>"
                        );
                    }

                },
                error: function() {
                    alert("Error");
                }
            })

        });

        // show courier name and Teracking Number
        $("#courier_name").hide();
        $("#tracking_number").hide();
        $("#shipping_chargges").hide();
        $("#reservation_charges").hide();
        //order status
        $("#order_status").on("change", function() {
            if (this.value == "Shipped") {
                $("#courier_name").show();
                $("#tracking_number").show();
            } else {
                $("#courier_name").hide();
                $("#tracking_number").hide();
            }
        });
        //add shipping carges
        $("#order_status").on("change", function() {
            if (this.value == "Processing") {
                $("#shipping_chargges").show();
            } else {
                $("#shipping_chargges").hide();
            }
        });
        //add reservation carges
        $("#order_status").on("change", function() {
            if (this.value == "reservation_booked") {
                $("#reservation_charges").show();
            } else {
                $("#reservation_charges").hide();
            }
        });
    </script>
@endpush
