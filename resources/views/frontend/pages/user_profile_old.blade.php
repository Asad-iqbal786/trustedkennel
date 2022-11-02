
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
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h5>BREED QUESTIONNAIRE</h5>
        <p>ONE OF OUR EXPERTS WILL READ YOUR ANSWERS AND SEND YOU HIS RECOMMENDATIONS OF THE BEST BREEDS FOR YOU.</p>
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
          <div class="form-group">
            <label for="street">street</label>
            <input type="text" class="form-control" name="street" id="street" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="phone">phone </label>
            <input type="number" class="form-control" name="phone" id="phone" placeholder="phone">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="state">state</label>
              <input type="text" class="form-control" name="state" id="state">
            </div>
            
            <div class="form-group col-md-2">
              <label for="inputZip">zip_code</label>
              <input type="text" class="form-control" name="zip_code" id="inputZip">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">family_and_home</label>
              <input type="text" class="form-control" name="family_and_home" id="state">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">residence</label>
              <input type="text" class="form-control" name="residence" id="residence">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">fenced</label>
              <input type="text" class="form-control" name="fenced" id="zip_code">
            </div>
          </div>
          <div class="form-row">
            
            <div class="form-group col-md-4">
              <label for="inputState">house_member</label>
              <input type="text" class="form-control" name="house_member" id="house_member">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">why_you_chose_this_breeds</label>
              <input type="text" class="form-control" name="why_you_chose_this_breeds" id="why_you_chose_this_breeds">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">puppy_experience</label>
              <input type="text" class="form-control" name="puppy_experience" id="puppy_experience">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">many_dogs</label>
              <input type="text" class="form-control" name="many_dogs" id="inputState">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">raised_a_puppy</label>
              <input type="text" class="form-control" name="raised_a_puppy" id="raised_a_puppy">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">surrendered_a_dog</label>
              <input type="text" class="form-control" name="surrendered_a_dog" id="surrendered_a_dog">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">how_you_plan_puppy</label>
              <input type="text" class="form-control" name="how_you_plan_puppy" id="how_you_plan_puppy">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">living_situation_puppy</label>
              <input type="text" class="form-control" name="living_situation_puppy" id="living_situation_puppy">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">puppy_night</label>
              <input type="text" class="form-control" name="puppy_night" id="puppy_night">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">puppy_training</label>
              <input type="text" class="form-control" name="puppy_training" id="puppy_training">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">socialization</label>
              <input type="text" class="form-control" name="socialization" id="socialization">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">plan_new_dog</label>
              <input type="text" class="form-control" name="plan_new_dog" id="plan_new_dog">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">plan_for_anyother_dog</label>
              <input type="text" class="form-control" name="plan_for_anyother_dog" id="plan_for_anyother_dog">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">patience_level</label>
              <input type="text" class="form-control" name="patience_level" id="patience_level">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="state">tell_us_more</label>
              <input type="text" class="form-control" name="tell_us_more" id="tell_us_more">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">color</label>
              <input type="text" class="form-control" name="color" id="color">
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">gender</label>
              <input type="text" class="form-control" name="gender" id="gender">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="state">ideal_time</label>
              <input type="text" class="form-control" name="ideal_time" id="ideal_time">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">signature</label>
              <input type="text" class="form-control" name="signature" id="signature">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="agree" id="agree">
                <label class="form-check-label" for="agree">
                  Agree
                </label>
              </div>
            </div>
          </div>

       
        <button type="submit" class="btn btn-primary">Submit Now</button>
      </form>
  
  
  
    </div>
    <div class="col-md-2"></div>
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

</style>
@endpush




@push('scripts')

@endpush
