
function myFunction() {

	// Days of the week
	var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var months = ["January","February","March","April","May","June","July","August","September",
			"October","November","December"];
	
	// Create new Date based on current time	
	var myCurrDate = new Date();
	var n = (myCurrDate.getTimezoneOffset())/60;

	// get values(Day, Month, date, year, hour, minutes)
	var myDay = daysOfWeek[myCurrDate.getDay()];// Get current Day
	var myMonth = months[myCurrDate.getMonth()];	// Get current month
	var myDate = myCurrDate.getDate();	// Get current date
	var myYear = myCurrDate.getFullYear();	// Get current year
	var myHour = ("0" +myCurrDate.getHours()).slice(-2);	// Get current hour
	var myMin = ("0" + myCurrDate.getMinutes()).slice(-2); // Get current minutes
	
	// Add/subtract hours to date
    var germanDate = myCurrDate.addHours(n+2);	
	
	// Get values(Day, Month, date, year, hour, minutes)
	var myGermDay = daysOfWeek[germanDate.getDay()];// Get Day
	var myGermMonth = months[germanDate.getMonth()];	// Get month
	var myGermDate = germanDate.getDate();	// Get date
	var myGermYear = germanDate.getFullYear();	// Get year
	var myGermHour = ("0" +germanDate.getHours()).slice(-2);	// Get hour
	var myGermMin = ("0" + germanDate.getMinutes()).slice(-2); // get minutes
	
	// Gather Current Date
	var currDate = myDay + ", " + myMonth + " " + 
		myDate + ", " + myYear;
	var currTime = myHour + ":" + myMin; 
	
	// Gather German Date
	var germDate = myGermDay + ", " + myGermMonth + " " + 
		myGermDate + ", " + myGermYear;
	var germTime = myGermHour + ":" + myGermMin;
		
	// Print current time
    document.getElementById("currDay").innerHTML = "<span class = 'bold'>Your time: </span>" + currDate + " - <span class = 'bold'>"+currTime+"</span>";
	//document.getElementById("currTime").innerHTML =currTime;
	// Print german time
	document.getElementById("germDay").innerHTML = "<span class = 'bold'>Time in Germany: </span>" + germDate + " - <span class = 'bold'>"+germTime+"</span>";
	//document.getElementById("germTime").innerHTML = germTime;
}
/*
*	Function adds hours to current date
*/
Date.prototype.addHours = function(h){
    this.setHours(this.getHours()+h);
    return this;
}