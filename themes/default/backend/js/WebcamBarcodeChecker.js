window.addEventListener("DOMContentLoaded", function() {
		var counting = 0;
		var scale = 1;
		var workerCount = 0;
		var timer = null, interval = 1500;
		var timerCount = 0;

		var resultDiv = document.querySelector("#textbit");
		var BarcodeString = document.querySelector("#barcodeString");
		var successDiv = document.getElementById("successDiv");
		var snapButton = document.getElementById("snap");
		snapButton.focus();

		var video = document.getElementById("video");
		var Canvas = document.createElement("canvas");
		var ctx = Canvas.getContext("2d");
		var videoObj = { "video": true };


		var DecodeWorker = new Worker("/themes/default/backend/js/DecoderWorker.min.js");
		var FlipWorker = new Worker("/themes/default/backend/js/DecoderWorker.min.js");
		DecodeWorker.onmessage = receiveMessage;
		FlipWorker.onmessage = receiveMessage;

		errBack = function(error) {
			console.log("Video capture error: ", error.code);
		};

		// Put video listeners into place
		if(navigator.getUserMedia) { // Standard
			navigator.getUserMedia(videoObj, function(stream) {
				video.src = stream;
				video.play();
			}, errBack);
		} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
			navigator.webkitGetUserMedia(videoObj, function(stream){
				video.src = window.webkitURL.createObjectURL(stream);
				video.play();
			}, errBack);
		}
		else if(navigator.mozGetUserMedia) { // Firefox-prefixed
			navigator.mozGetUserMedia(videoObj, function(stream){
				video.src = window.URL.createObjectURL(stream);
				video.play();
			}, errBack);
		}


		function receiveMessage(e) {
			if(e.data.success === "log") {
				console.log(e.data.result);
				return;
			}
			workerCount--;
			if(e.data.success){
				var tempArray = e.data.result;
				for(var i = 0; i < tempArray.length; i++) {
					if(resultArray.indexOf(tempArray[i]) == -1) {
						resultArray.push(tempArray[i]);
					}
				}
				//resultDiv.innerHTML=resultArray.join("<br/>");
				BarcodeString.value = getBarcodeFromString(resultArray.toString());
				checkingSuccess();
			}else{
				if(resultArray.length === 0 && workerCount === 0) {
					//resultDiv.style.display = "";
					//resultDiv.innerHTML="Decoding failed. " + counting++;
				}
			}
		}

		function decodeBar() {
				//video.style.display = "none";
				Canvas.width = video.videoWidth;
			    Canvas.height = video.videoHeight;
				ctx.drawImage(video,0,0,Canvas.width,Canvas.height);
				resultArray = [];
				workerCount = 2;
				//resultDiv.innerHTML="Processing image...";
				DecodeWorker.postMessage({pixels: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, width: Canvas.width, height: Canvas.height, cmd: "normal"});
				FlipWorker.postMessage({pixels: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, width: Canvas.width, 
					height: Canvas.height, cmd: "flip"});
				//video.style.display = "";
		}


		document.getElementById("snap").addEventListener("click", function() {
			// var beginProcess = new Date();
			if(timer==null) {
				startChecking();
			}
			// var endProcess = new Date();
			// console.log("Decoding time: " + (endProcess - beginProcess));
		});

		document.getElementById("stopButton").addEventListener("click", function() {
			// var beginProcess = new Date();
			if(timer!=null) {
				stopChecking();
			}
			// var endProcess = new Date();
			// console.log("Decoding time: " + (endProcess - beginProcess));
		});

		
		function startChecking() {
			console.log("Start Checking...");
			//successDiv.hide();
			successDiv.style.display = "none";
			//console.log(timerCount++);
			timer = setInterval(function() {
				//console.log("Timer " + timerCount);
			    decodeBar();
			}, interval);
		}

		function stopChecking() {
			console.log("Stop checking ticket.");
			clearInterval(timer);
			timer = null;
		}

		function haltChecking() {
			stopChecking();
			setTimeout(function(){
				startChecking();
			}, 3500);
		}

		function checkingSuccess() {
			showSuccessMesage();
			haltChecking();
		}

		function showSuccessMesage() {
			console.log("Success tickets: " + ++timerCount);
			//successDiv.show();

		}

		function getBarcodeFromString(resultString) {
			return resultString.split(":")[1].trim();
		}


	}, false);
function checkin() {
    var barString = jQuery("#barcodeString").val();
    var sentdata = {barcode: barString};
    jQuery.ajax({
        data: sentdata,
        async: false,
        type: "POST",
        url:"",
        success: function(result){
//            console.log(result);

            if (result === "1"){
                $("#successDiv").hide();
                $("#failDiv").show();
            }else{
                $("#failDiv").hide();
                $("#successDiv").show();
            }
            // do something()
        }
    });
}
	