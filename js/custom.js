$( "select" ).change(function () {
    var elementID = $( this ).attr('id');
    // console.log( elementID );
    var value = $( '#' + elementID ).val();
    // console.log( value );
    $( '#secretSelect' ).text( value );
    if( elementID === "emailPrimary" || elementID === "emailThird" ) {
    	$( '#secretSelect' ).css('font-size', '1.2em');
    } else {
    	$( '#secretSelect' ).css('font-size', '2em');
    }
    var optionWidth = $( '#secretSelect' ).width();
    // console.log( optionWidth );
    $( this ).css('width', optionWidth);
}).change();

$('#findAddress').on('click', function() {
    $( "#addressResultsContainer" ).slideDown( "slow" );
});

$( '#addressOptions' ).change( function() {
    var val = $( '#addressOptions' ).val();
    var commaPos = val.indexOf(",");
    var line1 = val.substr(0, commaPos);

    $( '#line1' ).val(line1);
    $( '#line2' ).val( 'Church Road' );
    $( '#town' ).val( 'East Bilney' );
    $( '#county' ).val( 'Norfolk' );
    $( '#postcode' ).val( 'NR20 4HN' );
});