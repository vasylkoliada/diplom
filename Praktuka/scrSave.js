$(function(){
var oldVal, newVal, id;
 
$('.ed').keypress(function(e){
if(e.which == 13){
return false;
}
});

 
 
$('.ed').focus(function(){
oldVal = $(this).html();
id = $(this).data('id');
}).blur(function() {
	newVal = $(this).html();
	if(newVal != oldVal){

		$.ajax({
            url: 'RozkladYch.php',
            type: 'POST',
            data: {new_val: newVal, id: id},
            success: function(res){
                 console.log(res);

            },
            error: function(){
               alert("Error!!!");
            }
          

		});
		}
	
});
 
});