//alert("Hello")

//console.log("one")
//console.info("two")
//console.warn("three")
//console.error("four")
//console.debug("five")
//console.clear()

// var firstname = "sahil";
// var lastname = "avaran"; //string
// let distanceFromOffice = 5.5; //number
// const isOnLeave = true; //boolean

// firstname = "nihal"; //reassign
// distanceFromOffice  = 6;
// isOnLeave = false; //const cannot be reassigned

// //let /const

// console.log(firstname + " "+lastname)

// let num1 =5;
// let num2 =7;

// console.log(typeof num1)

// num1 = 6;

//function is used to use again and again when we need.


function findsum(num1,num2) {
//paremeters
return num1 + num2;
}

// call,execute, run, invoke
//findsum(1, 3); //arguments
// let sum = findsum(5, 3);
// alert(sum);
// console.log(sum);
// let result = sum + 2;
// console.log(result);

// let age = 18;


// if(age >= 18) {
//     alert("Your application submitted");
// } else {
//     alert("You are not eligible at this age");
// }

// let color ="green";
// if(color === "orange") {
//     console.log("You like to eat orange!")
// }else if(color === "yellow") {
//     console.log("You like to eat a banana!")
// }else {
//     console.log("You dont like fruits")
// }


//DOM - Document object Model - Dom manipualtiom

function findFavouriteFruit() {
    const color = document.getElementById("color");

    // element.style.backgroundColor = "red";

//     if(color === "orange") {
//     console.log("You like to eat orange!")
// }else if(color === "yellow") {
//     console.log("You like to eat a banana!")
// }else {
//     console.log("You dont like fruits")
// }
}

// getter, setter

//string
//number
//boolean
//undefined
//null
//bigint
//symbol
//object - object,array,date 



// function abc() {

// return 3;
// }
// let result = abc();
// console.log(typeof result);


//funtions
// function greetings(name){
//     document.write("good mornning "+ name + "<br>")
// }
// greetings("john");
// greetings("john");

// function sum(num1, num2) {
//     document.write(num1 + num2);
// }
// sum(10,20);

//using return in funtion
// function sum(n1,n2){
// return n1+n2
// }
// var result = sum(10,20);
// document.write(result);

// student, staff, exam, fee
//OOP

let student = {firstName:"Aslam",lastName:"Hussain", age: 22, ispassed: true};

//property
//methods /funtions

const car ={
    model:"Nissan",
    drive: funtion () {
        console.log("booom");
    };
    };
    console.log(car.model);
