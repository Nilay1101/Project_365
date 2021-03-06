<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>

<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/skin-blue.css" rel="stylesheet">
</head>

<style>
.floating-label-form-group {
  position: relative;
  margin-bottom: 0;
  padding-bottom: 0.5em;
  border-bottom: 1px solid #eeeeee;
}
.floating-label-form-group input,
.floating-label-form-group textarea {
  z-index: 1;
  position: relative;
  padding-right: 0;
  padding-left: 0;
  border: none;
  border-radius: 0;
  font-size: 1.5em;
  background: none;
  box-shadow: none !important;
  resize: none;
  color:white;
}
.floating-label-form-group label {
  display: block;
  z-index: 0;
  position: relative;
  top: 2em;
  margin: 0;
  font-size: 0.85em;
  line-height: 1.764705882em;
  vertical-align: middle;
  vertical-align: baseline;
  opacity: 0;
  -webkit-transition: top 0.3s ease,opacity 0.3s ease;
  -moz-transition: top 0.3s ease,opacity 0.3s ease;
  -ms-transition: top 0.3s ease,opacity 0.3s ease;
  transition: top 0.3s ease,opacity 0.3s ease;
}
.floating-label-form-group:not(:first-child) {
  padding-left: 14px;
  border-left: 1px solid #eeeeee;
}
.floating-label-form-group-with-value label {
  top: 0;
  opacity: 1;
}
.floating-label-form-group-with-focus label {
  color: #18BC9C;
}
form .row:first-child .floating-label-form-group {
  border-top: 1px solid #eeeeee;
}

</style>

<body>
<br><br><br>
<?php
/*
Template Name: Feedback
*/
?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>


<section id="Section-6" class="fullbg" style="z-index:0;">
<div class="container" style="box-shadow:none">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white ">
		<h2 style="color:white;font-family: 'PT Sans', sans-serif;">Training <strong style="color:#4ba2dc">Feedback</strong></h2>
		<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));">

<div class="col-lg-8 col-lg-offset-2">
                    <form action="<?php bloginfo('template_directory'); ?>/feed.php" method="post" name="sentMessage" id="contactForm" novalidate><br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-gear"></i></span>
    <select id="type" class="form-control selectpicker" >
	  <option value=" ">Select the technology of which you received the Training ? </option>
      <option value="Oracle WebCenter Sites">Oracle WebCenter Sites</option>
      <option value="Oracle WebCenter Portal">Oracle WebCenter Portal</option>
      <option value="Oracle WebCenter Content">Oracle WebCenter Content</option>
    </select>
    </div>
                            </div>
                        </div><br>
						 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-eye"></i></span>
    <select id="content" class="form-control selectpicker" >
	  <option value=" ">How much you rate the course content of the Training ? </option>
      <option value="Excellent">Excellent</option>
      <option value="Good">Good</option>
      <option value="Average">Average</option>
	  <option value="Below Average">Below Average</option>
	  <option value="Poor">Poor</option>
    </select>
    </div>
                            </div>
                        </div><br>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <select id="knowledge" class="form-control selectpicker" >
	  <option value=" ">How much you rate the subject knowledge of the Trainer ? </option>
      <option value="Excellent">Excellent</option>
      <option value="Good">Good</option>
      <option value="Average">Average</option>
	  <option value="Below Average">Below Average</option>
	  <option value="Poor">Poor</option>
    </select>
    </div>
                            </div>
                        </div><br>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
    <select id="present" class="form-control selectpicker" >
	  <option value=" ">How much you rate the presentation of the Training ? </option>
      <option value="Excellent">Excellent</option>
      <option value="Good">Good</option>
      <option value="Average">Average</option>
	  <option value="Below Average">Below Average</option>
	  <option value="Poor">Poor</option>
    </select>
    </div>
                            </div>
                        </div><br>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-comment"></i></span>
    <select id="recommend" class="form-control selectpicker" >
	  <option value=" ">Would you recommend this Training to your friends or colleagues ? </option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Provide suggestions to improve the training</label>
                                <textarea rows="5" class="form-control" placeholder="Provide suggestions to improve the training" id="message" required data-validation-required-message="Please enter your suggestions."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-lg-11 col-lg-offset-2">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div><br><br>
                    </form>
                </div>

</div>
</div>
</section>

<footer id="foot-sec" class="fullbg" style="z-index:0;margin-top:-45px" >
<div class="container " style="box-shadow:none">
<br>
<div class="row">
	<div class="text-center color-white col-lg-4">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;">About Us</h4>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small>365 Online is the leading IT training and consultancy provider in the field of customer experience that focuses on quality, innovation, & speed. We utilized technology to to bring results. We pride ourselves in great work ethic, integrity.. &nbsp;&nbsp;</small><a href="http://365onlinetraining.com/about-us/"> Read more</a></p>
	</div>

	<div class="text-center color-white col-lg-4">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;">Upcoming Trainings</h4>
	 <p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small> Oracle WebCenter Sites Training &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-sites-12c-online-training/"> Learn More</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small>Oracle WebCenter Content Training &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-webcenter-content-training/"> Learn More</a></small></p>
	<p style="color:white;font-family: 'Raleway', sans-serif;" class="text-left" ><small>Oracle ATG Web Commerce &nbsp;&nbsp;<a href="http://365onlinetraining.com/oracle-atg-training/"> Learn More</a></small></p>
	</div>

	<div class="text-center color-white col-lg-3">
	<h4 style="color:white;font-family: 'PT Sans', sans-serif;">Contact</h4>
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
                                <h5 style="font-family: 'Raleway', sans-serif;">Copyright 2016 365 Online. All Right Reserved</h5></div>
                        </div>
                    </div>
                </div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
        </div>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.placeholder.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/toucheffects.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/animations.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/init.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/feedback.js"></script>
</body>