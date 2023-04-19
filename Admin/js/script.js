// $(document).ready(function () {
//     $('#example').DataTable();
// });

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'lBfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    } );
} );
$(document).ready(function () {
    $('#example1').DataTable();
});
$(document).ready(function () {
    $('#example2').DataTable();
});


var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

// For Select2
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});


// sidebar
(function(){
    $('#msbo').on('click', function(){
      $('body').toggleClass('msb-x');
    });
  }());

function open_sidebar(){

}
$(document).ready(function(){
    $('#bar_opener').on('click',function(){
        $('#msb').toggleClass('msbActive');
        $('#child-div').toggleClass('child-div');
        $('#child-div-prov').toggleClass('child-div');
        $('#listItem').toggleClass('listitem-secondary');
    });
    
});

