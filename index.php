<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IRCTC Next Generation eTicketing System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
  
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css"rel="stylesheet">
     <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
	p{margin:0px !important;}
	.tab-content {
			border: 1px solid #ddd;
			border: 1px solid #ddd;
		   overflow:hidden
		}
		
	
	</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">IRCTC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Tour Packages</a>
                    </li>
                    <li>
                        <a href="#">Flights</a>
                    </li>
                    <li>
                        <a href="#">Hotels</a>
                    </li>
					<li>
                        <a href="#">Tourist Train</a>
                    </li>
					<li>
                        <a href="#">Special Holidays</a>
                    </li>
					<li>
                        <a href="#">Pilgrim Special Tourist Trains</a>
                    </li>
                <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li> -->
                   
                </ul>
            </div>
			
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align:center;">
                    Welcome to IRCTC
                </h1>
            </div>
			
			<div class="col-lg-6 col-md-offset-3">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> LogIn</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Quick Booking</a>
                    </li>
                 
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
					<br/>
                           	<form class="form-horizontal">
							  <fieldset>
								<div class="form-group">
								  <label for="inputEmail" class="col-lg-3 control-label" style="font-size:18px;font-weight:normal">User ID </label>
								  <div class="col-lg-8">
									<input type="text" class="form-control" id="inputEmail" placeholder="User ID">
								  </div>
								</div>
								<div class="form-group">
								  <label for="inputPassword" class="col-lg-3 control-label" style="font-size:18px;font-weight:normal">Password</label>
								  <div class="col-lg-8">
									<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									
								  </div>
								</div>
                                
                                	<div class="form-group">
								  
								  <div class="col-lg-8" style="text-align:center;">
									<p>
                                 <button type="submit" class="btn btn-primary">Login</button>
                                     <br/>
                                    <a href="https://www.services.irctc.co.in/cgi-bin/bv60.dll/irctc/services/forgotpassword.do?username=">Forgot Password |</a>
                                    <a href="https://www.services.irctc.co.in/cgi-bin/bv60.dll/irctc/services/register.do?click=true">Sign up </a> </p>
                                	
								  </div>
								</div>
								
						
							  <p>                        </p>
								  <p style="text-align:left;padding-left:80px;"></p>

								   <!-- <button class="btn btn-default">Cancel</button>
									<button type="submit" class="btn btn-primary">Submit</button> -->
							   
							  </fieldset>
						</form>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                    
            <div class="col-md-12 "> <br/>        
        <form>
	 
       <div class='col-md-6'>
            <div class="form-group">
              
                    <label>From</label>
					<input type='text' class="form-control " />
                    
                    </span>
         
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
               
				    <label>To</label>
                    <input type='text' class="form-control " />
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> -->
                    </span>
                
            </div>
        </div>
		
		<div class='col-md-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker9'>
                    <label>Date of Journey</label>
					<input type='text' class="form-control datepickerFrom" data-provide="datepicker"  />
                    
                    </span>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker10'>
				    <label>Date of Return (Optional)</label>
                    <input type='text' class="form-control datepickerTo" data-provide="datepicker"  />
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> -->
                    </span>
                </div>
            </div>
        </div>
		
		
		    <div class='col-md-6'>
            <div class="form-group">
    
				    <label>Quota </label>
              <select class="form-control">
				<option value="0">Select Quota</option>
				<option value="1">General</option>
				<option value="2">Premium Tatkal</option>
				<option value="3">Ladies</option>
				<option value="4">Tatkal</option>
			
			</select>
                
            </div>
        </div>
		
        
         <div class='col-md-6'>
            <div class="form-group">
    
				    <label>Class </label>
              <select class="form-control">
				<option value="0">Select Class</option>
				<option value="1">First AC (1A)</option>
				<option value="2">Executive Class (EC)</option>
				<option value="3">Second AC (2A)</option>
				<option value="4">First Class (FC)</option>
				<option value="5">Third AC (3A)</option>
				<option value="6">Third AC Economy (3E)</option>
				<option value="7">Chair Car (CC)</option>
				<option value="8">Sleeper Class (SL)</option>
				<option value="9">Second Sitting (2S)</option>
			</select>
                
            </div>
        </div>
        
            <div class='col-md-6'>
            <div class="form-group">
             
				     <label for="inputEmail" >User ID </label>
                 <input type="text" class="form-control" id="inputEmail" placeholder="User ID">
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> -->
                   
            </div>
        </div>
        
          <div class='col-md-6'>
            <div class="form-group">
           
			 <label for="inputPassword" >Password</label>    					            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
								
                    <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> -->
              
     
            </div>
        </div>
        
        
        
         <div class='col-md-6'>
            <div class="form-group">
            
									<button type="submit" class="btn btn-primary">Login</button>
            </div>
         </div>  
          						
								</form>
                                </div>
                    </div>
               
                </div>

            </div>
            
          
          <!--  <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>  -->
        </div>
        <hr/>
        <!-- /.row -->
      <div class="row">
        <div class="col-lg-6">
                   <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Alerts & Updates</h3>
                  </div>
                  <div class="panel-body">
                    <p> A verification call may be made for the bookings done between 10:00 am to 10:15 am to verify userid, pnr, passenger mobile number and passenger details. Any misleading information may lead to cancellation of e-ticket and an appropriate legal action</p>
                    <hr/>
                    <p> Debate Competition for School Children</p>
                    <hr/>
                    <p> E-ticket confirmed through charting at originating station or at the previous remote location cannot be cancelled. The refund of such ticket will be processed through TDR </p>
                    <hr/>
                    
                    
                  </div>
                </div>
        </div>
              
        <div class="col-lg-6">  
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">IRCTC Attractions</h3>
            </div>
            <div class="panel-body">

              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="images/irctc_pilgrim_special.jpg" alt="...">
						  <div class="carousel-caption">
					
						  </div>
						</div>
						<div class="item">
						  <img src="images/international_502.jpg" alt="...">
						  <div class="carousel-caption">
							  </div>
						</div>
						 <div class="item">
						  <img src="images/spl_train_2.jpg" alt="...">
						  <div class="carousel-caption">
							  </div>
						</div>
					
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
</div>
              
            </div>
          </div>
        </div>
