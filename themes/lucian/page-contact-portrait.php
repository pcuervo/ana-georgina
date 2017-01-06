<?php get_header(); ?>
<div id="page-default" class="container">
	<div id="primary" class="row">
		<div id="content" role="main">
			<article class="page type-page">
				<div class="entry-content">
					<div class="vc_row wpb_row vc_custom_1471364346839">
						<div class="container">
							<div class="row vc_row ">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="fs-form-wrap" id="fs-form-wrap">
												<form id="myform" class="fs-form fs-form-full" autocomplete="off" name="contactportrait" role="form" method="POST">
													<ol class="fs-fields [ uppercase ]">
														<li>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">My basic info:</h1>
															<label class="fs-field-label fs-anim-upper" for="user_name">Hello my name is </label>
															<input class="fs-anim-lower" id="user_name" name="user_name" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_from">Im from </label>
															<input class="fs-anim-lower" id="user_from" name="user_from" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_email">You can reach me via email </label>
															<input class="fs-anim-lower" id="user_email" name="user_email" type="email" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_page">My page is </label>
															<input class="fs-anim-lower" id="user_page" name="user_page" type="text" />
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="user_need">What i need from agba is</label>
															<input class="fs-anim-lower" id="user_need" name="user_need" type="text" placeholder="Dean Moriarty" required/>
														</li>
														<li data-input-trigger>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">How much are you willing to ivest:</h1>
															<label class="fs-field-label fs-anim-upper [ hidden ]" for="price">How much are you willing to ivest:</label>
															<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
																<span><input id="price1" name="price" type="radio" value="6,000 MX"/><label for="price1">6,000 MX /  LESS THAN 60 HUMANS</label></span>
																<span><input id="price2" name="price" type="radio" value="7,000 MX"/><label for="price2">7,000 MX / I JUST WANT GOOD PHOTOS</label></span>
																<span><input id="price3" name="price" type="radio" value="8,800 MX"/><label for="price3">8,800 MX / I WANT GOOD PHOTOS AND A PRETTY ALBUM</label></span>
																<span><input id="price4" name="price" type="radio" value="Special needs"/><label for="price4">For special needs push this</label></span>
															</div>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
															<input type="hidden" name="action" value="save_contact_portrait_post">
														</li>
													</ol><!-- /fs-fields -->
													<button class="fs-submit" type="submit">Contact</button>
												</form><!-- /fs-form -->
											</div><!-- /fs-form-wrap -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>