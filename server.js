const express = require('express');
const admin = require('firebase-admin');
const bcrypt =require('bcrypt');
const path = require('path');

var admin = require("firebase-admin");

let serviceAccount = require(".ecom-project1-firebase-adminsdk-ktbty-c6c2811f15.json");

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount)
});

let staticPath = path.join(__dirname,);

const app = express();

app.use(express.static(staticPath));
app.use(express.json());

app.get("/", (req, res) => {
    res.sendFile(path.join(staticPath, "homePage.html"));
})

app.get(',signUp', (req, res) => {
    res.sendFile(path.join(staticPath, "signUp.html"));
})

app.post('signUp', (req, res) => {
    console.log(req.body);
    res.json('data recieved');
})

app.get('/404', (req, res) => {
    res.sendFile(path.join(static, "404.html"))
})

app.use((req, res) => {
    res.redirect('/404');
})

app.listen(3000, () => {
    console.log('listening on port 3000......');
})

