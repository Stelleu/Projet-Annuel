<?php
$title= "Nouvelle Offre";
include __DIR__ . "/includes/header.php";;
?>
<!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                <form action="" method="">
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Créer une nouvelle offre</h3>
		                        	<p class="category">JE SAIS PAS ENCORE.</p>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#location" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Création
											</a>
										</li>
			                            <li>
											<a href="#type" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-direction-alt"></i>
												</div>
												Informations
											</a>
										</li>
			                            <li>
											<a href="#facilities" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-panel"></i>
												</div>
												Offre
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-comments"></i>
												</div>
												Conditions
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Commençons par remplir l'offre </h5>
		                            		</div>
											<div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<div class="col-sm col-sm-offset-2">
															<div class="card card-pricing">
																<div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
																	<div class="z-index-1 position-relative">
																		<h5 class="text-white">Company</h5>
																		<h1 class="text-white mt-2 mb-0">
																			<small>$</small>779</h1>
																		<h6 class="text-white">per year</h6>
																	</div>
																</div>
																<div class="position-relative mt-n5" style="height: 50px;">
																	<div class="position-absolute w-100">
																		<svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
																			<defs>
																				<path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
																			</defs>
																			<g class="moving-waves">
																				<use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
																				<use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
																				<use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
																				<use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
																				<use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
																				<use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
																			</g>
																		</svg>
																	</div>
																</div>
																<div class="card-body text-center">
																	<ul class="list-unstyled max-width-200 mx-auto">
																		<li>
																			<b>10</b> Projects
																			<hr class="horizontal dark">
																		</li>
																		<li>
																			<b>1</b> Team Members
																			<hr class="horizontal dark">
																		</li>
																		<li>
																			<b>5</b> Personal Contacts
																			<hr class="horizontal dark">
																		</li>
																		<li>
																			<b>500</b> Messages
																		</li>
																	</ul>
																	<a href="javascript:;" class="btn bg-gradient-dark w-100 mt-4 mb-0">
																		Get started
																	</a>
																</div>
															</div>
														</div>
													<div class="col-sm">
														<form>
															<div class="row mb-3">
																<div class="col-sm-10">
																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-text" id="basic-addon1">@</span>
																			<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
																		</div>
																	</div>

																	<div class="form-group">
																		<div class="input-group">
																			<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
																			<span class="input-group-text" id="basic-addon2">@example.com</span>
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="form-control-label" for="basic-url">Your vanity URL</label>
																		<div class="input-group">
																			<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
																			<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
																		</div>
																	</div>

																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-text">$</span>
																			<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
																			<span class="input-group-text">.00</span>
																		</div>
																	</div>

																	<div class="form-group">
																		<div class="input-group">
																			<span class="input-group-text">With textarea</span>
																			<textarea class="form-control" aria-label="With textarea"></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row mb-3">
																<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
																<div class="col-sm-10">
																	<input type="password" class="form-control" id="inputPassword3">
																</div>
															</div>
															<fieldset class="row mb-3">
																<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
																<div class="col-sm-10">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
																		<label class="form-check-label" for="gridRadios1">
																			First radio
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
																		<label class="form-check-label" for="gridRadios2">
																			Second radio
																		</label>
																	</div>
																	<div class="form-check disabled">
																		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
																		<label class="form-check-label" for="gridRadios3">
																			Third disabled radio
																		</label>
																	</div>
																</div>
															</fieldset>
															<div class="row mb-3">
																<div class="col-sm-10 offset-sm-2">
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" id="gridCheck1">
																		<label class="form-check-label" for="gridCheck1">
																			Example checkbox
																		</label>
																	</div>
																</div>
															</div>
															<button type="submit" class="btn btn-primary">Sign in</button>
														</form>
													</div>
												</div>
											</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <h5 class="info-text">What type of location do you have? </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4 col-sm-offset-2">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-home"></i>
															<p>Home</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-package"></i>
															<p>Apartment</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h5 class="info-text">Tell us more about facilities. </h5>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Your place is good for</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- type -</option>
			                                            <option>Business</option>
			                                            <option>Vacation </option>
			                                            <option>Work</option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Is air conditioning included ?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Does your place have wi-fi?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Is breakfast included?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h5 class="info-text"> Drop us a small description. </h5>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Place description</label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                        <div class="form-group">
		                                            <label>Example</label>
		                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

		<div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div>
	    </div>
		<div class="fixed-plugin">
			<div class="dropdown open">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x"> </i>
				</a>
				<ul class="dropdown-menu">
					<li class="header-title">Examples</li>
					<li>
						<a href="wizard-create-profile.html">
						   <img src="assets/img/wizard-create-profile.png">
						   Create Profile
						</a>
					</li>
					<li>
						<a href="wizard-find-desk.html">
						   <img src="assets/img/wizard-find-desk.png">
  						   Find Desk
						</a>
					</li>
					<li class="active">
						<a href="newoffer">
						   <img src="assets/img/wizard-list-place.png">
						   List Your Place
						</a>
					</li>
					<li class="header-title">Colors</li>
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<div class="text-center">
								<span class="badge filter badge-blue" data-color="blue"></span>
								<span class="badge filter badge-azure" data-color="azure"></span>
								<span class="badge filter badge-green" data-color="green"></span>
								<span class="badge filter badge-orange" data-color="orange"></span>
								<span class="badge filter badge-red active" data-color="red"></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
				   <li class="tutorial">
						<div class="text-center">
							<a href="documentation/elements.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>
						</div>
					</li>
					<li class="license">
						Personal License
						<div class="text-center">
							<a href="https://www.creative-tim.com/product/paper-bootstrap-wizard" target="_blank" class="btn btn-info btn-fill btn-block">Download, it's free!</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../assets/js/demo.js" type="text/javascript"></script>
	<script src="../assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
