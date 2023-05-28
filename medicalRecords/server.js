const express=require('express')
const app=express()
const cors=require('cors')
const path=require('path')
const { multerUploads,dataUri } =require ('./middlewares/multer');

const dotenv=require("dotenv")
const { uploader, cloudinaryConfig } =require( './config/cloudinaryConfig')
const medicalRecord=require('./Router/medicalRecordRouter')
dotenv.config()
const Port = process.env.PORT || 3000;
const connection=require('./DbConnection')
const { createSecretKey } = require('crypto')
connection()


// parse form data 
app.use(express.urlencoded({ extended: false }))
// parse json 
app.use(express.json())
app.use(cors())
app.use('*', cloudinaryConfig);

app.use('/images',express.static(__dirname+'/images'))
/*app.get('/MyMedicalRecord/:id',(req,res)=>{
    res.sendFile(__dirname+'/index.html')
})*/

app.use('/medicalrecord',medicalRecord);

/*app.use('/',(req,res)=>{
    res.sendFile(__dirname+'/frontend/medicalDoc/index.html')
})*/
app.listen(Port, () => console.log(`Server started at http://localhost:${Port}`));