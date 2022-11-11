function openPopup(){
	var popup=document.getElementById('popup').style.top ="200px";
	document.body.style.overflow="hidden";
}

function closePopUp(){
	document.getElementById('popup').style.top ="-600px";
	document.body.style.overflow="auto";
}
$(function(){
    setTimeout(function()
    {
        $('.alert').fadeOut("1500");
    }, 2000); // au bout de 2 secondes


});