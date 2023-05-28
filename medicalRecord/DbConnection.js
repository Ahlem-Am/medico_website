const mongoose=require('mongoose')
const dotenv =require ('dotenv');
dotenv.config();
const uri = "mongodb+srv://"+process.env.MONGODB_ATLAS_USERNAME+":"+process.env.MONGODB_ATLAS_PASSWORD+"@cluster0.ywolfba.mongodb.net/?retryWrites=true&w=majority";
const connection =()=>{mongoose.connect(
  uri,
  { useNewUrlParser: true, useUnifiedTopology: true }
)
.then(()=>console.log('connected'))
.catch(e=>console.log(e));
}

  module.exports=connection