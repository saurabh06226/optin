@include('layouts.header')
<!-- ---------------------------------------------BANNER---------------------------------- -->
<div id="banner" class="gds-hero gds-hero--spacer-l">
	<div class="gds-hero__full-background gds-hero__full-background--primary-dark">
		<div class="gds-hero__overlay gds-hero__overlay--primary-dark"></div>
		<div class="gds-grid gds-grid--none ">
			<div class="gds-cell gds-cell--l-half gds-cell--s-order-2 gds-cell--l-order-1 gds-cell--spacer-m gds-cell--content">
				<div class="gds-hero__content gds-hero__content--">
					<div class="gds-hero__content-inner gds-hero__content-inner--has-product-image">
						<h1 class="gds-heading gds-heading--align-left gds-heading--contrast gds-heading--l">
							Stay up to date by signing up
							for our mailing list
						</h1>
						<p class="gds-paragraph gds-paragraph--l gds-paragraph--align-left gds-paragraph--contrast gds-paragraph--spacer-l"> Please complete the following request form to receive email communications from Boehringer Ingelheim containing the latest information about our products, medicines and services.</p>
						<p class="gds-paragraph gds-paragraph--l gds-paragraph--align-left gds-paragraph--contrast gds-paragraph--spacer-l"> We will use your full name and professional details, including your office address, to help validate you against our records. </p>
					</div>
				</div>
			</div>
			<div class="gds-cell gds-cell--l-half gds-cell--s-order-1 gds-cell--l-order-2 gds-cell--spacer-m gds-cell--content gds-right-10-px">
				<div class="gds-hero__background-image">
					<div class="gds-image gds-image--spacer-none">
						<picture>
							<source media="(max-width: 991px)" srcset="img/homepage-banner-image.webp" type="image/webp">
							<source srcset="img/homepage-banner-image.jpg" type="image/jpg">
							<img src="img/homepage-banner-image.jpg" alt="Conozca nuestra Red de Referencia" loading="lazy" class=" ls-is-cached lazyloaded" title="Conozca nuestra Red de Referencia"> 
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ---------------------------------------------MAIN CONTENT---------------------------------- -->
<form role="form" method="POST" id="contactForm" action="sendMail" >
    {{ csrf_field() }}  
    <div id="form-comp" class=" gds-grid gds-grid--spacer-massive ">
        <div style="padding: 20px 20px 0px; width: 100%;">
            <h4 class="gds-heading gds-heading--align-left gds-heading--s">
                Your information
            </h4>
            <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s required-margin-bottom-43p"> * Required. </p>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-2--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--select" id="fake-id-2--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-2--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-2" id="fake-id-2"><span>Salutation</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--select" id="fake-id-2--input-wrapper">
                            <select class="gds-form-input__input gds-form-input__input--select gds-form-input__input--has-icon" id="fake-id-2" name="fake-name-2" placeholder="Placeholder text" value="">
                                <option value="" disabled="" selected="" hidden="">Select</option>
                                <option value="fake-value-1">Option 1</option>
                                <option value="fake-value-2">Option 2</option>
                                <option value="fake-value-3">Option 3</option>
                            </select>
                            <div class="gds-form-input__icon-container gds-form-input__icon-container--chevron">
                                <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_chevron-down">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>First
                            Name*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>Last
                            Name*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>Office address
                            1*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>Office address
                            2</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span> City*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-2--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--select" id="fake-id-2--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-2--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-2" id="fake-id-2"><span> Province or
                            territory</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--select" id="fake-id-2--input-wrapper">
                            <select class="gds-form-input__input gds-form-input__input--select gds-form-input__input--has-icon" id="fake-id-2" name="fake-name-2" placeholder="Placeholder text" value="">
                                <option value="" disabled="" selected="" hidden="">Province or territory</option>
                                <option value="fake-value-1">Option 1</option>
                                <option value="fake-value-2">Option 2</option>
                                <option value="fake-value-3">Option 3</option>
                            </select>
                            <div class="gds-form-input__icon-container gds-form-input__icon-container--chevron">
                                <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_chevron-down">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span> Postal
                            code*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Ex. A1A 2B2 " value=""> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>Specialty</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="fake-id-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="fake-id-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="fake-id-1--label-wrapper">
                            <label class="gds-form-input__label" for="fake-id-1" id="fake-id-1"><span>Email
                            Address*</span><span class="helperText">
                            This will be used for creating your account
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="fake-id-1--input-wrapper">
                            <input type="text" class="gds-form-input__input gds-form-input__input--text" id="fake-id-1" name="fake-name-1" placeholder="Placeholder text" value=" "> 
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------TEXT CONTENT---------------------------------- -->
    <div class=" gds-grid gds-grid--spacer-massive padding-right-25per">
        <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s"> </p>
        <div class="gds-form-input__inner gds-form-input__inner--checkbox" id="confirm-1--inner-wrapper">
            <div class="gds-form-input__label-wrapper" id="confirm-1--label-wrapper">
                <label class="gds-form-input__label " for="confirm-1" id="confirm-1">
                    <span>
                        <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold"
                            > I agree that Boehringer Ingelheim
                            (Canada) Ltd./ Lté can communicate electronically with me for the purposes described <a href="#" target="_blank"
                                class="underlined">according to</a> the Terms of Use described <a href="#" target="_blank"
                                class="underlined">below and in </a>our Privacy Policy. I also confirm I am 13 years or
                            over.
                        </p>
                    </span>
                </label>
            </div>
            <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--checkbox" id="confirm-1--input-wrapper">
                <input type="checkbox" class="gds-form-input__input gds-form-input__input--checkbox" id="confirm-1" name="confirm-1" placeholder="" value="">
                <div class="gds-form-input__icon-container gds-form-input__icon-container--checkbox">
                    <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g fill="none" fill-rule="evenodd">
                                <g fill="#06C">
                                    <g>
                                        <path
                                            d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                            transform="translate(-4 -4) translate(4 4)"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <p id="text-comp" class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold"> Your consent may be revoked at any time by going to <a href="http://unsubscribe.boehringer-ingelheim.ca" target="_blank" class="underlined">http://unsubscribe.boehringer-ingelheim.ca</a> </p>
        <p id="text-comp" class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold"> Your consent remains in effect until such times as you have advised us that it is revoked. It may take up to 10 business days to process your change of consent. </p>
        <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
            <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    viewBox="0 0 16 16">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="#06C">
                            <g>
                                <path
                                    d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                    transform="translate(-4 -4) translate(4 4)"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
        </div>
        <div id="btn-comp" class="gds-btn-wrapper">
            <button class="gds-btn gds-btn--primary"><span>Submit</span></button>
        </div>
    </div>
</form>
@include('layouts.footer')