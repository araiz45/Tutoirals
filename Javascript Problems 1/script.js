// Problem no 1

let day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
let time = new Date;
// let days = time.getDay();
let daynow = day[time.getDay()]
let root = document.getElementById("root");
let root2 = document.getElementById("root2");
let root3 = document.getElementById("root3");

// console.log(mon)
root2.innerHTML = daynow + " / ";
console.log("Todays day is: " + daynow);


setInterval(() => {
    let time = new Date;
    let hours = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    let c, j;
    let arr = {
        13 : 1,
        14 : 2,
        15 : 3,
        16 : 4,
        17 : 5,
        18 : 6,
        19 : 7,
        20 : 8,
        21 : 9,
        22 : 10,
        23 : 11,
        0 : 12,
        1 : 1,
        2 : 2,
        3 : 3,
        4 : 4,
        5 : 5,
        6 : 6,
        7 : 7,
        8 : 8,
        9 : 9,
        10 : 10,
        11 : 11 
    }
    // console.log(arr);
    if(hours < 12){
        hours = time.getHours();
        let j = arr[hours]
        // console.log(root)
        
        // console.log(`The Current Time is : ${hours} : ${min} : ${sec} AM`);
        this.root.innerHTML = "<p>" + j +" : " + min + " : " + sec + " A.M" + "</p>";
    }
    
    else if(hours >= 12){
        c = arr[hours];
        // console.log(this.root)
        // console.log(`The Current Time is : ${c} : ${min} : ${sec} PM`);
        this.root.innerHTML = "<p>" + c  +" : " + min + " : " + sec + " P.M" + "</p>";
    }
    // console.log(c);
    // console.log("Current time is : " + hours + ":" + min + ":" + sec);
    
}, 1000);



let mon = time.getMonth();
let monarr = {
    0 : "January",
    1 : "Februery",
    2 : "March",
    3 : "April",
    4 : "May",
    5 : "June",
    6 : "Jully",
    7 : "August",
    8 : "September",
    9 : "Octuber",
    10 : "November",
    11 : "December"
}
// console.log(mon)
let monthin = monarr[mon];
let date = time.getDate();
let year = time.getFullYear();
root3.innerHTML = monthin + " - " + date + " - " + year;
// console.log(monthin);

console.log(date);

// let reqsec = prompt ("Enter Seconds");
// reqsec = Number.parseInt(reqsec);
// let reqmin = prompt("Enter Minutes");
// reqmin = Number.parseInt(reqmin);
// let reqHours = prompt ("Enter Hours");
// reqHours = Number.parseInt(reqHours);
// console.log(reqHours, reqmin, reqsec);


// let i = reqsec; 
// let s = reqmin * 60;
// let f = reqHours * 3600;
// let numy = setInterval(() => {
//     console.log(f);
//     if(i == 0 && s == 0){
//         alert("time khantam")
//         clearInterval(numy)
//     }
//     i--;
//     s--;
//     f--;
// }, 1000);
