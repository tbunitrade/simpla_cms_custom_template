// A $( document ).ready() block.

// A $( document ).ready() block.
$(document).ready(function() {
    console.log( "ready or not!" );

    var mydata = $('#mydata').val();
    var data = parseInt(mydata);

    console.log('data ' + data);

    if ( mydata >= 0) {
        console.log('true'  + mydata);
        var newdata = mydata + (mydata*0,3);

        console.log ('New ' + newdata);

    }

    else {
        var start = $('#start').val();
        var data2 = parseInt(start);
        console.log('start ' + data2);

        var testdata = 200;
        var datalast = data + testdata;

        console.log('sum ' + datalast);

        //$('#start') == data2;
        $('#start').val() == data2;

        //$(#'start').innertext(data2);
        //$(#'start').text(data2);
    }
});