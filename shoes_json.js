//nortonb_shop
$( document ).ready(function() {
    console.log( "ready!" );

    //load 'select'
    $.getJSON( "shoes_json_encode.php", function( data ) {
    	//console.log(data);
    	//console.log(data[1][2]);
    	showStore(data);
        //$('#shoesShop').html(data);
    });

    function showStore(data){
    	//console.log("showStore: " + data);
    	//console.log(data[0][0]);
    	//console.log(data.length);
    	data.forEach( function(s) { 
		     //console.log(s[0]);
             $('#shoesShop').append('<div class="col-sm-4" data-test="working">\
                <h3>'+s[0]+'</h3>\
                <img src="images/'+s[1]+'" class="img-responsive">\
                <strong>'+s[2]+'</strong> '+ s[3]+'</div>');
             //$('#shoesShop').append('</div');
		} );

    }
});