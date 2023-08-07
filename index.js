const express = require("express");
const res = require("express/lib/response");
const port = 3000;
const app =express();
const path = require('path');


const publicDirectory = path.join(__dirname,'./public');

const db = mysql.createConnection({
    host: "localhost" ,
    user: "root" ,
    password: "",
    database: "login"
});

db.connect((error)=>{
    if(error){
        console.log(error)
    }
    else{
        console.log("sql connected successfully......")
    }
});

app.get('/miniproject', (req, res) => {
        res.sendFile(path.join(__dirname,'miniproject.html'))
        
      });
      app.get('/register', (req, res) => {
        res.sendFile(path.join(__dirname,'register.html'))
        
      });
app.listen(3000,()=>{
    console.log(`The port is listening at https://localhost:${port}`);
})