let name = prompt("Enter Your name");
let fname = prompt("Enter Your Father name");
let cnic = prompt("Enter Your CNIC");
let fcnic = prompt ("Enter Your Father's CNIC");
let phone = prompt("Enter Your Phone Number");
let email = prompt("Enter Your Email");
let card = document.getElementById("card")
let con;


console.log(name, fname, cnic, fcnic, phone, email)

        card.innerHTML = `<div class="entity"> Name : ` + name + `</div>` + `<div class="entity"> Father Name : ` + fname + `</div>` + `<div class="entity"> CNIC : ` + cnic + `</div>` + `<div class="entity"> Father's CNIC : ` + fcnic + `</div>` + `<div class="entity"> Phone Number : ` + phone + `</div>` + `<div class="entity"> Email : ` + email + `</div>`;
setTimeout(() => {
    con = confirm("Do You Want to Print This");
    if(con){
        window.print()
    }


}, 10000);