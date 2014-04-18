$(document).ready(function(){

	var myDomObject;
	$(".weather_data").each(function(){
		myDomObject = $(this);
		myID = $(this).attr("id");
		
		$.each(weather_data_now, function(){
			if($(this)[myID]){
				myDomObject.html($(this)[myID]);
			}
		});
	});
});