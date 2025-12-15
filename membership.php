<?php
$pageTitle = "Join Us";
require_once 'config/db.php';
require_once 'includes/header.php';
?>

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/membership.css">

<main class="container">
    <script>window.enableEventObserver=true</script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/static/jotform.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/js/punycode-1.4.1.min.js" type="text/javascript" defer></script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/js/vendor/maskedinput_5.0.9.min.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/s/umd/9c53f989765/for-form-branding-footer.js" type="text/javascript" defer></script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/js/vendor/smoothscroll.min.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/s/static/540319ab75c/js/errorNavigation.js" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = true;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.texts = {"confirmEmail":"E-mail does not match","pleaseWait":"Please wait...","validateEmail":"You need to validate this e-mail","confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","required":"This field is required.","requireOne":"At least one field required.","requireEveryRow":"Every row is required.","requireEveryCell":"Every cell is required.","email":"Enter a valid e-mail address","alphabetic":"This field can only contain letters","numeric":"This field can only contain numeric values","alphanumeric":"This field can only contain letters and numbers.","cyrillic":"This field can only contain cyrillic characters","url":"This field can only contain a valid URL","currency":"This field can only contain currency values.","fillMask":"Field value must fill mask.","uploadExtensions":"You can only upload following files:","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","gradingScoreError":"Score total should only be less than or equal to","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","maxDigitsError":"The maximum digits allowed is","minCharactersError":"The number of characters should not be less than the minimum value:","maxCharactersError":"The number of characters should not be more than the maximum value:","freeEmailError":"Free email accounts are not allowed","minSelectionsError":"The minimum required number of selections is ","maxSelectionsError":"The maximum number of selections allowed is ","pastDatesDisallowed":"Date must not be in the past.","dateLimited":"This date is unavailable.","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","ageVerificationError":"You must be older than {minAge} years old to submit this form.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","chooseAFile_infoMessage":"Choose a file","maxFileSize_infoMessage":"Max. file size","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","ccInvalidNumber":"Credit Card Number is invalid.","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingProduct":"Please select at least one product.","ccMissingDonation":"Please enter numeric values for donation amount.","disallowDecimals":"Please enter a whole number.","restrictedDomain":"This domain is not allowed","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","requiredLegend":"All fields marked with * are required and must be filled.","geoPermissionTitle":"Permission Denied","geoPermissionDesc":"Check your browser's privacy settings.","geoNotAvailableTitle":"Position Unavailable","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoTimeoutTitle":"Timeout","geoTimeoutDesc":"Please check your internet connection and try again.","selectedTime":"Selected Time","formerSelectedTime":"Former Time","cancelAppointment":"Cancel Appointment","cancelSelection":"Cancel Selection","confirmSelection":"Confirm Selection","noSlotsAvailable":"No slots available","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","multipleError":"There are {count} errors on this page. Please correct them before moving on.","oneError":"There is {count} error on this page. Please correct it before moving on.","doneMessage":"Well done! All errors are fixed.","invalidTime":"Enter a valid time","doneButton":"Done","reviewSubmitText":"Review and Submit","nextButtonText":"Next","prevButtonText":"Previous","seeErrorsButton":"See Errors","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","soldOut":"Sold Out","justSoldOut":"Just Sold Out","selectionSoldOut":"Selection Sold Out","subProductItemsLeft":"({count} items left)","startButtonText":"START","submitButtonText":"Submit","submissionLimit":"Sorry! Only one entry is allowed. <br> Multiple submissions are disabled for this form.","reviewBackText":"Back to Form","seeAllText":"See All","progressMiddleText":"of","fieldError":"field has an error.","error":"Error"};
	JotForm.newPaymentUI = true;
	JotForm.originalLanguage = "en";
	JotForm.isFormViewTrackingAllowed = true;
	JotForm.replaceTagTest = true;
	JotForm.activeRedirect = "thanktext";
	JotForm.uploadServerURL = "https://upload.jotform.com/upload";
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
	window.addEventListener('DOMContentLoaded',function(){window.brandingFooter.init({"formID":253458655668070,"campaign":"powered_by_jotform_le","isCardForm":false,"isLegacyForm":true,"formLanguage":"en"})});	JotForm.isFullSource = true;

	JotForm.init(function(){
	/*INIT-START*/
      JotForm.setPhoneMaskingValidator( 'input_5_full', '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023' );

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 if (!JotForm.calenderViewMonths) JotForm.calenderViewMonths = {};  JotForm.calenderViewMonths[6] = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 if (!JotForm.calenderViewDays) JotForm.calenderViewDays = {};  JotForm.calenderViewDays[6] = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("6", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); });
      JotForm.alterTexts({"ageVerificationError":"You must be older than {minAge} years old to submit this form.","alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","cancelAppointment":"Cancel Appointment","cancelSelection":"Cancel Selection","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","chooseAFile_infoMessage":"Choose a file","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","confirmSelection":"Confirm Selection","currency":"This field can only contain currency values.","cyrillic":"This field can only contain cyrillic characters","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","doneButton":"Done","doneMessage":"Well done! All errors are fixed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","email":"Enter a valid e-mail address","error":"Error","fieldError":"field has an error.","fillMask":"Field value must fill mask.","formerSelectedTime":"Former Time","freeEmailError":"Free email accounts are not allowed","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoNotAvailableTitle":"Position Unavailable","geoPermissionDesc":"Check your browser's privacy settings.","geoPermissionTitle":"Permission Denied","geoTimeoutDesc":"Please check your internet connection and try again.","geoTimeoutTitle":"Timeout","gradingScoreError":"Score total should only be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","invalidTime":"Enter a valid time","justSoldOut":"Just Sold Out","lessThan":"Your score should be less than or equal to","maxCharactersError":"The number of characters should not be more than the maximum value:","maxDigitsError":"The maximum digits allowed is","maxFileSize_infoMessage":"Max. file size","maxSelectionsError":"The maximum number of selections allowed is ","minCharactersError":"The number of characters should not be less than the minimum value:","minSelectionsError":"The minimum required number of selections is ","multipleError":"There are {count} errors on this page. Please correct them before moving on.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","nextButtonText":"Next","noSlotsAvailable":"No slots available","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"This field can only contain numeric values","oneError":"There is {count} error on this page. Please correct it before moving on.","pastDatesDisallowed":"Date must not be in the past.","pleaseWait":"Please wait...","prevButtonText":"Previous","progressMiddleText":"of","required":"This field is required.","requiredLegend":"All fields marked with * are required and must be filled.","requireEveryCell":"Every cell is required.","requireEveryRow":"Every row is required.","requireOne":"At least one field required.","restrictedDomain":"This domain is not allowed","reviewBackText":"Back to Form","reviewSubmitText":"Review and Submit","seeAllText":"See All","seeErrorsButton":"See Errors","selectedTime":"Selected Time","selectionSoldOut":"Selection Sold Out","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","soldOut":"Sold Out","startButtonText":"START","submissionLimit":"Sorry! Only one entry is allowed. &lt;br&gt; Multiple submissions are disabled for this form.","submitButtonText":"Submit","subProductItemsLeft":"({count} items left)","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","url":"This field can only contain a valid URL","validateEmail":"You need to validate this e-mail","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
	/*INIT-END*/
	});

   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"q1_header","qid":"1","text":"Join Our Church Family","type":"control_head"},{"description":"","name":"q2_fullname0","qid":"2","text":"Full Name","type":"control_fullname"},{"description":"","name":"q3_address1","qid":"3","text":"Home Address","type":"control_address"},{"description":"","name":"q4_email2","qid":"4","subLabel":"example@example.com","text":"Email Address","type":"control_email"},{"description":"","name":"q5_phone3","qid":"5","text":"Phone Number","type":"control_phone"},{"description":"","name":"q6_datetime4","qid":"6","text":"Date of Birth","type":"control_datetime"},{"description":"","name":"q7_radio5","qid":"7","text":"Have you been baptized?","type":"control_radio"},{"name":"q8_submit","qid":"8","text":"Submit Application","type":"control_button"}]);}, 20); 
