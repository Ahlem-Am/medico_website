const mongoose=require('mongoose')
const { Schema, model } = mongoose;
const timestampPlugin=require('./plugins/timestamp')


const MRSchema = new Schema({
  patientId:{
    type:String
     },

  "patientFirstName": {
    type:String,
   
     },

  "patientLastName": {
      type:String,
    
       },
       
  "birth[Month]": {
        type:String,
        
         },
   "birth[Day]": {
          type:String,
          
           },
    "birth[Year]": {
            type:String,
            
             },
    recentPhysicalExam:{type:String},
    currentHealthProblems:{type:String},
    underMedicalCare:{type:String},
    surgeryIllness:{type:String},
    hospitalizations:{type:String},
    MH_Details:{type:String},
    details:{type:String},

 

    "chronic":[
      String
    ],
    
    "chronic[other]":[String],

    tobacoo:{type:String},
    alcohol:{type:String},
    caffeine:{type:String},
    
    'allergies': [String],
    
    'allergies[other]': [String],
    
    
    'familyhistory':[String],
    
    'familyhistory[other]':[String],
   

    "immunizations":[String],
    "immunizations[other]":[String],


    mentalhealthproblem:{type:String},
    counselor:{type:String},
    experiences: {type:String},
    additionalcomments: {type:String},

   
      
    

  });

  MRSchema.plugin(timestampPlugin)
  
const mr = model('MedicalRecord', MRSchema);
module.exports= mr