<script type="text/javascript">
$(document).ready(function(){
	//Vertical Sliding
	$('.projectCap.slidedown').hover(function(){  
    $(".cover", this).stop().animate({top:'-100'},{queue:false,duration:300});  
	}, function() {  
	$(".cover", this).stop().animate({top:'100'},{queue:false,duration:300});  
	});
});
</script>