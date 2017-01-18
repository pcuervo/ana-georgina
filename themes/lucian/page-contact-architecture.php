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
												<form id="myform" class="fs-form fs-form-full" autocomplete="off" name="contactarchitecture" role="form" method="POST">
													<ol class="fs-fields [ uppercase ]">
														<li>
															<h1 class="fs-field-label fs-anim-upper [ font-family--verb_regular ]">My basic info:</h1>
															<label class="fs-field-label fs-anim-upper" for="user_name">Hello my name is </label>
															<input class="fs-anim-lower" id="user_name" name="user_name" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_from">Im from </label>
															<input class="fs-anim-lower" id="user_from" name="user_from" type="text" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_email">You can reach me via email </label>
															<input class="fs-anim-lower" id="user_email" name="user_email" type="email" required/>
															<label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]" for="user_page">My page is </label>
															<input class="fs-anim-lower" id="user_page" name="user_page" type="text" />
														</li>
														<!--  (igual a product) -->
														<li>
															<label class="fs-field-label fs-anim-upper" for="name_company">The name of the company is</label>
															<input class="fs-anim-lower" id="name_company" name="name_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="focused_company">We are focused on</label>
															<input class="fs-anim-lower" id="focused_company" name="focused_company" type="text" required/>
															<label class="fs-field-label fs-anim-upper" for="need_company">What i need from agba is</label>
															<input class="fs-anim-lower" id="need_company" name="need_company" type="text" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper" for="date_event">When do i need my photos all done</label>
															<input class="fs-anim-lower" id="date_event" name="date_event" type="date" required/>
														</li>
														<li>
															<label class="fs-field-label fs-anim-upper [ margin-top--large ]" for="heard_ag">I heard about AGBA from?</label>
															<input class="fs-anim-lower" id="heard_ag" name="heard_ag" type="text" required/> <label class="fs-field-label fs-anim-upper [ padding-left--xsmall ]">AND NOW MY PHOTOS WILL BE THE PRETTIEST OF THEM ALL.</label>
															<input type="hidden" name="action" value="save_contact_architecture_post">
														</li>
													</ol><!-- /fs-fields -->
													<button class="fs-submit" type="submit">Contact</button>
													<div class="[ js-success-msg hidden ]"></div>
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