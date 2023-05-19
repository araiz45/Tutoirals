// var pdf = require("pdf-node");
// var fs = require("fs");

// // Read HTML Template
// var html = fs.readFileSync("template.html", "utf8");
// var options = {
//     format: "A3",
//     orientation: "portrait",
//     border: "10mm",
//     header: {
//         height: "45mm",
//         contents: '<div style="text-align: center;">Author: Shyam Hajare</div>'
//     },
//     footer: {
//         height: "28mm",
//         contents: {
//             first: 'Cover page',
//             2: 'Second page', // Any page number is working. 1-based index
//             default: '<span style="color: #444;">{{page}}</span>/<span>{{pages}}</span>', // fallback value
//             last: 'Last Page'
//         }
//     }
// };

// var users = [
//     {
//         name: "tom",
//         age: "21",
//     },
//     {
//         name: "dick",
//         age: "23",
//     },
//     {
//         name: "harry",
//         age: "29",
//     },
// ];
// var document = {
//     html: html,
//     data: {
//         users: users,
//     },
//     path: "./output.pdf",
//     type: "pdf",
// };


// pdf(document, options)
//     .then((res) => {
//         console.log(res);
//     })
//     .catch((error) => {
//         console.error(error);
//     });











// -------------------------------- Import Modules ====-----------------------------------


// // const {hello, ahello} = require ("./module1");
// import araix, {hello, ahello} from "./module2.js"
// hello();
// ahello("Rehan")
// ahello("Ismail")
// araix()



// ---------------------------------- Regular Expression ---------------------------
const regex = /(abc){2}/gi
let a = "abc. Araix is a very very very nice very abc has been abc now araiz Abcabc";

console.log(a.replace(regex, "Good"));
