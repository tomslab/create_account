function fieldCheckOut(e){switch(e){case"email":emailOut=!0;break;case"addressLine1":addressLine1Out=!0;break;case"addressLine2":addressLine2Out=!0;break;case"town":townOut=!0;break;case"county":countyOut=!0;break;case"postcode":postcodeOut=!0;break;case"phoneNumber":phoneNumberOut=!0;break;case"cardNumber":cardNumberOut=!0;break;case"cardName":cardNameOut=!0;break;case"expiry":expiryOut=!0;break;case"cvv":cvvOut=!0}fieldCheck(e)}function fieldCheck(e){switch(value=$("#"+e).val().toLowerCase(),e){case"email":emailOut===!0&&(window.console.log("foo"),emailValidator(e,value));break;case"addressLine1":addressLine1Out===!0&&addressLine1Validator(e,value);break;case"addressLine2":addressLine2Out===!0&&addressLine2Validator(e,value);break;case"town":townOut===!0&&townValidator(e,value);break;case"county":countyOut===!0&&countyValidator(e,value);break;case"postcode":postcodeOut===!0&&postcodeValidator(e,value);break;case"phoneNumber":phoneNumberOut===!0&&phoneNumberValidator(e,value);break;case"cardNumber":cardNumberOut===!0&&cardNumberValidator(e,value);break;case"cardName":cardNameOut===!0&&cardNameValidator(e,value);break;case"expiry":expiryOut===!0&&expiryValidator(e,value);break;case"cvv":cvvOut===!0&&cvvValidator(e,value);break;default:window.console.log("bar")}}function validationFeedback(e,a,s){if("fail"===a){switch(e){case"email":emailPass=!1;break;case"addressLine1":addressLine1Pass=!1;break;case"addressLine2":addressLine2Pass=!1;break;case"town":townPass=!1;break;case"county":countyPass=!1;break;case"postcode":postcodePass=!1;break;case"phoneNumber":phoneNumberPass=!1;break;case"cardNumber":cardNumberPass=!1;break;case"cardName":cardNamePass=!1;break;case"expiry":expiryPass=!1;break;case"cvv":cvvPass=!1}passer=!1,$("#"+e).parent("div").removeClass("has-success").addClass("has-error"),$("#errors").text(s),$("#errors").css("display","block"),"expiry"!=e&&$("#"+e+"Status").replaceWith($('<i id="'+e+'Status" class="fa fa-exclamation form-control-feedback"></i>')),continueCheck()}else"pass"===a&&($("#"+e).parent("div").removeClass("has-error").addClass("has-success"),$("#errors").text(""),$("#errors").css("display","none"),"expiry"!=e&&$("#"+e+"Status").replaceWith($('<i id="'+e+'Status" class="fa fa-check form-control-feedback"></i>')),continueCheck())}function continueCheck(){emailPass&&addressLine1Pass&&addressLine2Pass&&townPass&&countyPass&&postcodePass&&phoneNumberPass&&cardNumberPass&&cardNamePass&&expiryPass&&cvvPass?$(".continue").attr("disabled",!1):$(".continue").attr("disabled",!0)}var specialCharacters,specialCharacterCheck,specialCharacterResult,onlyNumbers,emailOut=!1,emailPass=!0,emailLength,atFirstPosition,atLastPosition,emailDomain,dotFirstPosition,domainLength,oldDomainLength,domainExtension,message,addressLine1Out=!1,addressLine1Pass=!0,addressLine1Length,addressLine2Out=!1,addressLine2Pass=!0,addressLine2Length,townOut=!1,townPass=!0,townLength,countyOut=!1,countyPass=!0,countyLength,postcodeOut=!1,postcodePass=!0,postcodeLength,postcodeRegex,postcodeRegexResult,phoneNumberOut=!1,phoneNumberPass=!0,phoneNumberLength,phoneNumberRegex,phoneNumberRegexResult,cardNumberOut=!1,cardNumberPass=!0,cardNumberLength,cardNameOut=!1,cardNamePass=!0,cardNameLength,expiryOut=!1,expiryPass=!0,expiryLength,date,thisYear,thisMonth,cvvOut=!1,cvvPass=!0,cvvLength;