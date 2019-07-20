//1.
class Object {
    constructor(name,company, salary){
        this.name = name;
        this.company = company;
        this.salary = salary;
        this.position = this.setSalary(salary);

    }
    setSalary = function(salary){
          return this.setPosition(salary)  
    };
    setPosition(){
        if(this.salary <= 30000){
            return 'employee';
        }else if(this.salary > 30000 && this.salary <= 50000){
            return 'director';
        }else if(this.salary > 50000){
            return 'boss';
        }
    }
    getInfo(){
        return `Name: ${this.name}, Company: ${this.company}, Position: ${this.position}, Salary:${this.salary} den.`;
    }
}       
let person1 = new Object ("Monika","EVN",25000);
let person2 = new Object ("Sanja","MON",55000);
let person3 = new Object ("Nikolona","ASP",45000);
//console.log(person1.getInfo());
//console.log(person2.getInfo());
//console.log(person3.getInfo());

let lists = [person1.getInfo(),person2.getInfo(),person3.getInfo()];
let ul = document.createElement("ul");
document.getElementById('myList').appendChild(ul);
let li = document.createElement("li");
 lists.forEach(function(list){
    var li = document.createElement('li');
    ul.appendChild(li);
    li.innerHTML += list;
});


//2.
let cubeSize = prompt('What is the cube size?');
class Cube {
    constructor (side){
        this.side = side;
    }
    area() {
        return 6 * `${this.side}` * `${this.side}`;
    };
    perimetar(){
        return 12 * this.side;
    };
}
let cube = new Cube (cubeSize);
console.log("Area =", cube.area());  
console.log("Perimetar =", cube.perimetar());

//3.
let _from = prompt('Еnter your email:');
let _to = prompt('Please enter the email address of the recipient:');
let _subject = prompt('Subject:');
let _message = prompt('Enter your message:');
class Email {
    constructor(from,to,subject,message){
        this.from = from;
        this.to = to;
        this.subject = subject;
        this.message = message;
    }
    getFrom(){
        return `From: ${this.from}`;
    }
    getTo(){
       return `To: ${this.to}`;
    }
    getSubject(){
        return `Subject: ${this.subject}`;
    }
    getMessage(){
        return `Message: ${this.message}`;
    }
}
let email = new Email(_from,_to,_subject,_message);
document.getElementById('td1').innerHTML = email.getFrom();
document.getElementById('td2').innerHTML = email.getTo();
document.getElementById('td3').innerHTML = email.getSubject();
document.getElementById('td4').innerHTML = email.getMessage();
