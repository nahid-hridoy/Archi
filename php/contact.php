<?php
	include("include/header.php");
?>

	<div class="container-fluid  clearfix bcumb_fix well " id="wellfix">
		<div class="row B_CUMB ">
	        <div class="btn-group btn-breadcrumb col-lg-12" id="b_c">
	            	<a href="contact.php" class="btn btn-success"><i class="glyphicon glyphicon-envelope"></i></a>
			        <a href="#map_address" class="btn btn-success m_a">Map & Address</a>
			        <a href="#query_social" class="btn btn-success q_s">Query & Social Media</a>   
	        </div>
		</div>
	</div>

	<section id="map_address">
		<div class="container">
			<div class="row text-center contact_page">
				<h3 class="title-one">Say Hello</h3>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<h2 class="text-success page-header p_h">Find Us On Map</h2>
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
				</div>

				<div class="col-sm-4">
					<h2 class="text-success page-header p_h">Our Address</h2>
					<address>
		    			<strong>Main Officee</strong><br>
		    			15 Springfield Way<br>
		    			Hythe<br>
		    			Kent<br>
		    			United Kingdon<br>
		    			CT21 5SH<br>
		    			<abbr title="Phone">P:</abbr> 01234 567 890
		    		</address>

		    		<address>
		    			<strong>Second Officee</strong><br>
		    			15 Springfield Way<br>
		    			Hythe<br>
		    			Kent<br>
		    			United Kingdon<br>
		    			CT21 5SH<br>
		    			<abbr title="Phone">P:</abbr> 01234 567 890
		    		</address>
				</div>
			</div>
			
		</div>
	</section>


	<section id="query_social">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h2 class="text-success page-header p_h">Send Your Query</h2>
					
					    
					      
					            <div class="well well-sm query_form">
					                <form>
					                <div class="row">
					                    <div class="col-md-6">
					                        <div class="form-group">
					                            <label for="name">
					                                Name</label>
					                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
					                        </div>
					                        <div class="form-group">
					                            <label for="email">
					                                Email Address</label>
					                            <div class="input-group">
					                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
					                                </span>
					                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
					                        </div>
					                        <div class="form-group">
					                            <label for="subject">
					                                Subject</label>
					                            <select id="subject" name="subject" class="form-control" required="required">
					                                <option value="na" selected="">Choose One:</option>
					                                <option value="service">General Customer Service</option>
					                                <option value="suggestions">Suggestions</option>
					                                <option value="product">Product Support</option>
					                            </select>
					                        </div>
					                    </div>
					                    <div class="col-md-6">
					                        <div class="form-group">
					                            <label for="name">
					                                Message</label>
					                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
					                                placeholder="Message"></textarea>
					                        </div>
					                    </div>
					                    <div class="col-md-12">
					                        <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
					                            Send Message</button>
					                    </div>
					                </div>
					                </form>
					            </div>
					      
					    
					

				</div>

				<div class="col-sm-4">
					<h2 class="text-success page-header p_h">We In Social Media</h2>

					<a href="#" class="button facebook"><span><i class="fa fa-facebook"></i></span><p>Facebook</p></a>

					<a href="#" class="button twitter"><span><i class="fa fa-twitter"></i></span><p>Twitter</p></a>

					<a href="#" class="button google-plus"><span><i class="fa fa-google-plus"></i></span><p>Google +</p></a>

					<a href="#" class="button linkedin"><span><i class="fa fa-linkedin"></i></span><p>Linkedin</p></a>

					<a href="#" class="button skype"><span><i class="fa fa-skype"></i></span><p>skype</p></a>

					<a href="#" class="button instagram"><span><i class="fa fa-instagram"></i></span><p>instagram</p></a>


				</div>
				
			</div>
		</div>
	</section>


<?php
	include("include/footer.php");
?>