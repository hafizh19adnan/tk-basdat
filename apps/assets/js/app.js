$(document).on("click", ".ref-modal-pulsa", function () {
     var newId = $(this).data('id');
     $(".modal-body #kode-ref ").html( newId );
     $("#kode-pulsa-post ").val( newId );
});

$(document).ready(function(){
	var counter = 1;
	$("#pop-button").click(function(){
		$("#pop-login").hide();
	});
	$("#add-subcat").click(function(){
		counter++;
		$('#subcat').append("<div class='col-md-12'><label>Subkategori "+counter+"</label>"+
			"</div><div class='form-group'><div class='col-md-6'><label for='sub-code'>Kode subkategori:</label>"+
			"<input type='text' class='form-control' id='sub-code'></div><div class='form-group'><div class='col-md-6'>"+
			"<label for='sub-name'>Nama Subkategori:</label><input type='text' class='form-control' id='sub-name'><BR>"+
			"</div></div></div>")
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