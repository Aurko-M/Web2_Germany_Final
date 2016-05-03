var moving = "";
function $(id){
	return document.getElementById(id);
}
function moveRight(id){
		stopMoving();
		$(id).style.left = parseInt($(id).style.left) + 1 + 'px';
		moving = setTimeout(function(){moveRight(id);},10);
}

function moveLeft(id){ 
		stopMoving();
		$(id).style.left = parseInt($(id).style.left) - 1 + 'px';
		moving = setTimeout(function(){moveLeft(id);},10);
}
function moveTop(id){
		stopMoving();
		$(id).style.top = parseInt($(id).style.top) - 1 + 'px';
		moving = setTimeout(function(){moveTop(id);},10);
}
function moveBottom(id){
		stopMoving();
		$(id).style.top = parseInt($(id).style.top) + 1 + 'px';
		moving = setTimeout(function(){moveBottom(id);},10);
}
function reset(id){
		stopMoving();
		$(id).style.top = "250px";
		$(id).style.left = "250px";
}
function stopMoving(){
		window.clearTimeout(moving);
}
function turnRed(){
document.getElementById("title").style.color = "red";
}
function turnYellow(){
document.getElementById("title").style.color = "yellow";
}
function turnBlack(){
document.getElementById("title").style.color = "black";
}
function annoyTheUser() {
    setInterval(function(){ alert("Isn't this fun?"); }, 10000);
}