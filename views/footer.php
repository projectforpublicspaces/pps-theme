			</div>
		</div>
		<!-- / main body -->

	</div>
	<!-- / wrapper -->
	
	<!-- footer -->
	<div id="footer" class="clearingfix">
 
		<div id="underfooter"></div>
				
		<!-- footer content -->
		<div class="rapidxwpr floatholder">
 
			<!-- footer credits -->
			<!--<div class="footer-credits">
				Powered by the &nbsp;<a href="http://www.ushahidi.com/"><img src="<?php echo url::base(); ?>/media/img/footer-logo.png" alt="Ushahidi" style="vertical-align:middle" /></a>&nbsp; Platform
			</div>-->
			<!-- / footer credits -->
		
			<!-- footer menu -->
			<!--<div class="footermenu">
				<ul class="clearingfix">
					<li><a class="item1" href="<?php echo url::site(); ?>"><?php echo Kohana::lang('ui_main.home'); ?></a></li>
					<li><a href="<?php echo url::site()."reports/submit"; ?>"><?php echo Kohana::lang('ui_main.report_an_incident'); ?></a></li>
					<li><a href="<?php echo url::site()."alerts"; ?>"><?php echo Kohana::lang('ui_main.alerts'); ?></a></li>
					<li><a href="<?php echo url::site()."help"; ?>"><?php echo Kohana::lang('ui_main.help'); ?></a></li>
					<li><a href="<?php echo url::site()."contact"; ?>"><?php echo Kohana::lang('ui_main.contact'); ?></a></li>
					<?php
					// Action::nav_main_bottom - Add items to the bottom links
					Event::run('ushahidi_action.nav_main_bottom');
					?>
				</ul>
				<?php if($site_copyright_statement != '') { ?>
      		<p><?php echo $site_copyright_statement; ?></p>
      	<?php } ?>
			</div>-->
			<!-- / footer menu -->
         

      
			<!--<h2 class="feedback_title" style="clear:both">
				<a href="http://feedback.ushahidi.com/fillsurvey.php?sid=5"><?php echo Kohana::lang('ui_main.feedback'); ?></a>
			</h2>-->
            
       <table border="0">
 
  <tr>
  <td valign="top" style="padding-left:20px; padding-right:20px;">Digital Placemaking App created by<br /><a href="http://www.pps.org"><img style="margin-right:60px" src="<?php echo url::site('themes/pps/images/logo_pps.png'); ?>"  align="left" /></a></td>
    
    <td valign="top" style="padding-left:20px; padding-right:20px;">Made possible by<br />
   <a href="http://www.sanantonio.gov/ccdo/"><img style="margin-right:140px" src="<?php echo url::site('themes/pps/images/ccsa_logo.png'); ?>" /></a></td>
    
    
    
  </tr>
</table>



 	<?php echo $ushahidi_stats; ?>
	<?php echo $google_analytics; ?>
	
	<!-- Task Scheduler -->
	<img src="<?php echo url::base(); ?>media/img/spacer.gif" alt="" height="1" width="1" border="0" onload="runScheduler(this)" />
        <?php echo html::script(array('themes/pps/js/charCount.js', 'themes/pps/js/jquery.scrollTo-min.js')); ?>
	<?php
	// Action::main_footer - Add items before the </body> tag
	Event::run('ushahidi_action.main_footer');
	?>
		</div>
         
		<!-- / footer content -->
 
	</div>
	<!-- / footer -->
 

</body>
</html>