// Custom validation code

// Global variables

// Special characters
var specialCharacters;
var specialCharacterCheck;
var specialCharacterResult;
var onlyNumbers;

// Email vaiables
var emailOut = false;
var emailPass = true;
var emailLength;
var atFirstPosition;
var atLastPosition;
var emailDomain;
var dotFirstPosition;
var domainLength;
var oldDomainLength;
var domainExtension;
var message;

// First name variables
var firstNameOut = false;
var firstNamePass = true;
var firstNameLength;

// Last name variables
var lastNameOut = false;
var lastNamePass = true;
var lastNameLength;

// Password variables
var passwordOut = false;
var passwordPass = true;
var passwordLength;

// Check password variables
var confirmPasswordOut = false;
var confirmPasswordPass = true;
var confirmPasswordLength;

// Address Line 1 variables
var addressLine1Out = false;
var addressLine1Pass = true;
var addressLine1Length;

// Address Line 2 variables
var addressLine2Out = false;
var addressLine2Pass = true;
var addressLine2Length;

// Town variables
var townOut = false;
var townPass = true;
var townLength;

// County variables
var countyOut = false;
var countyPass = true;
var countyLength;

// Postcode variables
var postcodeOut = false;
var postcodePass = true;
var postcodeLength;
var postcodeRegex;
var postcodeRegexResult;

// Phone number variables
var phoneNumberOut = false;
var phoneNumberPass = true;
var phoneNumberLength;
var phoneNumberRegex;
var phoneNumberRegexResult;

// Card number variables
var cardNumberOut = false;
var cardNumberPass = true;
var cardNumberLength;

// Card name variables
var cardNameOut = false;
var cardNamePass = true;
var cardNameLength;

// Expiry variables
var date;
var thisYear;
var thisMonth;

var expiryMMOut = false;
var expiryMMPass = true;
var expiryMMLength;

var expiryYYOut = false;
var expiryYYPass = true;
var expiryYYLength;

// csc variables
var cscOut = false;
var cscPass = true;
var cscLength;



// Allows validation to occur once the user has completed the input

function fieldCheckOut(id) {
	switch( id ) {
		case 'email':
			emailOut = true;
			break;
		case 'firstName':
			firstNameOut = true;
			break;
		case 'lastName':
			lastNameOut = true;
			break;
		case 'password':
			passwordOut = true;
			break;
		case 'confirmPassword':
			confirmPasswordOut = true;
			break;
		case 'addressLine1':
			addressLine1Out = true;
			break;
		case 'addressLine2':
			addressLine2Out = true;
			break;
		case 'town':
			townOut = true;
			break;
		case 'county':
			countyOut = true;
			break;
		case 'postcode':
			postcodeOut = true;
			break;
		case 'phoneNumber':
			phoneNumberOut = true;
			break;
		case 'cardNumber':
			cardNumberOut = true;
			break;
		case 'cardName':
			cardNameOut = true;
			break;
		case 'expiryMM':
			expiryMMOut = true;
			break;
		case 'expiryYY':
			expiryYYOut = true;
			break;
		case 'csc':
			cscOut = true;
			break;
		default:
			break;
	}
	fieldCheck(id);
}


// Function to collect the input the user has made once fieldCheckOut has set to true

function fieldCheck(id) {
	
		value = $('#' + id).val().toLowerCase(); // Gets the value of the input and converts it to lower case

		switch( id ) {
			case 'email': // Is the id email?
				if( emailOut === true ) {
					emailValidator( id, value );
				}
				break;
			case 'firstName':
				if( firstNameOut === true ) {
					firstNameValidator( id, value );
				}
				break;
			case 'lastName':
				if( lastNameOut === true ) {
					lastNameValidator( id, value );
				}
				break;
			case 'password':
				if( passwordOut === true ) {
					passwordValidator( id, value );
				}
				break;
			case 'confirmPassword':
				if( confirmPasswordOut === true ) {
					confirmPasswordValidator( id, value );
				}
				break;
			case 'addressLine1': // Is the address line 1 incorrect?
				if( addressLine1Out === true ) {
					addressLine1Validator( id, value );
				}
				break;
			case 'addressLine2': // Is the address line 2 incorrect?
				if( addressLine2Out === true ) {
					addressLine2Validator( id, value );
				}
				break;
			case 'town':
				if( townOut === true ) {
					townValidator( id, value );
				}
				break;
			case 'county':
				if( countyOut === true ) {
					countyValidator( id, value );
				}
				break;
			case 'postcode':
				if( postcodeOut === true ) {
					postcodeValidator( id, value );
				}
				break;
			case 'phoneNumber':
				if( phoneNumberOut === true ) {
					phoneNumberValidator( id, value );
				}
				break;
			case 'cardNumber':
				if( cardNumberOut === true ) {
					cardNumberValidator( id, value );
				}
				break;
			case 'cardName':
				if( cardNameOut === true ) {
					cardNameValidator( id, value );
				}
				break;
			case 'expiryMM':
				if( expiryMMOut === true ) {
					expiryMMValidator( id, value );
				}
				break;
			case 'expiryYY':
				if( expiryYYOut === true ) {
					expiryYYValidator( id, value );
				}
				break;
			case 'csc':
				if( cscOut === true ) {
					cscValidator( id, value );
				}
				break;
			default:
				break;
		}
}


