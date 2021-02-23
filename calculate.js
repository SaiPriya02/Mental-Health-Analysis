var myLink = document.getElementById("results-btn");

// result.onsubmit = () => {};

myLink.onclick = () => {
  let numberOfQuestion = 20;
  const valArr = new Array(numberOfQuestion);
  const list = document.querySelectorAll("input[type=radio]:checked");
  //console.log(list);
  for (let l of list) {
    var temp = parseInt(l.value);
    //console.log(temp);
    valArr.push(temp);
  }
  // function for adding two numbers
  const add = (a, b) => a + b; // use reduce to sum our array
  const sum = valArr.reduce(add);
  console.log(sum);
  //this sum has to be stored in db in order to be accessed
  //   export default sum;
  window.location.href = "results.html";
  //   return sum;
  localStorage.setItem("value", sum);
};
