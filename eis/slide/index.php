<?php include 'header.php';?>
<?php include '../includes/connect.php';?>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-8 col-lg-8">
					<div class = "widget">
						<div class = "widget-head">
							Welcome!
						</div>
						<div class = "widget-content">
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3378.857336609523!2d122.9674456785124!3d10.74351273617465!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aed69345596a65%3A0xd3eb06f1f7c1b401!2sFisheries+Ave%2C+Talisay+City%2C+Negros+Occidental!5e1!3m2!1sen!2sph!4v1484016550978" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
							<?php include 'slider.php';?>
						</div>
					</div>
					<!--...........................................-->
		<div class="col-lg-12 col-lg-12 hideme">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">News Letter</div>
                   
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">

                                               <!-- Contact box -->
                             <div class="support-contact">

                                <!-- Phone, email and address with font awesome icon -->
                                <?php

                                $news = "SELECT * FROM newsletter ORDER BY id desc";
                                             $result = $conn->query($news);

                                              while($row = $result->fetch_assoc()) { 
                                                 $date=$row['dateof'];
                                                if ($date==date('d/m/Y')) {
                                                    $time='Today';
                                                }
                                                else{ $time= $row['dateof'];}
                                
                                echo "<p></i>&nbsp;".$time."<strong>:<br></strong><b><a href='#'>".$row['news']."</a></b></p>
                                <hr />"; }
                                ?>
                                 
                                <!-- Button -->
                              
                             </div>
                  </div>
                </div>

              </div> 

            </div>
		<!--............................................-->				
				</div>
				<div class = "col-md-4 col-lg-4">
					<div class = "widget">
						<div class = "widget-head">
							Message/Feedback
						</div>
						<div class = "widget-content">
							<div class = "padd">
								<form class="form-horizontal" action = "add_message.php" method="post">                              
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Fullname</label>
                                  <div class="col-lg-8">
                                    <input name = "fullname" type="text" class="form-control" placeholder="Please type your name" required >
                                  </div>
                                </div>                                
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Email</label>
                                  <div class="col-lg-8">
                                    <input type="email"  name = "email" class="form-control" placeholder="Please type your email" required>
                                  </div>
                                </div>
								<div class="form-group">
                                  <label class="col-lg-3 control-label">Subject</label>
                                  <div class="col-lg-8">
                                    <input type="text"  maxlength="100"  name = "subject" class="form-control" placeholder="Subject" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Comments</label>
                                  <div class="col-lg-8">
                                    <textarea  name = "message" class="form-control" rows="5" placeholder="Comments here....."required></textarea>
                                  </div>
                                </div>
								<div class="form-group">
                                  <div class="col-lg-offset-3 col-lg-8">
                                    <button  class="btn btn-sm btn-success btn-block">Send</button>                                  
                                  </div>
                                </div>
                              </form>

						</div>
						</div>
					</div>		
				</div>				
				<div class = "col-md-4 pull-right">
				<div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Contact Information</div>
                   
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">
                                               <!-- Contact box -->
                             <div class="support-contact">
                                <!-- Phone, email and address with font awesome icon -->
                                
                                <p><i class="fa fa-phone"></i>&nbsp; Phone<strong>:</strong> 0743-400-976</p>
                                <hr />
                                <p><i class="fa fa-envelope"></i>&nbsp; Email<strong>:</strong> coictgroup14@gmail.com</p>
                                <hr />
                                <p><i class="fa fa-home"></i>&nbsp; Address<strong>:</strong> P.O Box 23439 Dar es Salaam</p>
                				<hr />          
                                <!-- Button -->
                              
                             </div>
                  
					<div class = "widget">
						<div class = "widget-head center">
							 <a href="https://www.facebook.com/miraj.issa" class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>							 
							 <a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><span class="fa fa-instagram"></span></a>
							 <a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
                </div>

              </div> 

		
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
 <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
</body>
</html>



