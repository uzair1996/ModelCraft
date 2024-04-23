// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btnn = document.getElementById("myBtnn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btnn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function gotourl(id) {
	var get  = id;
window.location = "detail.php?id="+get;
}
function gotourllogout(){
	window.location = "logout.php";
}
function gotcarturl(id){
	var get  = id;
	window.location = "usertablecreator.php?id="+get;
}
function gotoshipping(){
	window.location = "shipping_method.php";
}
function gotourlpayment(){
	window.location = "payment.php";	
}
var expandCollapse = function(){
        if ( $(window).width() < 680 ) {
            $(function(){
                // add a class .collapse to a div .showHide
                // set display: "" in css for the toggle button .btn.btn-primary
                $('.ar').css('display', 'block');// removes display property to make it visible
            });
        }
        else {
            $(function(){
                // remove a class .collapse from a div .showHide
                // set display: none in css for the toggle button .btn.btn-primary  
                $('.ar').css('display', 'none');// hides button display on bigger screen
            });
        }
    }
    $(window).resize(expandCollapse); // calls the function when the window first loads