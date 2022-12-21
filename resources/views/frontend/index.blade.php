@extends('frontend.layout')
@section('content')
{{-- Header part start  --}}
<div class="mainnav ">
    <div class="bar_set  ">
       <span class="menu_line"></span>
       <span class="menu_line_tow mt-2"></span>
       <span class="menu_line_three mt-2"></span>
    </div>
    
</div>
</div>

{{-- Header part end --}}
{{-- Banner part start  --}}
<div class="banner"  style="background: url({{ asset('uploads/images/banner.jpg') }})">
    <div class="header_part d-flex justify-content-end ">
        <div class="header_btn_part d-flex justify-content-end ">
           <div class="header_btn me-2">
                <a href="" onchange="change()" > Broker Connect <i class="fa-solid fa-up-right-from-square"></i></a>
           </div>
           <div class="header_btn">
                <a href="">Appraiser Connect <i class="fa-solid fa-up-right-from-square"></i></a>
           </div>
        </div>
      </div>
      <div class="logo">
        <img src="{{ asset('uploads/images/logo.png') }}" alt="mainlogo" class="img-fluid">
     </div>
    <div class="banner_description d-flex justify-content-end">
       <div class="banner_text">
        <h3>FNF Canada is a comprehensive and innovative provider of mortgage and loan related services to Canadian financial institutions and their clients.</h3>
        <div class="banner_text_btn">
            <a href=""><i class="fa-solid fa-arrow-down me-2"></i>Discover how yor can benefit</a>
         </div>
       </div> 
    </div>
</div>
{{-- Banner part end  --}}
{{-- Footer part start  --}}
<div class="footer">
    <div class="container ">
        <div class="row pb-5 footer_bottom">
            <div class="col-lg-6">
                 <div class="footer_top d-flex ">
                    <h6 class="me-4">Francals</h6>
                    <h6 class="me-4">Francals</h6>
                    <h6 class="me-4">Text</h6>
                    <div class="footer_text_plus_minus">
                     <a href="" class="me-2"><i class="fa-solid fa-minus "></i></a>
                     <a href=""><i class="fa-solid fa-plus"></i></a>
                    </div>
                 </div>
            </div>
            <div class="col-lg-6">
               <div class="foote_social_link d-flex  justify-content-end">
                <a href="" ><i class="fa-brands fa-twitter"></i></a>
                <a href="" ><i class="fa-brands fa-linkedin-in"></i></a>

               </div>
            </div>
        </div>
        <div class="row  mt-5 ">
            <div class="col-lg-4">
                <div class="footer_logo">
                    <img src="{{ asset('uploads/images/logo.png') }}" alt="mainlogo" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer_text_part">
                    <h3>OUR SOLUTIONS</h3>
                    <h5>Our Products</h5>
                    <h5>Technology</h5>
                    <h5>Services</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer_text_part">
                    <h3>OUR STORY</h3>
                    <h5>About FNF</h5>
                    <h5>Our Brand Story</h5>
                    <h5>Our Executive Team</h5>
                    <h5>Career Opportunities</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer_text_part">
                    <h3>FNF NEWS</h3>
                    <h5>News & Events</h5>
                  
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer_text_part">
                    <h3>CONTACT</h3>
                    <h5>Contact Us</h5>    
                </div>
            </div>
            
        </div>
        <div class="row mt-5 ">
            <div class="col-lg-12">
               <div class="footer_client  d-flex">
                <div class="client">
                    <img src="{{ asset('uploads/images/cli.png') }}" alt="" class="mt-3">
                </div>
                <div class="client">
                    <img src="{{ asset('uploads/images/client.png') }}" alt="">
                </div>
               </div>
            </div>
        </div>
        <div class="row last_footer_border">
            <div class="col-lg-6">
                <div class="footer_last_text">
                    <p>Copyright © 2022FNF Canada. All rights reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <div class="footer_last_text">
                    <a href="">California Privacy Policy</a> | <a href="">FNF Privacy Statement</a> | <a href="">Accessibility</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Footer part end  --}}

@section('footer_script')
<script>
    window.scrollBy
$(window).scroll(function() {
    let vanish = document.querySelectorAll('header_btn')
     vanish.style.display = "none";
});
function change(){
    window.scrollBy(100, 100);
    style.display = 
}





</script>
  

@endsection


















@endsection
