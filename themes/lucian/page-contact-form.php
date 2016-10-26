<?php get_header(); ?>
				<!-- <div class="content-iframe">
					<iframe frameBorder="0" id="contact-form" src="<?php echo get_template_directory_uri(); ?>/contact-form/index.html"" frameborder="0" allowfullscreen></iframe> --> <!-- width="640" height="360" -->
				<!--</div> -->

<div id="page-default" class="container">
	<div id="primary" class="row">
		<div id="content" role="main">
			<article class="page type-page">
				<div class="entry-content">
					<div class="vc_row wpb_row vc_custom_1471364346839">
						<div class="container"><div class="row vc_row ">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="fs-form-wrap" id="fs-form-wrap">
											<form id="myform" class="fs-form fs-form-full" autocomplete="off">
												<ol class="fs-fields">
													<li>
														<h1 class="fs-field-label fs-anim-upper">My basic info:</h1>
														<label class="fs-field-label fs-anim-upper" for="user_name">Hello my name is</label>
														<input class="fs-anim-lower" id="user_name" name="user_name" type="text" required/>
														<label class="fs-field-label fs-anim-upper" for="user_from">Im from</label>
														<input class="fs-anim-lower" id="user_from" name="user_from" type="text" required/>
														<label class="fs-field-label fs-anim-upper" for="user_email">You can reach me via email</label>
														<input class="fs-anim-lower" id="user_email" name="user_email" type="text" required/>
														<label class="fs-field-label fs-anim-upper" for="user_page">My page is</label>
														<input class="fs-anim-lower" id="user_page" name="user_page" type="text" />
													</li>
													<li data-input-trigger>
														<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">Im intereted in:</label>
														<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
															<span><input id="wedding" name="event" type="radio" value="wedding"/><label for="wedding" class="radio-conversion">WEDDING</label></span>
															<span><input id="portrait" name="event" type="radio" value="portraitsocial"/><label for="portrait" class="radio-social">PORTRAIT</label></span>
															<span><input id="arquitecture" name="event" type="radio" value="arquitecture"/><label for="arquitecture" class="radio-mobile">ARQUITECTURE</label></span>
															<span><input id="product" name="event" type="radio" value="product"/><label for="product" class="radio-mobile">PRODUCT</label></span>
															<span><input id="other" name="event" type="radio" value="other"/><label for="other" class="radio-mobile">OTHER</label></span>
														</div>
											<!-- En caso de Otro  -->
														<label class="fs-field-label fs-anim-upper" for="event_other">Other</label>
														<input class="fs-anim-lower" id="event_other" name="event_other" type="text" placeholder="Dean Moriarty" required/>
													</li>
													<li>
														<label class="fs-field-label fs-anim-upper" for="date_event">My page is</label>
														<input class="fs-anim-lower" id="date_event" name="date_event" type="date" required/>
														<p class="fs-field-label fs-anim-upper">Sorry we are not available, hope to see you in your next wedding</p>
													</li>
													<li data-input-trigger>
														<label class="fs-field-label fs-anim-upper" for="price" data-info="This will help us know what kind of service you need">How much are you willing to ivest:</label>
														<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
															<span><input id="price1" name="price" type="radio" value="price1"/><label for="price1" class="radio-conversion">$Price1</label></span>
															<span><input id="price2" name="price" type="radio" value="social"/><label for="price2" class="radio-social">$Price2</label></span>
															<span><input id="price3" name="price" type="radio" value="mobile"/><label for="price3" class="radio-mobile">$Price3</label></span>
															<span><input id="price4" name="price" type="radio" value="mobile"/><label for="price4" class="radio-mobile">No, thanks</label></span>
														</div>
														<p class="fs-field-label fs-anim-upper">Sorry... <a href="<?php echo site_url('/'); ?>">return to home</a></p>
													</li>
											<!-- if is wedding -->
													<li>
														<label class="fs-field-label fs-anim-upper" for="wedding_idea">My wedding idea is</label>
														<textarea class="fs-anim-lower" id="wedding_idea" name="wedding_idea" placeholder="Describe here"></textarea>
														<label class="fs-field-label fs-anim-upper" for="wedding_location">My wedding location is in</label>
														<textarea class="fs-anim-lower" id="wedding_location" name="wedding_location" placeholder="Describe here"></textarea>
													</li>
													<li>
														<label class="fs-field-label fs-anim-upper" for="heard_ag">I heard about AGBA from</label>
														<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/>
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

<?php get_footer(); ?>