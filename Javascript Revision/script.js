console.log("hello")
// ----------------------------------- Promise Api ------------------------



// let p1 = new Promise ((ressolve, reject)=>{
//     setTimeout(() => {
//         ressolve("Value 1")
//     }, 6000);
// })
// let p2 = new Promise ((ressolve, reject)=>{
//     setTimeout(() => {
//         // ressolve("value 2")
//         reject(new Error('error'))
//     }, 2000);
// })
// let p3 = new Promise ((ressolve, reject)=>{
//     setTimeout(() => {
//         ressolve("Value 3")
//     }, 3000);
// })


// // let promise_all = Promise.all([p1, p2, p3]);
// // let promise_all = Promise.allSettled([p1, p2, p3]);
// // let promise_all = Promise.race([p1, p2, p3]);
// // let promise_all = Promise.any([p1, p2, p3]);
// // let promise_all = Promise.resolve(9);
// // let promise_all = Promise.reject(new Error("hello Pakistan !!!"));

// promise_all.then((value)=>{
//     console.log(value)
// })





// --------------------------------------- Async / Await -------------------------



// const pro = async()=>{
//     let karachiWeather = new Promise ((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve("34 deg");
//         }, 2000);
//     })


//     let LahoreWhether = new Promise((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve("23 deg")
//         }, 3000);
//     })
//     console.log("Please Wait While We Fetch Karachi Weather...")
//     let KHIW = await karachiWeather;
//     console.log("Karachi Weather Has been Fetch and the weather is" + KHIW)
//     console.log("Please Wait While We Fetch Lahore Weather...")
//     let LHW = await LahoreWhether;
//     console.log("Lahore Weather Has been Fetch and the weather is" + LHW)

//     return [KHIW, LHW]
    
// }



// const bro = async()=>{
//     console.log("hello This Bro Is Waiting")
// }


// const tine = async() =>{
//     console.log("Welcome to Nation Weather Center");
//     let a = await pro();
//     let b = await bro();


// }
// tine()
// // console.log(a);


// // a.then((value)=>{
// //     console.log(value)
// // })













// ======================================= try / catch ===================



// setTimeout(() => {
//     console.log("Your System Is Starting Hacking ....")
// }, 1000);

// try{
//     setTimeout(() => {
//         try {
            
//             console.log(injor)
//         } catch (error) {
            
//         }
        
//     }, 100);
// }
// catch(err){
//     console.log("This is your new error enjoy "+ err)
// }

// setTimeout(() => {
//     console.log("Your System Is Starting Hacked ....")
// }, 2000);
// setTimeout(() => {
//     console.log("Your Instagram Is Starting Hacking ....")
// }, 3000);
// setTimeout(() => {
//     console.log("Your Instagram Is Starting Hacked ....")
// }, 4000);




// ============================================ try/catch ========================================
// try {
//     let con = prompt("Enter Your Age");
//     con = Number.parseInt(con);
//     if (con>150 || con <=0) {
//         throw new RangeError("Aaraiz is not a good boy")
        
//     }
//     else{
//         console.log("Done")
//     }
// } catch (error) {
//     console.log(error.name)
//     console.log(error.message)
//     console.log(error.stack)
// }


// ------------------------------------------- Try . Catch Finallly ====================================
// const fonr = () =>{
//     try{
//         let a = 0;
//         // console.log(program)
//         console.log("Your Code Has been Run Sucessfully...")
//         return;
//     }catch(err){
//         console.log(new Error("hello I am an error"));
//     }
    
//     finally{
//         console.log('Pakistan Zindabad')
//     }

// }

// fonr();
// console.log("ends")



// ------------------------------------------ Practice Set --------------------------------------


// _____________________________________________ Question no 1 _____________________________________________
// const loadScript = (src) => {
//     let p = new Promise((ressolve, reject) => {
//         var script = document.createElement("script");
//         script.src = src;
//         script.onload = () => {
//             // console.log("SRC: " + src);
//             ressolve(src);
//         }
//         script.onerror = () => {
//             // console.log("On Loaded Error with SRC : " + src);
//             reject(new Error("Got Some Error With Script : " + src))
//         }
//         document.body.appendChild(script);
//     })
//     return p;

