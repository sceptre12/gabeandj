$(document).ready(function(){
	var count =1;
	$('#report th').each(function(id,elem){
	  if($(elem).text() === "FirstName" || $(elem).text() ===  "LastName"){
	   $(elem).prepend("G" + count + " ");  
	   if(id%2 === 0){
	   	count++;
	   }
	  }
	})
});