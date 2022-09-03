@extends('layout.master')
@section('title')
Contact || Cakeries
@endsection
@section('content')

<!--================End Main Header Area =================-->
<section class="banner_area p_20">
    <div class="container">
        <div class="banner_text">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->

<!--================Contact Form Area =================-->
<section class="contact_form_area p_100">
    <div class="container">
        <div class="main_title">
            <h2>Get In Touch</h2>
            <h6 style="font-family: 'Harmattan', sans-serif;font-size:22px;">Do you have anything in your mind to let us know? Kindly don't delay to connect to us by means of our contact form.</h6>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <form class="row contact_us_form" action="http://designarc.biz/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn order_s_btn form-control">submit now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 offset-md-1">
                <div class="contact_details">
                    <div class="contact_d_item">
                        <h3>Address :</h3>
<<<<<<< HEAD
                        <p style="font-size: 14px;text-align: justify;">Bowling Green Row London</p><br>
=======
                        <p style="font-size: 14px;text-align: justify;">Bowling Green Row Greenwich London</p><br>
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
                        <h3>Phone :</h3>
                        <p style="font-size: 14px;text-align: justify;">07956798250</p><br>
                        <h3>Email</h3>
                        <p style="font-size: 14px;text-align: justify;">
                            enquiries@cakeries.co.uk<br>
                            booking@cakeries.co.uk
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Contact Form Area =================-->

<!--================End Banner Area =================-->
<section class="map_area">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="1340" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Bowling%20Green%20Row%20Greenwich%20London&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://google-map-generator.com">google map generator</a></div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 1340px;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 1340px;
            }
        </style>
    </div>
</section>
<!--================End Banner Area =================-->

@endsection