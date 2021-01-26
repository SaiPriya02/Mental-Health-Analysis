var myLink = document.getElementById('results-btn');

myLink.onclick = function(){
    let numberOfQuestion=20;
    valArr=new Array(numberOfQuestion);
    const list = document.querySelectorAll('input[type=radio]:checked');
    //console.log(list);
    for (let l of list) {    
        var temp=parseInt(l.value);
        //console.log(temp);
        valArr.push(temp);
    }
    // function for adding two numbers
    const add = (a, b) => a + b// use reduce to sum our array
    const sum = valArr.reduce(add)
    console.log(sum);
    if(sum>=16){
        alert("Your score is "+sum+", you may be depressed.");
    }
    else{
        alert("Your score is "+sum+", you are not depressed!");
    }
    /*
    //first it has to load results page
    window.addEventListener("load", MyFunction);
    function MyFunction(){
        document.getElementById("results-output").innerHTML = "it worked";
    }
    */

    /*
    var newWin = window.location.replace("http://localhost/1-WebProject/results.html");
        newWin.onload = function(){
            newWindocument.getElementById("cesd-num").innerHTML = sum;
            newWin.document.getElementById('results-output').innerHTML = "You may be depressed.";
          };
    */
}