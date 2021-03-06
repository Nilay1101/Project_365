<?php $options = get_option('mh_options'); ?>
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
<footer class="row clearfix">
	<?php if (is_active_sidebar('footer-1')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-2')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-2'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-3')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-3'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-4')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-4'); ?>
	</div>
	<?php } ?>
</footer>
<?php } ?>
</div>
<footer id="foot-sec" class="fullbg" style="z-index:0;" >
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
<?php if ($options['tracking_code']) { ?>
<?php echo $options['tracking_code']; ?>
<?php } ?>
<?php wp_footer(); ?>

</body>  
</html>