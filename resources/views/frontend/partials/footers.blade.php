
      <footer class="section footer">
        <div class="footer-top">
          <div class="container">
            <div class="row row-30 row-lg-50">
             
              <div class="col-xl-4 col-md-3 col-sm-6 col-6 wow slideInUp" data-wow-delay=".3s">
                <h5 class="footer-title"> QUICK LINKS </h5>
                <ul class="footer-list">
                  <li><a href="#">FIND A PUPPY</a></li>
                  <li><a href="#">FIND A KENNEL</a></li>
                  <li><a href="#">SERVICES</a></li>
                  <li><a href="#">BREED </a></li>
                  <li><a href="#">QUESTIONNAIRE</a></li>
                  <li>

                    @auth
                      <li><a href="{{route('userIndex')}}">User Dashboard</a></li>
                      <li><a href="{{route('addEditApplication')}}">Application</a></li>
                      <li><a href="{{route('logout')}}">User Logout</a></li>
                    @endauth

                    @guest

                      <li><a href="{{route('login')}}">CUSTOMER Login</a></li>
                    
                    @endguest
                    
                  <li>
                    @if(Auth::guard('admin')->check())
                      <li><a href="{{route('vendorDashboard')}}">kennel Dashboard</a></li>
                      <li><a href="{{route('logoutvendor')}}">Logout</a></li>
                      <a class="dropdown-item" href="{{route('logoutvendor')}}">kennel </a>
                    @else
                      <li><a href="{{route('loginPage')}}">kennel Login</a></li>
                    @endif
                    
                </ul>
              </div>
              <div class="col-xl-4 col-md-3 col-sm-6 col-6 wow slideInUp" data-wow-delay=".9s">
                <h5 class="footer-title">ABOUT</h5>
                <ul class="footer-list">
                  <li><a href="#">OUR STORY</a></li>
                  <li><a href="#">WHY CHOOSE US</a></li>
                  <li><a href="#"> News </a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">POLICIES</a></li>
                </ul>
              </div>
             
              <div class="col-xl-4 col-md-3 wow slideInUp" data-wow-delay=".6s">
                <h5 class="footer-title">  CONTACT US  </h5>
                <ul class="footer-list">
                 
                  <li class="unit align-items-center unit-spacing-xs">
                    <div class="unit-left">
                    </div>
                    <div class="unit-body"><a href="mailto:#">Get In touch</a></div>
                  </li>
                  <li class="unit align-items-center unit-spacing-xs">
                    <div class="unit-left">
                    </div>
                    <div class="unit-body"><a href="mailto:#">E-mail: INFO@TRUSTEDKENNELS.COM</a></div>
                  </li>

                  <div class = "social-links "  style="padding-left: 13px;">
                    <a href = "#">
                        <img src="{{asset('website/images/fb.png')}}" alt="" style="width:23px">
                    </a>
                    <a href = "#">
                        <img src="{{asset('website/images/inst.png')}}" alt="" style="width:23px">
                    </a>
                  
                    <a href = "#">
                        <img src="{{asset('website/images/tw.png')}}" alt="" style="width:23px">
                    </a>
                  </div>	

                </ul>
              </div>
              {{-- <div class="col-xl-4 col-md-3 wow slideInUp" data-wow-delay=".6s">
                <!-- Google Map-->
                <!-- Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
                <!-- Please note that YOUR_API_KEY should replaced with your key.-->
                <!-- Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->



                  <div class="google-map-container">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d715378.9761050872!2d-73.8123572!3d45.54129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C%20QC%2C%20Canada!5e0!3m2!1sen!2s!4v1663660603861!5m2!1sen!2s" width="1440" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
                  </div>
                <div class="google-map-container"   data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                  <div class="google-map"></div>
                  <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                  </ul>
                </div>

              </div> --}}
            </div>
          </div>
        </div>
       


        <div class="footer-bottom text-center">
          <div class="container">
            <p class="rights"><span>Dog Training Center</span>
              {{-- <p>Copyright © 2022 <a href="" target="_blank">webguro.com</a>  -  All Rights Reserved.</p> --}}
              <span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span>
              <a href="privacy-policy.html">Privacy Policy</a>. Develop&nbsp;by&nbsp;<a href="https://www.fiverr.com/desiner21">Asad iqbal</a></p>
          </div>
        </div>
      </footer>