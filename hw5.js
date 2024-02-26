const personAge = 20; 
const personStatus = (personAge >= 18) ? "Adult" : "Minor";
console.log(personStatus); 


const user = {
  username: "Alice",
  age: 25,
  location: "London"
};

for (const key in user) {
  console.log(`${key}: ${user[key]}`);
}

const initialNumbers = [2, 4, 6, 8, 10]; 
const squaredNumbers = initialNumbers.map(num => num * num);
console.log(squaredNumbers); 
