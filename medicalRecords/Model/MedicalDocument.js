const mongoose=require('mongoose')
const { Schema, model } = mongoose;
const timestampPlugin=require('./plugins/timestamp')


const MDocSchema = new Schema({
    patientId: {
        type:String,
        required:true }
      ,
    url:{
        type:String,
        required:true
    }
    

  });

  MDocSchema.plugin(timestampPlugin)
  
const MedicalDocument= model('MedicalDocument', MDocSchema);
module.exports= MedicalDocument