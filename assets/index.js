var data;
var dataimages  = '';
		$('body').on('DOMNodeInserted', 'img', function () {
                           dataimages = this;
	});

function fetchBlob(uri, callback) {
	var data = $('#msg').val();
	var xhr = new XMLHttpRequest();
	xhr.open('POST', uri, true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhr.responseType = 'arraybuffer';
	params = "InText=" + data
	xhr.onload = function(e) {
		if (this.status == 200) {
			var blob = this.response;
			if (callback) {
				callback(blob);
			}
		}
	};
	xhr.send(params);
};
$(document).ready(function(){
$('#submit').on("click",function(event) {
	event.preventDefault();
	fetchBlob('./apiSoap.php', function(blob) {
		// Array buffer to Base64:
		var str = btoa(String.fromCharCode.apply(null, new Uint8Array(blob)));
		var dataimage ='<img id="image "src="data:image/jpeg;base64,' + str + '">'
		$('.image').empty();
		$('.image').append(dataimage);
		$('.buttons ').css({
			display: 'flex',
		});;
	});
})
// $('.pdf').on('click',function(event) {

// 	$.ajax({
// 		url: './pdf.php',
// 		type: 'POST',
// 	})
// 	.done(function(data) {
// 		console.log(data);
// 		console.log("success");
// 	})
// 	.fail(function() {
// 		console.log("error");
// 	})
// 	.always(function() {
// 		console.log("complete");
// 	});

// });
})