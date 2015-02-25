function firstNameValidator( id, value ) {
	firstNamePass = true;
	firstNameLength = value.length; // Get address line 1 full length

	if( firstNameLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','Your first name is required');
	}

	if( firstNamePass === true ) {
    	specialCharacterCheck(value);
    	if( specialCharacterResult === true ) {
    		validationFeedback(id,'fail','Your first name cannot contain special characters');
    	}
	}

	if( firstNamePass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function lastNameValidator( id, value ) {
	lastNamePass = true;
	lastNameLength = value.length; // Get address line 1 full length

	if( lastNameLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','Your last name is required');
	}

	if( lastNamePass === true ) {
    	specialCharacterCheck(value);
    	if( specialCharacterResult === true ) {
    		validationFeedback(id,'fail','Your last name cannot contain special characters');
    	}
	}

	if( lastNamePass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function passwordValidator( id, value ) {
	passwordPass = true;
	passwordLength = value.length; // Get address line 1 full length

	if( passwordLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','A password required');
	}

	if( passwordLength < 6 ) { // Address line 1 must be present
		validationFeedback(id,'fail','Your password is too short');
	}

	if( passwordPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}

function confirmPasswordValidator( id, value ) {
	confirmPasswordPass = true;
	confirmPasswordLength = value.length; // Get address line 1 full length

	if( confirmPasswordLength === 0 ) { // Address line 1 must be present
		validationFeedback(id,'fail','Please confirm your password');
	}

	var password = $( '#password' ).val();
	console.log( password );

	if( value != password ) {
		validationFeedback(id,'fail','Your passwords do not match');
	}

	if( confirmPasswordPass === true ) { // If nothing has failed then this is triggered to show success
		validationFeedback(id,'pass');
	}
}