// }

// let p = loadScript("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js")


//     p.then((value) => {
//         console.log("Script :" + value + " has been Loaded");
//         return loadScript("https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js")


//     }).then((value)=>{
//         console.log("Script: " + value + " has been loaded");
//         return loadScript("https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js")
//     }).then((value)=>{
//         console.log(`This Script ${value} has been loaded.`)
//         console.log(`All Script has been loaded`)
//     })
    
//     .catch((error)=>{
//         console.log(`Failed to Execute ${error} Sorry!`)
//     })
// _____________________________________________ Question no 2 _____________________________________________
// const loadScript = async(src)=>{
//     let p = new Promise ((ressolve, reject)=>{
//         var script = document.createElement("script");
//                 script.src = src;
//                 script.onload = () =>{
//                     // console.log("SRC: " + src);
//                     ressolve(src);
//                 }
//                 script.onerror = () =>{
//                     // console.log("On Loaded Error with SRC : " + src);
//                     reject(new Error ("Got Some Error With Script : " + src))
//                 }
//                 document.body.appendChild(script);
//     })

//     return p;
// }

// const nowFunc = async()=>{
//     let p2 = await loadScript("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js") 
//     alert("The Script has been loaded " + p2);
//     let p3 = await loadScript("https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js")
//     alert('Script 2 has been loaded Sucessfully ' + p3); 
// }

// nowFunc();


// _____________________________________________ Question no 3 _____________________________________________


// let p = new Promise ((ressolve, reject)=>{
    //     setTimeout(() => {
        //         reject(new Error("This is an Error"));
        //     }, 3000);
        // })
        
        // let a = async()=>{
            //     try{
                //         let c = await p;
                //         console.log(c);
                //     }catch(err){
                    //         console.log(err);
                    //     }
                    // }
                    
                    
                    // a();
// _____________________________________________ Question no 4 _____________________________________________



// let p1 = async()=>{
//     return new Promise ((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve(30);
//         }, 2000);
//     })
// }
// let p2 = async()=>{
//     return new Promise ((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve(20);
//         }, 3000);
//     })
// }
// let p3 = async()=>{
//     return new Promise ((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve(50);
//         }, 4000);
//     })
// }




// const run = async()=>{
//     console.time("run")
//     // let a1 = await p1();
//     // let a2 = await p2();
//     // let a3 = await p3();
//     let a1 = p1();
//     let a2 = p2();
//     let a3 = p3();
//     // console.log(a1, a2, a3)
//     let allPro = await Promise.all([a1, a2, a3]);
//     console.log(allPro);
//     console.timeEnd("run")

    
// }
// run();


/*
// Problem number 4

let p1 = async () => {
    return new Promise((resolve, reject) => {
            setTimeout(() => {
                    resolve(10)
            }, 2000)
    })
}
let p2 = async () => {
    return new Promise((resolve, reject) => {
            setTimeout(() => {
                    resolve(20)
            }, 1000)
    })
}
let p3 = async () => {
    return new Promise((resolve, reject) => {
            setTimeout(() => {
                    resolve(30)
            }, 3000)
    })
}

const run = async () => {
    console.time("run")
    // let a1 = await p1() // Fetch first 10 products from the database
    // let a2 = await p2() // Fetch another 10 products from the database
    // let a3 = await p3() // Fetch yet another 10 products from the database


    let a1 = p1() // Fetch first 10 products from the database
    let a2 = p2() // Fetch another 10 products from the database
    let a3 = p3() // Fetch yet another 10 products from the database
    let a1a2a3 = await Promise.all([a1, a2, a3])
    console.log(a1a2a3)
    // console.log(a1, a2, a3)
    console.timeEnd("run")
}

run()

*/










// -------------------- Fetch Api ------------------------


// let p = fetch ("https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/2023-03-23/currencies/usd.json");

