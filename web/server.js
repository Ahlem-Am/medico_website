const express = require('express')
const request = require('request')
let fs = require('fs');
const fileUpload = require('express-fileupload');
const FormData=require('form-data')
const path = require('path')
const cors = require('cors')
//const { multerUploads,dataUri } =require ('../middlewares/multer');
const fetch = (...args) => import('node-fetch').then(({ default: fetch }) => fetch(...args));
const app = express()
app.use(cors())
app.use(fileUpload());
app.use('/upload', express.static('images'));
//setting view engine to ejs
app.set("view engine", "ejs");
const port = 3030
// parse form data 
app.use(express.urlencoded({ extended: false }))

app.use(express.static('public'));
// parse json 
app.use(express.json())
app.get('/', (req, res) => {
    res.render("home.ejs")
})

/************************************** */
app.get('/account', (req, res) => {
    res.render("account.ejs")
})
app.get('/rdv', (req, res) => {
    res.render("rdv.ejs")
})
app.get('/doctor', (req, res) => {
    res.render("doctor.ejs")
})
/************************************** */
app.get('/login', (req, res) => {
    res.render("authView/login.ejs")
})
app.post('/login',async (req, res) => {

    body = JSON.stringify(req.body);
const formdata=new FormData(body)

    var response = await fetch("http://nginx:8080/loginuser", { method: "POST",
    headers:{
        'Content-Type': 'application/json',
       
    }, body })
    var response = await response.json()
    console.log(response)
    if (response.message != "Logged in!") {
        res.redirect("/login");
    }
    else {

        res.redirect("/index");
      

    }

})

app.get('/register', (req, res) => {
    res.render("authView/register.ejs")
})
app.post('/registration',async (req, res) => {

    body = JSON.stringify(req.body);
const formdata=new FormData(body)
    console.log(body)
    var response = await fetch("http://nginx:8080/signupuser", { method: "POST",
    headers:{
        'Content-Type': 'application/json',
       
    }, body })
    var response = await response.json()
    console.log(response)
    if (response.message != "Registered!") {
        res.redirect("/register");
    }
    else {

        res.redirect("/index");
      

    }

})

app.get('/index', (req, res) => {
    res.render("index.ejs")
})
/************************************** */
app.get('/historical', (req, res) => {
    res.render("historical.ejs")
})
/*******************************************/
app.get('/medical_record', async (req, res) => {
  
    
     const response=await fetch("http://nginx:8080/medicalrecord")
      const data=await response.json();
      res.render('medicalRecordView/Record',
      { msg: data })
    
}
    
)

app.get('/medical_record_index', async (req, res) => {

    res.render('medicalRecordView/index')
})
app.post('/medical_record_index', async (req, res) => {
    delete req.body._id
    delete req.body.ip
    delete req.body.submission_id
    delete req.body.formID


    delete req.body.website
    delete req.body.simple_spc
    delete req.body.event_id
    delete req.body.validatedRequiredFieldIDs


    const x =
    {
        ...req.body
    }

    const data = await fetch(
        "http://nginx:8080/medicalrecord/3", {
        method: "POST",
        body: JSON.stringify(x),
        headers: { 'Content-Type': 'application/json' }
    })

    console.log(data)

 res.redirect('/medical_record')


}
)


/*******************************************/
app.get('/medical_Doc', async (req, res) => {

    const response = await fetch("http://nginx:8080/medicaldoc", {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin:': '*'
      });
      
      // Storing data in form of JSON
      var data = await response.json();
      console.log(data);
    res.render('MedicalDocView/index.ejs', { data: data })
}
)
/*******************************************/

app.get('/diseasePrediction_index', async (req, res) => {

    res.render('PredictionView/index.ejs')
})

app.get('/diabetes_index', async (req, res) => {
    res.render('PredictionView/diabetes_index.ejs')
})

app.get('/heart_index', async (req, res) => {
    res.render('PredictionView/heart_index.ejs')
})

