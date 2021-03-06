<?php /* Template Name: HomePageLayout */ ?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
        <div id="top" class="body-container-wrapper row clearfix home-page-body">
            <div class="container-wrapper row container-wrapper-crousel">
                <div id="myCarousel" data-ride="carousel" class="carousel slide">
                    <!-- Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides-->
                    <div role="listbox" class="carousel-inner">
                        <div class="item active"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner1.png" alt="Oracle WebCenter Sites">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:white;font-family: 'PT Sans', sans-serif;" class="content-heading">Training Programs</div>
                                    <h4 style="color:white;font-family: 'Raleway', sans-serif;"><br><br>Best in class employee enablement and<br><br>training programs.</h4><br><br><br>
                              <div  class="content-button"><input type="button" value="Read More"  onClick="window.location='#sec1';" ></div>
                            </div>
                        </div>
                        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner2.png" alt="Oracle WebCenter Sites">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:white;font-family: 'PT Sans', sans-serif;" class="content-heading">Project Support</div>
		<h4 style="color:white; font-family: 'Raleway', sans-serif;"><br><br>Highly efficient support services which<br><br>help in delivering the projects on time.</h4><br><br><br>
                               <div class="content-button"><input type="button" value="Read More" onClick="window.location='http://365onlinetraining.com/project-consultancy/';"></div>
                            </div>
                        </div>
						<div class="item"><img src="<?php bloginfo('template_directory'); ?>/images-new/banner3.png" alt="Oracle WebCenter Sites">
                            <div class="carousel-content col-sm-5 col-md-5">
                                <div style="color:white;font-family: 'PT Sans', sans-serif;" class="content-heading">Pay - Per - Topic</div>
		<h4 style="color:white; font-family: 'Raleway', sans-serif;"><br><br>Already Experienced ? Want to upgrade your knowledge ?<br><br>Now don’t pay for full training. Pay per Topic !</h4><br><br><br>
                               <div class="content-button"><input type="button" value="Read More" onClick="window.location='#sec3';"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div id="sec3" class="smoothScroll">
<div id="sec1" class="smoothScroll">
        <div class="container-wrapper row" style="background-color:#e6e6e6;margin-top:0px;">
            <div class="container-left col-xs-12 col-md-12 column">
                <div class="courses-wrapper">
                    <div class="col-xs-12">
<br>
                        <h3  style="color:#262626; font-family: 'PT Sans', sans-serif;" class="content-heading text-center">Training <strong style="color:#4ba2dc">Programs</strong></h3>
<hr style="border : 0;height: 1px; width:50%;letter-spacing:px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<br></div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
             
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Oracle WebCenter Sites Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(2);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-sites-online-training/"><strong>Learn More</strong></a>
 </div>
		 
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
                               
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Oracle WebCenter Content Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(2);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-content-training/"><strong>Learn More</strong></a></div>
							
                        </div>
                    </div>
					<div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot01.jpg" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
             
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Oracle WebCenter Portal Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(3);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><strong>Learn More</strong></a>
 </div>
		 
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot03.png" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
                              
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Oracle MAF Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(3);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-mobile-application-framework-training-maf/"><strong>Learn More</strong></a></div>
							
                        </div>
                    </div>
                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot04.png" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
                     
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Oracle ATG Web Commerce Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(4);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-atg-training/"><strong>Learn More</strong></a></div>
							
                        </div>
                    </div>
                  
                   <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot07.jpg" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
                               
                            </div>
                            <div ><h5 style="font-family: 'Raleway', sans-serif;">Angular JS Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(4);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/angular-js-online-course/"><strong>Learn More</strong></a></div>
							
                        </div>
                    </div>

                    <div class="container-details col-xs-6 col-sm-3">
                        <div class="clearfix training-det-wrap">
                            <div class="container-dd-wrapper">
                                <div class="training-image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/shot06.jpg" style="opacity:1.0" alt="Oracle WebCenter Sites"></div>
                            
                            </div>
                            <div><h5 style="font-family: 'Raleway', sans-serif;">Oracle ADF Training</h5><i class="fa fa-calendar"></i>
<?php echo ' <script type="text/javascript">
Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

var dat =  new Date();

var dt=dat.addDays(5);
document.write(dt.toDateString());

</script> ';  ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-adf-online-training/"><strong>Learn More</strong></a></div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div style="border: 0px none;overflow: hidden;  max-width: 100%;">
<iframe scrolling="no" src="http://365onlinetraining.com/about-us/" style="border: 0px none; height: 1400px; margin-top: -840px; width: 100%;">
</iframe>
</div>

<div class="container-wrapper row" style="background-color:#e6e6e6;margin-top:-20px;">
                <div class="container-center col-xs-12 column">
                    <div class="client-wrapper clearfix">
<br>
                         <h3  style="color:#262626; font-family: 'PT Sans', sans-serif;" class="content-heading text-center">Past <strong style="color:#4ba2dc">Clients</strong></h3>
<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
                    <div id="myCarousel2" data-ride="carousel" data-type="multi" data-interval="3000" class="carousel slide fdi-Carousel clearfix">
                        <div role="listbox" class="client-list clearfix carousel-inner second-inner">
                            <div class="client-img-wrp item active">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c1.png" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c2.png" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
                            <div class="client-img-wrp item">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c3.png" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
							<div class="client-img-wrp item ">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c4.png" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
							<div class="client-img-wrp item ">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c5.png" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
							<div class="client-img-wrp item ">
                                <div class="client-1 col-sm-3">
                                    <div class="image-wrap"><img src="<?php bloginfo('template_directory'); ?>/images-new/c6.jpg" alt="Oracle WebCenter Sites"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><br>

<footer id="foot-sec" class="fullbg" style="z-index:0;margin-top:-45px" >
<div class="container " style="box-shadow:none">
<br>
<div class="row">
	<div class="text-center color-white col-lg-4">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;" class="text-left"><strong>Connect With Us</strong></h4>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-facebook"></i><small><a href="https://www.facebook.com/webcentersitestraining/"> &nbsp;Facebook</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-linkedin"></i><small><a href="https://www.linkedin.com/company/365onlinetraining"> &nbsp;LinkedIn</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-youtube"></i><small><a href="https://www.youtube.com/channel/UCKcZtV65M0_EO9ddRvEeBIA"> &nbsp;YouTube</a></small></p>
	</div>

	<div class="text-center color-white col-lg-4">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;" class="text-left"><strong>Upcoming Trainings</strong></h4>
	 <p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small> Oracle WebCenter Sites Training &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-sites-12c-online-training/"> Learn More</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small>Oracle WebCenter Content Training &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-content-training/"> Learn More</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small>Oracle ATG Web Commerce &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-atg-training/"> Learn More</a></small></p>
	</div>

	<div class="text-center color-white col-lg-3">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;" class="text-left"><strong>Contact Us</strong></h4>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-envelope"></i><small><a href="mailto:contact@365onlinetraining.com"> &nbsp;contact@365onlinetraining.com </a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-mobile"></i><small> &nbsp;+91-9448-481-470</small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><i class="fa fa-pencil"></i><small><a href="http://365onlinetraining.com/contact/"> &nbsp;Write to us</a></small></p>
	</div>
</div>
</div>
</footer>

        <div style="background:black" class="footer">
           <div class="row footer-about-company-row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="footer-about-company">
                        <div class="region-footer">
                            <div class="content">
                                <h5 style="font-family: 'Raleway', sans-serif;">Copyright 2017 365 Online. All Right Reserved</h5></div>
                        </div>
                    </div>
                </div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
        </div>
		
</body>

