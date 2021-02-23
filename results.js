//document.getElementById("cesd-num").innerHTML = localStorage.getItem("value");
var val = localStorage.getItem("value");
document.getElementById("cesd-num").innerHTML = val;
if(val>=16){
    document.getElementById("results-output").innerHTML = "You may be depressed.";
    document.getElementById("what-now").innerHTML = "Check out our resources to take the next step towards improving your mental health. You got this!";
}
else{
    document.getElementById("results-output").innerHTML = "You're not depressed!";
    document.getElementById("what-now").innerHTML = "If you'd like to learn more about mental health, check out our resources page by clicking this button!";
}