</div>

       

        <hr>

        <!-- Call to Action Section -->
       <div class="row">
                <div class="col-md-12 col-md-offset-2">
                   <img src="images/adsHomeBottom.jpg" />
                </div>
            </div>

        <hr>
		
		<!-- vertical tabs -->
		<div class="container">
 

 <div class="row">
    
    <div class="col-md-6"><h3>Additional IRCTC Services</h3>
   	
      <!-- tabs left -->
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li><a href="#a" data-toggle="tab">SMS/USSD based Mobile booking</a></li>
          <li class="active"><a href="#b" data-toggle="tab">IRCTC Zone</a></li>
          <li><a href="#c" data-toggle="tab">IRCTC Official App</a></li>
		   <li><a href="#d" data-toggle="tab">IRCTC Shopping Zone</a></li>
		   <li><a href="#e" data-toggle="tab">User Guide</a></li>		   
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a">
					
					 <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/airtel.html">Airtel Money</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/SMS_BOOKING_139.htm">Bharat BPO</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/mobitkt.html">Frequency Weekly</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/COMPLETE_IRCTC/welcome.html">Pyro Group</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/sms_ussd.pdf">Download Brochure</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	        
		
		  </div>
         <div class="tab-pane" id="b"> <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                 <li><a target="_blank" href="http://www.irctc.com/rti.html">RTI Information</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/jago_yatri.pdf">Jago yatri jago</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/sbidetails.html">SBI Railway Credit Card</a></li>
                      <li><a target="_blank" href="http://www.jsk.gov.in/">Jansankhya Sthirata Kosh</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/Awards_Achievements.html">Awards and Achievements</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/irctc_menu.html">Standard Menu</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/cyclicMenuRajdhani.html">Rajdhani Menu</a></li>
                      <li><a target="_blank" href="http://www.the-maharajas.com/">Maharaja's Express</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/betaDoc/SMS_Services_Tender.pdf">Tender for messaging process and advertising rights for IRCTC e/i-ticket customers</a></li>     </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="c">
		 
		  <div class="col-md-6">
					<p>&nbsp;</p>
                    <ul>
					<li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/irctc_app.html">Windows Phone &amp; Windows 8 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/Irctc_Blackberry/irctc_blackberry.html">IRCTC BlackBerry 10 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/IRCTC_andriod_App.html">IRCTC Android App - IRCTC Connect</a></li>
                       </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="d">
		  <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                     <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/irctc_app.html">Windows Phone &amp; Windows 8 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/Irctc_Blackberry/irctc_blackberry.html">IRCTC BlackBerry 10 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/IRCTC_andriod_App.html">IRCTC Android App - IRCTC Connect</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="e">
		  <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/airtel.html">Airtel Money</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/SMS_BOOKING_139.htm">Bharat BPO</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/mobitkt.html">Frequency Weekly</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/COMPLETE_IRCTC/welcome.html">Pyro Group</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/sms_ussd.pdf">Download Brochure</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	
		 </div>
        </div>
      </div>
      <!-- /tabs -->
      
    </div>


     <div class="col-md-6" >
		<h3>&nbsp;</h3>
      <!-- tabs right -->
      <div class="tabbable tabs-right" >
         <ul class="nav nav-tabs">
          <li><a href="#a1" data-toggle="tab">Enquiries</a></li>
          <li class="active"><a href="#b1" data-toggle="tab">General Information</a></li>
          <li><a href="#c1" data-toggle="tab">Mobile Zone</a></li>
		   <li><a href="#d1" data-toggle="tab">Agents</a></li>
		   <li><a href="#e1" data-toggle="tab">Advertise with us</a></li>		   
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a1" >
					
					 <div class="col-md-6 " >
					<p>&nbsp;</p>
                    <ul>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/airtel.html">Airtel Money</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/SMS_BOOKING_139.htm">Bharat BPO</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/mobitkt.html">Frequency Weekly</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/COMPLETE_IRCTC/welcome.html">Pyro Group</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/sms_ussd.pdf">Download Brochure</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	        
		
		  </div>
         <div class="tab-pane" id="b1"> <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                 <li><a target="_blank" href="http://www.irctc.com/rti.html">RTI Information</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/jago_yatri.pdf">Jago yatri jago</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/sbidetails.html">SBI Railway Credit Card</a></li>
                      <li><a target="_blank" href="http://www.jsk.gov.in/">Jansankhya Sthirata Kosh</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/Awards_Achievements.html">Awards and Achievements</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/irctc_menu.html">Standard Menu</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/beta_htmls/cyclicMenuRajdhani.html">Rajdhani Menu</a></li>
                      <li><a target="_blank" href="http://www.the-maharajas.com/">Maharaja's Express</a></li>
                      <li><a target="_blank" href="http://www.services.irctc.co.in/betaDoc/SMS_Services_Tender.pdf">Tender for messaging process and advertising rights for IRCTC e/i-ticket customers</a></li>     </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="c1">
		 
		  <div class="col-md-6">
					<p>&nbsp;</p>
                    <ul>
					<li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/irctc_app.html">Windows Phone &amp; Windows 8 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/Irctc_Blackberry/irctc_blackberry.html">IRCTC BlackBerry 10 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/IRCTC_andriod_App.html">IRCTC Android App - IRCTC Connect</a></li>
                       </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="d1">
		  <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                     <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/irctc_app.html">Windows Phone &amp; Windows 8 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/Irctc_Blackberry/irctc_blackberry.html">IRCTC BlackBerry 10 App</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/IRCTC_andriod_App.html">IRCTC Android App - IRCTC Connect</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	</div>
         <div class="tab-pane" id="e1">
		  <div class="col-md-6 ">
					<p>&nbsp;</p>
                    <ul>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/airtel.html">Airtel Money</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/SMS_BOOKING_139.htm">Bharat BPO</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/mobitkt.html">Frequency Weekly</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_htmls/COMPLETE_IRCTC/welcome.html">Pyro Group</a></li>
                      <li><a target="_blank" href="https://www.services.irctc.co.in/beta_images/sms_booking/sms_ussd.pdf">Download Brochure</a></li>
                    </ul>
					</div>
                    <p>&nbsp;</p>	
		 </div>
        </div>
      </div>
 
      <!-- /tabs -->
     </div> 
    </div>
    
  </div><!-- /row -->
  
  
  <hr>

     <!-- Call to Action Section -->
       <div class="row">
                <div class="col-md-12 col-md-offset-2">
                   <img src="images/adsHomeBottom.jpg" />
                </div>
            </div>

<hr>


		
		
		<!-- end tabs -->
		
		
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="float:left">Copyright © 2014 - www.irctc.co.in 
					 </p>
					 
					 <p style="float:right">
					Policies: Terms of use | Security | Privacy | Infringement </p>
                   
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
	
		$('.datepickerFrom').datepicker({
			format: 'dd-M-yyyy',
		})
			$('.datepickerTo').datepicker({
			format: 'dd-M-yyyy',
		})
	$('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
    </script>
	
</body>

</html>
