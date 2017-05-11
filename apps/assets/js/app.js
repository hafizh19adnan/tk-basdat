$(document).on("click", ".ref-modal-pulsa", function () {
     var newId = $(this).data('id');
     $(".modal-body #kode-ref ").html( newId );
     $("#kode-pulsa-post ").val( newId );
});

$(document).ready(function(){
	$("#pop-button").click(function(){
		$("#pop-login").hide();
	});
});

function showSub(str){
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else { 
    	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	    	document.getElementById("sel2").innerHTML=this.responseText;
	    }
 	}
	xmlhttp.open("GET","getsub.php?q="+str,true);
    xmlhttp.send();
}