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
												<form id="myform" class="fs-form fs-form-full" autocomplete="off">
													<ol class="fs-fields [ uppercase ]">
														<li>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">My basic info:</h1>
															<label class="fs-field-label fs-anim-upper" for="user_name">Hello my name is </label>
															<input class="fs-anim-lower" id="user_name" name="user_name" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_from">Im from </label>
															<input class="fs-anim-lower" id="user_from" name="user_from" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_email">You can reach me via email </label>
															<input class="fs-anim-lower" id="user_email" name="user_email" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_page">My page is </label>
															<input class="fs-anim-lower" id="user_page" name="user_page" type="text" />
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="event_other">What i need from agba is</label>
															<input class="fs-anim-lower" id="event_other" name="event_other" type="text" placeholder="Dean Moriarty" required/>
														</li>
														<li data-input-trigger>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">How much are you willing to ivest:</h1>
															<label class="fs-field-label fs-anim-upper [ hidden ]" for="price_portrait">How much are you willing to ivest:</label>
															<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
																<span><input id="price_portrait1" name="price_portrait" type="radio" value="price_portrait1"/><label for="price_portrait1">6,000 MX /  LESS THAN 60 HUMANS</label></span>
																<span><input id="price_portrait2" name="price_portrait" type="radio" value="price_portrait2"/><label for="price_portrait2">7,000 MX / I JUST WANT GOOD PHOTOS</label></span>
																<span><input id="price_portrait3" name="price_portrait" type="radio" value="price_portrait3"/><label for="price_portrait3">8,800 MX / I WANT GOOD PHOTOS AND A PRETTY ALBUM</label></span>
																<span><input id="price_portrait4" name="price_portrait" type="radio" value="price_portrait4"/><label for="price_portrait4">For special needs push this</label></span>
															</div>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
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