</script>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/stylebuilder/static/form-common.css?v=955aab2
"/>
<style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link id="custom-font" type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/fonts/?family=Inter" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/defaultV2.css?v=955aab2
"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5495488a700cc478508b4567.css?v=3.3.67336&themeRevisionID=65ca29b26430371446a81082"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/s/static/540319ab75c/css/styles/payment/payment_styles.css?3.3.67336" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/s/static/540319ab75c/css/styles/payment/payment_feature.css?3.3.67336" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: rgba(0, 0, 0, 0.8);
    }
  
    .form-all {
      color: #000000;
    }
    .form-header-group .form-header {
      color: #000000;
    }
    .form-header-group .form-subHeader {
      color: #000000;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label,
    span.FITB .qb-checkbox-label,
    span.FITB .qb-radiobox-label,
    span.FITB .form-radio label,
    span.FITB .form-checkbox label,
    [data-blotid][data-type=checkbox] [data-labelid],
    [data-blotid][data-type=radiobox] [data-labelid],
    span.FITB-inptCont[data-type=checkbox] label,
    span.FITB-inptCont[data-type=radiobox] label {
      color: #000000;
    }
    .form-sub-label {
      color: #1a1a1a;
    }
  
  .supernova {
    background-color: #000000;
  }
  .supernova body {
    background: transparent;
  }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #ffffff;
    }
  
      
    .supernova {
      background-repeat: no-repeat;
      background-size:cover;
      background-attachment: fixed;
      background-position: center top;
    }

      .supernova, #stage {
        background-image: none;
      }
    
     .form-all {
       background-image: url("https://files.jotform.com/jufs/dessy473abr%2Fagent_files%2Fbackground_images%2F261452611693cd07512fba5.34509586.png?md5=hFEndPFi5oR5P_D0wOH-9A&expires=1765779995");
       background-repeat: no-repeat;
       background-size:cover;
       background-attachment: fixed;
       background-position: center top;
    }
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<form class="jotform-form" onsubmit="return typeof testSubmitFunction !== 'undefined' && testSubmitFunction();" action="https://submit.jotform.com/submit/253458655668070" method="post" name="form_253458655668070" id="253458655668070" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="253458655668070" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" /><input type="hidden" id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1765781342089" /><input type="hidden" id="submitSource" name="submitSource" value="unknown" /><input type="hidden" id="submitDate" name="submitDate" value="undefined" /><input type="hidden" id="buildDate" name="buildDate" value="1765781342089" /><input type="hidden" name="uploadServerUrl" value="https://upload.jotform.com/upload" /><input type="hidden" name="eventObserver" value="1" />
  <div role="main" class="form-all">
    <ul class="form-section page-section" role="presentation">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Left">
            <div class="header-logo"><img src="https://www.jotform.com/uploads/dessy473abr/form_files/logo.693ccff32152b6.14222159.jpg" alt="Join Our Church Family" width="100" class="header-logo-left" /></div>
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header">Join Our Church Family</h1>
              <div id="subHeader_1" class="form-subHeader">We welcome you to grow with us in faith and fellowship</div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_2"><label class="form-label form-label-top form-label-auto" id="label_2" for="first_2" aria-hidden="false"> Full Name<span class="form-required">*</span> </label>
        <div id="cid_2" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_2" name="q2_q2_fullname0[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_2 given-name" size="10" data-component="first" aria-labelledby="label_2 sublabel_2_first" required="" value="" /><label class="form-sub-label" for="first_2" id="sublabel_2_first" style="min-height:13px">First Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"><input type="text" id="last_2" name="q2_q2_fullname0[last]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_2 family-name" size="15" data-component="last" aria-labelledby="label_2 sublabel_2_last" required="" value="" /><label class="form-sub-label" for="last_2" id="sublabel_2_last" style="min-height:13px">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_3" data-compound-hint=",,,,Please Select,,Please Select,"><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3_addr_line1" aria-hidden="false"> Home Address<span class="form-required">*</span> </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_3_addr_line1" name="q3_q3_address1[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_3 address-line1" data-component="address_line_1" aria-labelledby="label_3 sublabel_3_addr_line1" required="" value="" /><label class="form-sub-label" for="input_3_addr_line1" id="sublabel_3_addr_line1" style="min-height:13px">Street Address</label></span></div>
            <div class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_3_addr_line2" name="q3_q3_address1[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_3 address-line2" data-component="address_line_2" aria-labelledby="label_3 sublabel_3_addr_line2" value="" /><label class="form-sub-label" for="input_3_addr_line2" id="sublabel_3_addr_line2" style="min-height:13px">Street Address Line 2</label></span></div><span class="form-address-line form-address-city-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_3_city" name="q3_q3_address1[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_3 address-level2" data-component="city" aria-labelledby="label_3 sublabel_3_city" required="" value="" /><label class="form-sub-label" for="input_3_city" id="sublabel_3_city" style="min-height:13px">City</label></span></span><span class="form-address-line form-address-state-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_3_state" name="q3_q3_address1[state]" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_3 address-level1" data-component="state" aria-labelledby="label_3 sublabel_3_state" required="" value="" /><label class="form-sub-label" for="input_3_state" id="sublabel_3_state" style="min-height:13px">State / Province</label></span></span><span class="form-address-line form-address-zip-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_3_postal" name="q3_q3_address1[postal]" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_3 postal-code" data-component="zip" aria-labelledby="label_3 sublabel_3_postal" required="" value="" /><label class="form-sub-label" for="input_3_postal" id="sublabel_3_postal" style="min-height:13px">Postal / Zip Code</label></span></span><span class="form-address-line form-address-country-line jsTest-address-lineField form-address-hiddenLine" style="display:none"><span class="form-sub-label-container" style="vertical-align:top"><select class="form-dropdown validate[required] form-address-country" name="q3_q3_address1[country]" id="input_3_country" data-component="country" required="" aria-labelledby="label_3 sublabel_3_country" autoComplete="section-input_3 off">
                  <option value="">Please Select</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="The Bahamas">The Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote d&#x27;Ivoire">Cote d&#x27;Ivoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curaçao">Curaçao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="Gabon">Gabon</option>
                  <option value="The Gambia">The Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="North Korea">North Korea</option>
                  <option value="South Korea">South Korea</option>
                  <option value="Kosovo">Kosovo</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Turkish Republic of Northern Cyprus">Turkish Republic of Northern Cyprus</option>
                  <option value="Northern Mariana">Northern Mariana</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestine">Palestine</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn Islands">Pitcairn Islands</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of the Congo">Republic of the Congo</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Barthelemy">Saint Barthelemy</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Martin">Saint Martin</option>
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="Somaliland">Somaliland</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Ossetia">South Ossetia</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard">Svalbard</option>
                  <option value="eSwatini">eSwatini</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Timor-Leste">Timor-Leste</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Transnistria Pridnestrovie">Transnistria Pridnestrovie</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tristan da Cunha">Tristan da Cunha</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City">Vatican City</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="British Virgin Islands">British Virgin Islands</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="US Virgin Islands">US Virgin Islands</option>
                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                  <option value="other">Other</option>
                </select><label class="form-sub-label" for="input_3_country" id="sublabel_3_country" style="min-height:13px">Country</label></span></span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="input_4" aria-hidden="false"> Email Address<span class="form-required">*</span> </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_4" name="q4_q4_email2" class="form-textbox validate[required, Email]" data-defaultvalue="" autoComplete="section-input_4 email" style="width:310px" size="310" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" value="" /><label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px">example@example.com</label></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full"> Phone Number<span class="form-required">*</span> </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_5_full" name="q5_q5_phone3[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_5 sublabel_5_masked" required="" value="" /><label class="form-sub-label" for="input_5_full" id="sublabel_5_masked" style="min-height:13px">Please enter a valid phone number.</label></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_6"><label class="form-label form-label-top form-label-auto" id="label_6" for="lite_mode_6" aria-hidden="false"> Date of Birth<span class="form-required">*</span> </label>
        <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none"><span class="form-sub-label-container" style="vertical-align:top"><input class="form-textbox validate[required, limitDate]" id="month_6" name="q6_q6_datetime4[month]" type="tel" size="2" data-maxlength="2" data-age="" maxLength="2" required="" autoComplete="off" aria-labelledby="label_6 sublabel_6_month" value="" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="month_6" id="sublabel_6_month" style="min-height:13px">Month</label></span><span class="form-sub-label-container" style="vertical-align:top"><input class="form-textbox validate[required, limitDate]" id="day_6" name="q6_q6_datetime4[day]" type="tel" size="2" data-maxlength="2" data-age="" maxLength="2" required="" autoComplete="off" aria-labelledby="label_6 sublabel_6_day" value="" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="day_6" id="sublabel_6_day" style="min-height:13px">Day</label></span><span class="form-sub-label-container" style="vertical-align:top"><input class="form-textbox validate[required, limitDate]" id="year_6" name="q6_q6_datetime4[year]" type="tel" size="4" data-maxlength="4" data-age="" maxLength="4" required="" autoComplete="off" aria-labelledby="label_6 sublabel_6_year" value="" /><label class="form-sub-label" for="year_6" id="sublabel_6_year" style="min-height:13px">Year</label></span></div><span class="form-sub-label-container" style="vertical-align:top"><input class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_6" type="text" size="12" data-maxlength="12" maxLength="12" data-age="" required="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_6 sublabel_6_litemode" value="" /><button type="button" class=" newDefaultTheme-dateIcon focusable icon-liteMode" id="input_6_pick" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2"></button><label class="form-sub-label" for="lite_mode_6" id="sublabel_6_litemode" style="min-height:13px">Date</label></span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" aria-hidden="false"> Have you been baptized?<span class="form-required">*</span> </label>
        <div id="cid_7" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_7" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input aria-describedby="label_7" type="radio" class="form-radio validate[required]" id="input_7_0" name="q7_q7_radio5" required="" value="Yes" /><label id="label_input_7_0" for="input_7_0">Yes</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input aria-describedby="label_7" type="radio" class="form-radio validate[required]" id="input_7_1" name="q7_q7_radio5" required="" value="No" /><label id="label_input_7_1" for="input_7_1">No</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_8">
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_8" type="submit" class="form-submit-button form-submit-button-gradient-12 submit-button jf-form-buttons jsTest-submitField legacy-submit" data-component="button" data-content="">Submit Application</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="253458655668070" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='253458655668070'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "253458655668070-253458655668070";
    }
  </script>
</form><script type="text/javascript">JotForm.ownerView=true;</script><script type="text/javascript">JotForm.isNewSACL=true;</script>

    
        


    <section class="content-card">
        <h3>Membership Benefits</h3>
        <ul>
            <li>Pastoral care and support</li>
            <li>Ministry service opportunities</li>
            <li>Member meetings and voting</li>
            <li>Church family community</li>
        </ul>
    </section>
    <script src="js/header.js"></script>
</main>

<?php require_once 'includes/footer.php'; ?>
