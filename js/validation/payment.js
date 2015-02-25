function cardNumberValidator( id, value ) {
	cardNumberPass = true;
	cardNumberLength = value.length; // Get address line 1 full length

	if( cardNumberLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','A valid card is required');
	}

	if( cardNumberPass === true ) {
		specialCharacterCheck(value);
		if( specialCharacterResult === true ) {
			validationFeedback(id,'fail','Your card cannot contain special characters');
		}
	}

	if( cardNumberPass === true ) {
		$( '#cardNumber' ).validateCreditCard( function( result ) {
			if( result.card_type === null || result.valid === false || result.length_valid === false || result.luhn_valid === false ) {
				validationFeedback(id,'fail','Please enter a valid card')
			}
		});
	}

	if( cardNumberPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

// 3714 4963 5398 431

function cardNameValidator( id, value ) {
	cardNamePass = true;
	cardNameLength = value.length; // Get address line 1 full length

	if( cardNameLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','The name on the card is required');
	}

	if( cardNamePass === true ) {
		specialCharacterCheck(value);
		if( specialCharacterResult === true ) {
			validationFeedback(id,'fail','The name on the card cannot contain special characters');
		}
	}

	if( cardNamePass === true ) {
		var numberCheck = /^[A-Za-z\s]+$/;
		var numberCheckResult = numberCheck.test(value);
		if( numberCheckResult === false ) {
			validationFeedback(id,'fail','The name of the card only contains letters and spaces')
		}
	}

	if( cardNamePass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function expiryMMValidator( id, value ) {
	expiryMMPass = true;
	expiryMMLength = value.length; // Get address line 1 full length
	
	date = new Date(); // Get date

	thisYear = date.getFullYear(); // Get this year
	thisYear = thisYear.toString().substr(2,2);
	thisMonth = date.getMonth(); // Get this day
	thisMonth = thisMonth + 1; // Add 1 as Jan = 0 but month input sets Jan to 1

	yearValue = $( '#expiryYY' ).val();

	if( value === '' ) {
		validationFeedback(id,'fail','Your card expiry date is required');
	} else if( yearValue != '' ) {
		if( yearValue <= thisYear ) {
			if( value < thisMonth ) { // If selected month is less than current month
				validationFeedback(id,'fail','The month you have entered has past');
			}
		}
	} else if( value > 12 ) {
		validationFeedback(id,'fail','Please enter a value between 1 and 12');
	}

	if( expiryMMPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function expiryYYValidator( id, value ) {
	expiryYYPass = true;
	expiryYYLength = value.length; // Get address line 1 full length
	
	date = new Date(); // Get date

	thisYear = date.getFullYear(); // Get this year
	thisYear = thisYear.toString().substr(2,2);

	var selectedYear = value.substr(0,4); // Get year section of the selected date (ie 2018)
	selectedYear = Number(selectedYear); // Convert to number

	monthValue = $( '#expiryMM' ).val();

	if( value === '' ) {
		validationFeedback(id,'fail','Your card expiry date is required');
	} else if( selectedYear < thisYear ) { // If selected year is less than current year
		validationFeedback(id,'fail','The year you have entered has already passed');
	}

	expiryMMValidator( 'expiryMM', monthValue);

	if( expiryYYPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function cscValidator( id, value ) {
	cscPass = true;
	cscLength = value.length;

	if( cscLength === 0 ) { // csc must be present
		validationFeedback(id,'fail','The CSC is required');
	}

	if( cscPass === true ) {
		onlyNumbers = /(^[+]?\d*$)/g; // http://www.regxlib.com/REDetails.aspx?regexp_id=257
		onlyNumbersResult = onlyNumbers.test(value);
		if( onlyNumbersResult === false ) {
			validationFeedback(id,'fail','Only numbers are allowed in the CSC code');
		}
	}

	if( cscPass === true ) {
		window.console.log('zoop');
		$( '#cardNumber' ).validateCreditCard( function( result ) {
			if( result.card_type != null ) {
				if( result.card_type.name === 'amex' ) {
					if( cscLength != 4 ) {
						validationFeedback(id,'fail','American Express cards have 4 digit CSC codes');
						window.console.log('no');
					}
				} else {
					if( cscLength != 3 ) {
						validationFeedback(id,'fail','Your card must have a 3 digit CSC code');
						window.console.log('else');
					}
				}
			}
		});
	}

	if( cscPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}