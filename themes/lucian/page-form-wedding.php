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
														<li data-input-trigger>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">Im intereted in:</h1>
															<label class="fs-field-label fs-anim-upper [ hidden ]" for="event" >Im intereted in:</label> <!-- data-info="This will help us know what kind of service you need" -->
															<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
																<span><input id="wedding" name="event" type="radio" value="wedding"/><label for="wedding" class="radio-wedding">WEDDING</label></span>
																<span><input id="portrait" name="event" type="radio" value="portraitsocial"/><label for="portrait" class="radio-portrait">PORTRAIT</label></span>
																<span><input id="arquitecture" name="event" type="radio" value="arquitecture"/><label for="arquitecture" class="radio-arquitecture">ARQUITECTURE</label></span>
																<span><input id="product" name="event" type="radio" value="product"/><label for="product" class="radio-product">PRODUCT</label></span>
																<span><input id="other" name="event" type="radio" value="other"/><label for="other" class="radio-other">OTHER</label></span>
															</div>
														</li>

												<!-- if is wedding -->
														<li>
															<label class="fs-field-label fs-anim-upper" for="date_event">My wedding is on</label>
															<input class="fs-anim-lower" id="date_event" name="date_event" type="date" required/>
															<p class="fs-field-label fs-anim-upper">Sorry we are not available, hope to see you in your next wedding</p>
														</li>
														<li data-input-trigger>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_bold ]">How much are you willing to ivest:</h1>
															<label class="fs-field-label fs-anim-upper [ hidden ]" for="price_wedding">How much are you willing to ivest:</label>
															<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
																<span><input id="price_wedding1" name="price_wedding" type="radio" value="price_wedding1"/><label for="price_wedding1">27,000 MX /  LESS THAN 60 HUMANS</label></span>
																<span><input id="price_wedding2" name="price_wedding" type="radio" value="price_wedding2"/><label for="price_wedding2">30,000 MX / I JUST WANT GOOD PHOTOS</label></span>
																<span><input id="price_wedding3" name="price_wedding" type="radio" value="price_wedding3"/><label for="price_wedding3">35,000 MX / I WANT GOOD PHOTOS AND A PRETTY ALBUM</label></span>
																<span><input id="price_wedding4" name="price_wedding" type="radio" value="price_wedding4"/><label for="price_wedding4">40,000 MX / ¡I WANT IT ALL!</label></span>
																<!-- option less? -->
															</div>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper" for="wedding_idea">My wedding idea is</label>
															<textarea class="fs-anim-lower" id="wedding_idea" name="wedding_idea" placeholder="Describe here"></textarea>
															<label class="fs-field-label fs-anim-upper" for="wedding_location">My wedding location is in</label>
															<textarea class="fs-anim-lower" id="wedding_location" name="wedding_location" placeholder="Describe here"></textarea>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
														</li>

												<!-- if is portrait -->
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
																<!-- option less? -->
															</div>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
														</li>

												<!-- if is arquitecture (igual a product) -->
														<li>
															<label class="fs-field-label fs-anim-upper" for="name_company">The name of the company is</label>
															<input class="fs-anim-lower" id="name_company" name="name_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="focused_company">We are focused on</label>
															<input class="fs-anim-lower" id="focused_company" name="focused_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="need_company">What i need from agba is</label>
															<input class="fs-anim-lower" id="need_company" name="need_company" type="text" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper" for="date_event">when do i need my photos all done</label>
															<input class="fs-anim-lower" id="date_event" name="date_event" type="date" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
														</li>

												<!-- if is product (igual a arquitecture)-->
														<li>
															<label class="fs-field-label fs-anim-upper" for="name_company">The name of the company is</label>
															<input class="fs-anim-lower" id="name_company" name="name_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="focused_company">We are focused on</label>
															<input class="fs-anim-lower" id="focused_company" name="focused_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="need_company">What i need from agba is</label>
															<input class="fs-anim-lower" id="need_company" name="need_company" type="text" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper" for="date_event">when do i need my photos all done</label>
															<input class="fs-anim-lower" id="date_event" name="date_event" type="date" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
														</li>

												<!-- if is other -->
														<li>
															<label class="fs-field-label fs-anim-upper" for="need_company">What i need from agba is</label>
															<input class="fs-anim-lower" id="need_company" name="need_company" type="text" required/>
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
<?php //echo do_shortcode( '[contact-form-7 id="474" title="Formulario prueba"]' ); ?>

<?php get_footer(); ?>