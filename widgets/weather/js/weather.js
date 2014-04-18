$(document).ready(function(){
	alert(weather_data_now);

	for(key in weather_data_now){                               
	    if(key.indexOf("main") != -1){           
	        image = json[key];     
	        break;
	    }
	}


});