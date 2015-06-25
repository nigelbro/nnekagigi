$(document).ready(function(){


	$('#chrissy').hover(function(){
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","setUpModalItem.php?product=Chrissy",true);
        xmlhttp.send();
        $('#myModal').modal('show');
	});
	
	$('#chloe').hover(function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","setUpModalItem.php?product=Chloe",true);
        xmlhttp.send();
        $('#myModal').modal('show');
	});
	
	$('#90210').hover(function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","setUpModalItem.php?product=90210",true);
        xmlhttp.send();
        $('#myModal').modal('show');
	});

	$('#almondmilk').hover(function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","setUpModalItem.php?product=Almond Milk",true);
        xmlhttp.send();
        $('#myModal').modal('show');
        
	});

$('#myModal').hover(function(){
			$('.carousel').carousel('pause');
		},function(){
			$('.carousel').carousel('cycle');
		});


	
});
function hideMsg(){
    // Hide dynamically added div
    $('.modal-dialog').hover(function(){
    	$("#thumbnails").children("div").children("div").children("img").hover(function(){
		$('#showEnlarged').attr('src',$(this).attr('src'));
	});
		},function(){
			$('#myModal').modal('hide');
		});
}
// Listen DOM changes
$('#myModal').bind("DOMSubtreeModified", hideMsg);