app.get('/kidney_index', async (req, res) => {
    res.render('PredictionView/kidney_index.ejs')
})

app.get('/liver_index', async (req, res) => {
    res.render('PredictionView/liver_index.ejs')
})

app.get('/breast_cancer_index', async (req, res) => {
    res.render('PredictionView/breast_cancer_index.ejs')
})

app.get('/malaria_index', async (req, res) => {
    res.render('PredictionView/malaria_index.ejs')
})


app.get('/diabetes', async (req, res) => {
  
        res.render('PredictionView/diabetes.ejs', { alert: "" })
})

app.get('/heart', async (req, res) => {
    res.render('PredictionView/heart.ejs', { alert: "" })
})

app.get('/kidney', async (req, res) => {
    res.render('PredictionView/kidney.ejs', { alert: "" })
})

app.get('/liver', async (req, res) => {
    res.render('PredictionView/liver.ejs' ,{ alert: "" })
})

app.get('/breast_cancer', async (req, res) => {
    res.render('PredictionView/breast_cancer.ejs', { alert: "" })
})

app.get('/malaria', async (req, res) => {

    res.render('PredictionView/malaria.ejs', { alert: "" })
})

app.get('/*verify', async (req, res) => {
    url = req.originalUrl.replace('verify', '')
    uri='PredictionView'+url+'.ejs'
    res.render(uri, {
        alert: "Please enter valid Data"
    })
})
app.get('/predict1', async (req, res) => {

    res.render('PredictionView/predict.ejs', { result: "1" })
})
app.get('/predict0', async (req, res) => {

    res.render('PredictionView/predict.ejs', { result: "0" })
})

app.get('/malariaPredict1', async (req, res) => {

    res.render('PredictionView/malaria_predict.ejs', { result: "1" })
})
app.get('/malariaPredict0', async (req, res) => {

    res.render('PredictionView/malaria_predict.ejs', { result: "0" })
})

app.post('/diabetes', async (req, res) => {
    body = JSON.stringify(req.body);
    body = body.replace("{", "")
    body = body.replace("}", "")
    body = body.replace(/"/g, "")
    body = body.replace(/:/g, "=")
    body = body.replace(/,/g, "&")
    console.log(body)
    body = new URLSearchParams(body)
    console.log(body)
    var response = await fetch("http://nginx:8080/diseaseprediction", {  method: "POST",
    body})
    console.log(response)
    var response = await response.json()
    console.log("hello")
    console.log(response.message)
   
        if(response.message == "1")
        res.redirect("/predict1");
        else
        res.redirect("/predict0");

    console.log("bye")
}
)

app.post('/Malaria/predictByimg', async (req, res) => {

  if(req.files)  {

    const { image } = req.files;

    // If no image submitted, exit
    if (!image) return res.sendStatus(400);

    // Move the uploaded image to our upload folder
    image.mv(__dirname + '/upload/' + image.name);

    const filePath =  __dirname + '/upload/' + image.name;
    const form = new FormData();
    const stats = fs.statSync(filePath);
    const fileSizeInBytes = stats.size;
    const fileStream = fs.createReadStream(filePath);

    form.append('image', fileStream, { knownLength: fileSizeInBytes });

    fetch("http://127.0.0.1:5000/malariapredict",
        { method: "POST",
        body: form})
    .then((res)=>
    
        res.json()
    )
    .then((response)=>
    {
        if(response.message == "1")
        res.redirect("/Malariapredict1");
        else
        res.redirect("/Malariapredict0");

    }
    )
    .catch((err)=> {    url = req.originalUrl.replace('/predictByimg', '')
    alert = "Please enter valid Data";
    uri =url + "verify";
    res.redirect(uri);})

    
  }
  else{
    url = req.originalUrl.replace('/predictByimg', '')
    alert = "Please enter valid Data";
    uri =url + "verify";
    res.redirect(uri);
  }
  console.log("bye")
})
/*******************************************/

app.listen(port, () => {
    console.log(`server running  on ${port}  `)
})