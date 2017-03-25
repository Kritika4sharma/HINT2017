function video_s(){
		//var imag;
		'use strict';                                           // to ask if user allows his webcam to be used
    		 var video = document.querySelector('video'), canvas;

                 function pic() {
	   	         var imag = document.querySelector('img') || document.createElement('img');
		         var context;
		         var width = video.offsetWidth, height = video.offsetHeight;

			 canvas = canvas || document.createElement('canvas');
			 canvas.width = width;
			 canvas.height = height;

			 context = canvas.getContext('2d');
			 context.drawImage(video, 0, 0, width, height);

			 imag.src = canvas.toDataURL('image/png');
			 document.body.appendChild(imag);
			 // console.log('hello');
			 processFile(imag.src);
			 // console.log(imag.src);


			 
      		}

 
	       if (navigator.mediaDevices) {
	      		navigator.mediaDevices.getUserMedia({video: true})
	    
		        .then(function(stream) {
			  	video.src = window.URL.createObjectURL(stream);
			  	video.addEventListener('click', pic);
		        })
	       
	       		.catch(function(error) {
	       			document.body.textContent = 'Camera cannot be accessed. Error: ' + error.name;
	       		});

	       }
	       // processFile(imag.src);
      
}