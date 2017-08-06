<?php include 'header.php';?>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-12 col-lg-12">
					<div class="widget wgreen">
                
		                <div class="widget-head">
		                  <div class="pull-left">Events</div>
		                  <div class="widget-icons pull-right">
		                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
		                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
		                  </div>
		                  <div class="clearfix"></div>
		                </div>

               			<div class="widget-content" style="height:500px">
                  			<div class="padd">
                  				<div class="page-tables">


                  				<!--NESTED-->

                  					<div class="col-md-6 col-lg-6 col-sm-6">
										  <div class="widget">
										<!-- Widget title -->
										
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<form class="form-horizontal" role="form" action="reservation_save.php" method="post">
                              
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">First Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="First Name" name="first" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Last Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last" required>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Address</label>
                                  <div class="col-lg-5">
                                    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
                                  </div>
                                </div>    

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Contact #</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Contact #" name="contact" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Email Address</label>
                                  <div class="col-lg-5">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                  </div>
                                </div>
								 <div class="form-group">
                                  <label class="col-lg-2 control-label"></label>
                                  <div class="col-lg-5">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" value="option1" required> I agree to the <a href="#facilities" data-toggle="modal">terms and condtion</a> of the Chimney's Catering
                                    </label>
									</div>
									</div>
                  


                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <button type="reset" class="btn btn-sm btn-default">Clear</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                    
                                  </div>
                                </div>
                              </form>
										  </div>
										 <!--  -->
										</div>
									  </div>
										</div>	<!--col-->
										
										<div class="col-md-6 col-lg-6 col-sm-6">
										  <div class="widget">
										<!-- Widget title -->
										
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<form class="form-horizontal" role="form" action="reservation_save.php" method="post">
                              
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">First Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="First Name" name="first" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Last Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last" required>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Address</label>
                                  <div class="col-lg-5">
                                    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
                                  </div>
                                </div>    

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Contact #</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Contact #" name="contact" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Email Address</label>
                                  <div class="col-lg-5">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                  </div>
                                </div>
								 <div class="form-group">
                                  <label class="col-lg-2 control-label"></label>
                                  <div class="col-lg-5">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" value="option1" required> I agree to the <a href="#facilities" data-toggle="modal">terms and condtion</a> of the Chimney's Catering
                                    </label>
									</div>
									</div>
                  


                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <button type="reset" class="btn btn-sm btn-default">Clear</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                    
                                  </div>
                                </div>
                              </form>
										  </div>
										 <!--  -->
										</div>
									  </div>
										</div>	<!--col-->

									<div class="col-md-6 col-lg-6 col-sm-6">
										  <div class="widget">
										
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<ul class="latest-news">
														<?php
														include('includes/dbcon.php');

															$query=mysqli_query($con,"select * from reservation WHERE r_status = 'Approved' LIMIT 0,5")or die(mysqli_error($con));
															  while ($row=mysqli_fetch_array($query)){
																$id=$row['rid'];
																$what=$row['r_ocassion'];
																$where=$row['r_venue'];
																$date = $row['r_date'];
															   
														?>   												
											  <li>
												<!-- Title and date -->
												<h6><a href="#"> <?php echo $what;?> </a> 
													<span class = "pull-right"><?php echo date("M d, Y",strtotime($date));?></span></h6>
												<p><?php echo $where;?></p>
											  </li>
														<?php }?>                                      
											</ul> 
										  </div>
										  
										</div>
									  </div>
										</div>


										<!--NESTED END-->
										
										
									
                   				</div><!--table-->
                  			</div><!--pad-->
                		</div><!--widget-content-->
                  		<div class="widget-foot">
                    	<!-- Footer goes here -->
                 		 </div>
              		</div><!--widget-->		
				</div><!--content-->
			
             
    
    
			
			</div>	
		</div>
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>
</body>
</html>



