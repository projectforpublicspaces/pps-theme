
<div id="content">
	<div class="content-bg">
		<!-- start block -->
		<div class="big-block">
			
			<!-- green-box -->
			<div class="green-box">
				<div class="thanks_msg">
                <h4><?php echo Kohana::lang('ui_main.reports_submit_new');?></h4>
				<p  style="font-size:16px"><?php echo Kohana::lang('ui_main.reports_submitted');?></p><br />
				<br />

				<p style="font-size:14px">More ways to participate:<br />
				  <ul><li> You can also <a href="../reports/submit">add another</a> idea</li>
                    <li> Comment on other ideas, check out the <a href="../main">map</a> or  <a href="../reports">list</a> of everyone's suggestions.</li></ul><br /> In the meantime, you can help spread the word by:
                   <ul> <li> Sharing this via <span class='st_facebook_button' displayText='Facebook'></span> &  <span class='st_twitter_button' displayText='Tweet' st_url="http://ht.ly/4uAcb" st_title="I just shared my idea for improving Brighton BLVD. What's yours?  #reinventbrighton"></span> to get your friends involved.</li>
                    </ul>
</p>	
                
            <a href="<?php echo
					url::site().'reports' ?>"><?php echo Kohana::lang('ui_main.reports_return');?></a>
					<?php echo Kohana::lang('ui_main.feedback_reports');?>
					<?php 
					print form::open('http://feedback.ushahidi.com/fillsurvey.php?sid=2', array('target'=>'_blank'));
					print form::hidden('alert_code', $_SERVER['SERVER_NAME']);
					print "&nbsp;&nbsp;";
					/*print form::submit('button', Kohana::lang('ui_main.feedback'), ' class=btn_gray ');*/
					print form::close();
					?>
				</div>
			</div>
		</div>
		<!-- end block -->
	</div>
</div>