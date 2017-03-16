<?php get_header( ); ?>
<div id="contact-form-final" class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 col-sm-3 ]">
			<h1 class="title-carrete">CONTACT</h1>
		</div>
		<div class="[ col-xs-12 col-sm-3 ]">
			<h2 class="title-carrete">VISIT US</h2>
			<p class="[ font-family--typewriter ][ font-size--10 ][ color-gray-dark-1  ][ margin-bottom ]">Av. Progreso,<br>Col. Santa Catarina,<br>Coyoacán - CDMX</p>
			<p class="[ no-margin-bottom ]"><a class="link-contact" href="tel:+5215519652164">(+52) 1 5519652164</a></p>
			<p><a class="link-contact" href="mailto:hello@anageorgina.com">hello@anageorgina.com</a></p>
			<p class="[ no-margin-bottom ]"><a class="link-contact" target="_blank" href="">Behance</a></p>
			<p class="[ no-margin-bottom ]"><a class="link-contact" target="_blank" href="https://www.facebook.com/anageorginaampudia/">Facebook</a></p>
			<p class="[ no-margin-bottom ]"><a class="link-contact" target="_blank" href="">Instagram</a></p>
		</div>
		<div class="[ col-xs-12 col-sm-6 ]">
			<div class="[ row ]">
				<?php echo do_shortcode('[contact-form-7 id="1446" title="INFORMATION"]'); ?>
			</div>
			<hr class="[ line-contact ]">
			<div class="[ row ]">
				<?php echo do_shortcode('[contact-form-7 id="1447" title="WANT TO WORK WITH US?"]'); ?>
			</div>
		</div>
	</div>
</div>

<form id="myform" class="fs-form fs-form-full" autocomplete="off" name="contactother" role="form" method="POST">
	<ol class="fs-fields [ uppercase ]">
		<li>
			<h1 class="fs-field-label fs-anim-upper ">My basic info:</h1>
			<label class="fs-field-label fs-anim-upper" for="user_name">Hello my name is </label>
			<input class="fs-anim-lower" id="user_name" name="user_name" type="text" required/>
			<label class="fs-field-label fs-anim-upper " for="user_from">Im from </label>
			<input class="fs-anim-lower" id="user_from" name="user_from" type="text" required/>
			<label class="fs-field-label fs-anim-upper " for="user_email">You can reach me via email </label>
			<input class="fs-anim-lower" id="user_email" name="user_email" type="email" required/>
			<label class="fs-field-label fs-anim-upper " for="user_page">My page is </label>
			<input class="fs-anim-lower" id="user_page" name="user_page" type="text" />
		</li>
		<li>
			<label class="fs-field-label fs-anim-upper" for="need_company">What i need from agba is</label>
			<input class="fs-anim-lower" id="need_company" name="need_company" type="text" required/>
			<input type="hidden" name="action" value="save_contact_other_post">
		</li>
	</ol><!-- /fs-fields -->
	<button class="fs-submit" type="submit">Contact</button>
	<div class="[ js-success-msg hidden ]"></div>
</form><!-- /fs-form -->
<?php get_footer( ); ?>