// p.then((value)=>{
//     console.log(value.status)
//     console.log(value.ok)

//     console.log(value.headers)
//     return value.json();
// }).then((value)=>{
//     for(let b in value){

//         // let c = value[b];
//         console.log(value[b]);
//             console.log(value[b]['pkr']);
//     }

// })




// -------------------------------------- Fetch Api Post - Request -----------------------------------


// const todoFunc = async (todo) => {

// let options = {
//     method : 'Post',
//     headers : {
//         'Content-Type' : 'application/json'
//     },
//     body: JSON.stringify(todo)
// }


// let p = await fetch('https://jsonplaceholder.typicode.com/posts', options)
// let response = await p.json()
// return response
// //   .then((response) => response.json())
// //   .then((json) => console.log(json));
// }

// const newFunc = async (id) => {
//     let response = await fetch('https://jsonplaceholder.typicode.com/posts/' + id);
//     let p = response.json();
//     return p;
// }
// const myFunc = async () => {
//     let todo = {
//         title : 'Araiz',
//         body : 'Bhai',
//         userId : 1222
//     }
//     let todor = await todoFunc(todo);
//     console.log(todor)
//     console.log(await newFunc(101));
// }

// myFunc();




// -------------------------------------- Cookie ----------------------------------

// document.cookie = "User: Araiz"
// let con = prompt("set key")
// let con2 = prompt("set value")
// document.cookie = encodeURIComponent(con) + " = " + encodeURIComponent(con2)
// alert(document.cookie)



// -------------------------- Prototype ---------------------------------------


// let a = {
//     name : "Injir",
//     language : "Pasto",
//     run: () => {
//         alert("Self Running...")
//     }

// }

// console.log(a);

// let p = {
//     run: ()=>{
//         alert("running...")
//     }
// }

// p.__proto__ = {
//     nationality: "Pk"
// };

// a.__proto__ = p;
// a.run();
// console.log(a.nationality);











// ================================================= Static Method -=================================

// class Animal {
//     constructor(name){
//         this.name = Animal.capitalize(name);

//     }

//     walk(){
//         console.log(`Animal ${this.name} is walking`)
//     }

//     static capitalize (name) {
//         return name.charAt(0).toUpperCase() + name.substr(1, name.length).toLowerCase();
//     }
// }

// let monkey = new Animal("cHimpu")


// monkey.walk();




// ===================================================== Getter / Setter / inhertenceOf/



// class Animal{
//     constructor(name){
//         this._name = name;
//     }

//     fly(){
//         console.log("Mein Urra Mein Urra Jangle Ki Sher Mein")
//     }
//     get name(){
//         return this._name;
//     }
//     set name(newName){
//        this._name = newName;
//     }

// }
// class Rabbit extends Animal{
//     eat(){
//         console.log("Eating Carrot")
//     }
// }
// let j = new Rabbit ("bruno");
// j.fly();

// console.log(j.name)
// j.name = "jab"
// console.log(j.name)
// let c = 45;

// console.log(j instanceof Animal)
// console.log(j instanceof Animal)
// console.log(c instanceof Animal)

// ----------------------------------------- Practice Set --------------------------------------------



// class Mathematics {
//     constructor(real, imaginary){
//         this.real = real;
//         this.imaginary = imaginary;
//     }
//     add(num){
//         this.real = this.real + num.real
//         this.imaginary = this.imaginary + num.imaginary
//     }
//     get real(){
//         return this._real;
//     }
//     get imaginary(){
//         return this._imaginary;
//     }

//     set imaginary (newImaginary) {
//         this._imaginary = newImaginary;
//     }
//     set real (newReal) {
//         this._real = newReal;
//     }
// }


// let a = new Mathematics(1, 3)
// let b = new Mathematics(6, 5)
// a.real = 10;
// a.imaginary = 10;
// a.add(b);

// console.log(`${a.real}+${a.imaginary}i`)




// class human {
//     constructor(name, favfood){
//         this.name = name;
//         this.favfood = favfood;
//     }

