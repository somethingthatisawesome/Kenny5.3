@extends('layouts.master')

@section('title', 'Dự án')

@section('menu')
@parent
@endsection

@section('content')
<div class="w-container">
   <div class="w-row">
      <div class="column-different w-col w-col-4">
         <div class="left-gray"></div>
         <div class="left-more-padding">
            <div class="in-services top-margin">
               <h4 data-ix="show-go-top-on-scroll">Services Categories</h4>
            </div>
            <div class="top-margin">
               <div class="w-dyn-list">
                  <div class="w-dyn-items">
                     <div class="w-dyn-item">
                        <a class="services-name w-inline-block" href="/services/worldwide-support">
                           <div>Construction</div>
                        </a>
                     </div>
                     <div class="w-dyn-item">
                        <a class="services-name w-inline-block" href="/services/nostrum-numquam">
                           <div>Rooms &amp; Halls</div>
                        </a>
                     </div>
                     <div class="w-dyn-item">
                        <a class="services-name w-inline-block" href="/services/aut-qui-illo">
                           <div>Basements</div>
                        </a>
                     </div>
                     <div class="w-dyn-item">
                        <a class="services-name w-inline-block" href="/services/eligendi-ut-voluptas">
                           <div>Consulting</div>
                        </a>
                     </div>
                     <div class="w-dyn-item">
                        <a class="services-name w-inline-block" href="/services/enim-ut">
                           <div>Management</div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="more top-margin">
               <h4>Useful Links</h4>
            </div>
            <div class="top-margin">
               <a class="services-name w-inline-block" href="/homepages/homepage-style-1">
                  <div>Home</div>
               </a>
               <a class="services-name w-inline-block" href="/about/about-style-1">
                  <div>About</div>
               </a>
               <a class="services-name w-inline-block" href="/projects/project-style-1">
                  <div>Projects</div>
               </a>
               <a class="services-name w-inline-block" href="/contact/contact-style-1">
                  <div>Contact</div>
               </a>
            </div>
            <div class="top-margin"><a class="button-icon envelope w-button" data-ix="show-contact-wrapper-on-click" href="#" style="transition: all 0.4s ease 0s;">Send A Quote</a></div>
         </div>
      </div>
      <div class="column-different w-col w-col-8">
         <div class="in-services top-margin">
            <div class="right-padding">
               <img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9c_serv-2.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9c_serv-2-p-500x334.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9c_serv-2-p-800x534.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9c_serv-2.jpg 1024w">
               <div class="top-margin">
                  <h2>Floors &amp; Roofs</h2>
               </div>
               <div class="top-margin">
                  <div class="w-richtext">
                     <p>Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Phasellus a est. Aliquam lobortis. Vivamus laoreet. Vestibulum suscipit nulla quis orci.</p>
                     <p>Proin faucibus arcu quis ante. Etiam rhoncus. Etiam sit amet orci eget eros faucibus tincidunt. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Etiam feugiat lorem non metus.</p>
                     <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dictum felis eu pede mollis pretium.</p>
                     <p>Ut tincidunt tincidunt erat. Fusce convallis metus id felis luctus adipiscing. Vivamus quis mi. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Donec vitae orci sed dolor rutrum auctor.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('footer')
    @parent
@endsection