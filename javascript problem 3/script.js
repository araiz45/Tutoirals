console.log("hello")

let a = prompt("Enter Base in CM");
let b = prompt("Enter Hypothenus in Cm");
let c = prompt("Enter perpendicular in Cm");

let s = (a + b + c)/2;
// let a = 4;


let area = Math.sqrt(s*((s-a)*(s-b)*(s-c)))
console.log(`semi parameter : ${s} and area is : ${area}`)


