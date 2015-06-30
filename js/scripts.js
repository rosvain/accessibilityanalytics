//DETECT FONT RE-SIZE
//vision impaired 
//Identify if user increases default font text sizes in order to increase legibility
var originalWidth = $( window ).width();
console.log(originalWidth);
$( window ).resize(function() {
  var resizedWidth = $( window ).width(); 
    console.log(resizedWidth);
  if (originalWidth !== resizedWidth){
  console.log("Window was zoomed");
  }
}); 
//DETECT SCREEN RE-SIZE
//vision repaired
//identify if user modifies the screen size to increase legibility
$( window ).resize(function() {
  console.log("Window was resized");
}); 


//DETECT FOR HIGH CONTRAST MODE
//vision impaired
//identify if user increases the screen contrast, or modifies site presentation to increase legibility



//DETECT USAGE OF SKIP TO CONTENT LINK
//vision impair
//identify if there are skip to content link
//identify if user clicks on skip to content link
//how many times does user click on the skip to content link
// *this could be expanded to include all hidden screen reader only content



//DETECT USAGE OF CAPTIONING (HTML 5 VIDEO)
//hearing impaired
//identify if captions are utiized on the page
//identify if user interacts with caption



//DETECT KEYBOARD VS MOUSE EVENTS
//vision impaired
//identify if the primary means of navigating the page is through the keyboard or mouse
//identify the types of keyboard interactions and track onfocus events to indiciate if accessibility tools are being used
// Log all keyboard interactions
	var keyCount = 0;
	$(document).keypress(function(event) {
	  console.log(event.key);
	  keyCount++
	  console.log("Key Count:"+" "+keyCount);
	});
// Log all click interactions
    var clickCount = 0;
	$(document).click(function(event) {
	  console.log(event.type);
	  clickCount++
	  console.log("Click Count:"+" "+clickCount);
	});
// Compare key count vs click count
	var compareInteractions = function(){
		if(keyCount > clickCount){
			console.log("User interacting primarily through keyboard interactions ");
		} else if (keyCount < clickCount){
			console.log("User interacting primarily through mouse interactions ");
		} else {
			console.log("Undetermined or equal");
		}
	}

//STORE ANALYTICS DATA
//collect and store data so that it can be represented in an administrative interface for the user to analyze


//DETECT IF CSS DISABLED
//identify if the user has disabled CSS presentation layer for legibility

