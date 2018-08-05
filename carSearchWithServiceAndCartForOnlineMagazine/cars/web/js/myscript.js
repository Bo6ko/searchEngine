

var $select1 = $( '#car_mark, #car_for_search_mark' ),
$select2 = $( '#car_model' ),
$options = $select2.find( 'option' );

$select1.on( 'change', function() {
	$select2.html( $options.filter( '[data-value="' + this.value + '"]' ) );
} );

$("#ex2").slider({});

