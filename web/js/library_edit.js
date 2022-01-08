$(document).ready(function (e){
    $('.btn-file').click(function(){
        $(".inputfile").click();
    });
    $('.inputfile').change(function() {
        $('#file-name').text($('.inputfile')[0].files[0].name);
    });
    
});

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };