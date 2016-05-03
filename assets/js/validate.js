function validateForm() {
	var getName = document.getElementById('name').value;
	if( getName == "" || getName == null){
		alert("Please enter a name!");
		return false;
	}

	var getComment = document.getElementById('comment').textContent;
	if ( getComment == "" || getComment == null) {
		alert("You must enter a comment!");
		return false;
	}
	

}