// Function to return feedback to the user

function validationFeedback(id,result,message) {
	if( result === 'fail' ) {
		switch( id ) {
			case 'email':
				emailPass = false;
				break;
			case 'firstName':
				firstNamePass = false;
				break;
			case 'lastName':
				lastNamePass = false;
				break;
			case 'password':
				passwordPass = false;
				break;
			case 'confirmPassword':
				confirmPasswordPass = false;
				break;
			case 'addressLine1':
				addressLine1Pass = false;
				break;
			case 'addressLine2':
				addressLine2Pass = false;
				break;
			case 'town':
				townPass = false;
				break;
			case 'county':
				countyPass = false;
				break;
			case 'postcode':
				postcodePass = false;
				break;
			case 'phoneNumber':
				phoneNumberPass = false;
				break;
			case 'cardNumber':
				cardNumberPass = false;
				break;
			case 'cardName':
				cardNamePass = false;
				break;
			case 'expiryMM':
				expiryMMPass = false;
				break;
			case 'expiryYY':
				expiryYYPass = false;
				break;
			case 'csc':
				cscPass = false;
				break;
			default:
				break;
		}
		passer = false; // Sets email pass to false to stop other checks and success on this run
		//console.log(passer);
		$( '#' + id ).parent('div').removeClass('has-success').addClass('has-error'); // Sets parent div state to allow for style changes
		if( id != 'expiry' ) {
			$( '#' + id + 'Status' ).replaceWith( $( '<i id="' + id + 'Status" class="fa fa-exclamation form-control-feedback"></i>' ) ); // Adds exclamation marker when there is a failure
		}
		continueCheck( message );
		//resetEverything( id );
	} else if ( result === 'pass' ) {
		$( '#' + id ).parent('div').removeClass('has-error').addClass('has-success'); // Sets parent div state to allow for style changes
		if( id != 'expiry' ) {
			$( '#' + id + 'Status' ).replaceWith( $( '<i id="' + id + 'Status" class="fa fa-check form-control-feedback"></i>' ) ); // Adds check marker when the form validates correctly
		}
		continueCheck( message );
		//resetEverything( id );
	}
	resetEverything( id );
}


// Function to enable or disable the continue button

function continueCheck( message ) {
	if( !emailPass || !firstNamePass || !lastNamePass || !passwordPass || !confirmPasswordPass || !addressLine1Pass || !addressLine2Pass || !townPass  || !countyPass || !postcodePass || !phoneNumberPass || !cardNumberPass || !cardNamePass || !expiryMMPass || !expiryYYPass || !cscPass ) {
		$( '.continue' ).attr('disabled',true); // Disables the continue button on the form
		$( '#errors' ).slideDown(); // Makes the error visible to the user
		//var errorVal = $( '#errors' ).html();
		// window.console.log(message);
		if( message != undefined ) {
			$( '#errors').html( '<strong>Error,</strong> ' + message ); // Applies the error message
		}
	} else {
		$( '.continue' ).attr('disabled',false); // Enables the continue button
		$( '#errors' ).slideUp(); // Hides the error container
		$( '#errors' ).html( '' ); // Removes any error text
	}
}

function resetEverything( id ) {
	switch( id ) {
		case 'email':
			emailOut = false;
			break;
		case 'firstName':
			firstNameOut = false;
			//firstNamePass = true;
			break;
		case 'lastName':
			lastNameOut = false;
			//lastNamePass = true;
			break;
		case 'password':
			passwordOut = false;
			break;
		case 'confirmPassword':
			confirmPasswordOut = false;
			break;
		case 'addressLine1':
			addressLine1Out = false;
			break;
		case 'addressLine2':
			addressLine2Out = false;
			break;
		case 'town':
			townOut = false;
			break;
		case 'county':
			countyOut = false;
			break;
		case 'postcode':
			postcodeOut = false;
			break;
		case 'phoneNumber':
			phoneNumberOut = false;
			break;
		case 'cardNumber':
			cardNumberOut = false;
			break;
		case 'cardName':
			cardNameOut = false;
			break;
		case 'expiryMM':
			expiryMMOut = false;
			break;
		case 'expiryYY':
			expiryYYOut = false;
			break;
		case 'csc':
			cscOut = false;
			break;
		default:
			break;
	}
}