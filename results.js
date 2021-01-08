/*
calculate the results here
1. get the values of the selected radio buttons
2. add em and assign to sum
3. if (sum >=16)
    depressed
else
    not depressed
based on score the html code for the results page will change (h1, stating result)
*/

var myLink = document.getElementById('results-btn');

myLink.onclick = function(){
    let numberOfQuestion=20;
    valArr=new Array(numberOfQuestion);
    //var temp=1;
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
    //console.log(valArr);
    //valArr=new Array(numberOfQuestion);
    //for(var i=0;i<numberOfQuestion;i++){
    //    valArr.push(input[i].value);
    //    console.log(valArr);
    // }
    console.log(sum);
    if(sum>=16){
        alert("Your score is "+sum+", you may be depressed.");
    }
    else{
        alert("Your score is "+sum+", you are not depressed!");
    }


    //changing results page
    /*
    if(sum>=16){
        var newWin = window.location.replace("http://localhost/1-WebProject/results.html");
        newWin.onload = function(){
            newWindocument.getElementById("cesd-num").innerHTML = sum;
            newWin.document.getElementById('results-output').innerHTML = "You may be depressed.";
          };
    }
    else{
        var newWin = window.location.replace("http://localhost/1-WebProject/results.html");
        newWin.onload = function(){
            newWindocument.getElementById("cesd-num").innerHTML = sum;
            newWin.document.getElementById('results-output').innerHTML = "You're not depressed.";
          };
    }
    */

}