//     walk(){
//         console.log(this.name +": Human is walking")
//     }
// }


// class students extends human{
//     walk(){
//         console.log(this.name + ": Student is Walking")
//     }
// }


// let a = new students ('Araix');
// a.walk();


// console.log(a instanceof human)




//--------------------------------------------------- IIFE ------------------------------


// let a = ()=>{
//     return new Promise ((ressolve, reject) => {
//         setTimeout(() => {
//             ressolve(342);
//         }, 2000);
//     })
// }

// (async ()=>{
//     let b = await a();
//     console.log(b);
//     let c = await a();
//     console.log(c);
//     let d = await a();
//     console.log(d);
// })()








// ------------------------------------ Spread Operator / Destructuring -----------------------------
// let arr = [3, 4, 5, 6, 7, 8, 9];
// let [a, b, c, d, ...rest] = arr;
// console.log(a, b, c ,d , rest)



// let arr = [3, 4, 5, 6, 7, 8, 9];
// let [a, , , , ...rest] = arr;
// console.log(a, rest)



// let obj = {a: 1, b:2};
// let {a, b} = obj;
// console.log(a,b)



// let arr = [3, 4, 5, 6, 7, 8, 9];
// let obj = {...arr};
// console.log(obj)


// function sum(v1, v2, v3){
//     let b = v1 + v2 + v3;

//     return b;

// }


// console.log(sum(...arr))


// let obj = {
//     name : "harry",
//     company : "xyz",
//     address: 'xbs'
// }


// // console.log({...obj, name: "Johm", company: 'abc'})
// console.log({ name: "Johm", company: 'abc', ...obj})



// ---------------------------------------------------- Local / Global / Function Scope ----------------------


// let a = 9;
// {
//     let b = 3;
//     console.log(a);
// }

// console.log(a, b)


// ----------------------------------------------------- Hoisting In Js -------------------------------

// greet();

// function greet (){

//     console.log("Good Afternoon")
// }



// ------------------------------------------ Clourses ---------------------------


// function init() {
//   var name = 'Mozilla'; // name is a local variable created by init
//   function displayName() {
//     // displayName() is the inner function, a closure
//     console.log(name); // use variable declared in the parent function
//   }
//   name = "Harry"
//   return displayName;
// }
// let c = init();
// c()


// function returnFunc() {
//     const x = () => {
//       let a = 1
//       console.log(a)
//       const y = () => {
//         // let a = 2
//         console.log(a)
//         const z = () => {
//           // let a = 3
//           console.log(a)
//         }
//         z()
//       }
//       a = 999
//       y()
//     }
//     return x
//   }
  
//   let a = returnFunc()
//   a()
  
  


// ------------------------------------------ Revisited Arrow Function --------------------------
// let obj = {
//     name : "Araix",
//     job: "Freelance",
//     exp: 49,
//     show: function(){
//         setTimeout(() => {
//             console.log(`${this.name} is a employee with ${this.exp} years of experience as ${this.job}`);
            
//         }, 3000);
//     }
// }


// obj.show();





// -------------------------------------------------------- Practice Set -------------------------------



// const a = (text) => {
//     return new Promise ((ressolve, reject)=>{
//         setTimeout(() => {
//             ressolve(text)
//         }, 3000);
//     })
// }


// (
//     async () =>{
//         let text = await a("Hello")
//         console.log(text);
//         let text2 = await a("World")
//         console.log(text2)
//     }
// )()



// function sun(a, b, c){
//     return a + b + c;
// }


// let arr = [1, 4, 6];

// console.log(sun(...arr))



const a = (text, n) => {
        return new Promise ((ressolve, reject)=>{
            setTimeout(() => {
                ressolve(text)
            }, 1000 * n);
        })
    }
    


(
    async () =>{
        let text = await a("I'm Ressolved After 1 second", 1)
        console.log(text);
        let text2 = await a("I'm Ressolved After 4 seconds" ,4)
        console.log(text2)
    }
)()
