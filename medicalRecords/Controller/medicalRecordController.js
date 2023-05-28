const MR=require('../Model/MedicalRecord');
const { uploader} =require( '../config/cloudinaryConfig')
const { dataUri } =require ('../middlewares/multer');
const MedicalDocument=require('../Model/MedicalDocument')

/* ****************************** */
const getMR=async(req,res,next)=>{
    console.log(req.params.id)
    // the id in req params isthe patient id not the medical record id
    await MR.findOne({patientId:req.params.id})
    .then((mr)=>{
        console.log(mr)
        res.status(200).json(mr)})
    .catch(error=>res.status(404))
    
}
const get_mr=async(req,res,next)=>{
    // the id in req params isthe patient id not the medical record id
    await MR.findOne({patientId:"3"})
    .then((mr)=>{
        console.log(mr)
        res.status(200).json(mr)})
    .catch(error=>res.status(404))
    
}
/* ****************************** */

const createMR=async(req,res,next)=>{
    console.log("create mr")
    const obj={
        patientId:req.params.id,
        ...req.body
    }
    console.log(req.params)
    const x=await MR.findOneAndUpdate({patientId:req.params.id},obj,{
        new: true,
        upsert: true // Make this update into an upsert
      })
      res.json(x);
    
   
}

/* ******************************* */
const updateMR_From=async(req,res)=>{
    try{
    const mr=await MR.UpdateOne({patientId:req.params.id}, req.body,
        
        );
    
    res.status(200).json({
        message:"Success"
    
    });
    } catch (error) {
    res.status(500).send(error);
    }


}

/* ****************************** */
const deleteMR=async(req,res)=>{
    try {
        const mr = await MR.DeleteOne({patientId:req.params.id});
        if (!mr) res.status(404).send("No item found");
        res.status(200).json({
            message:"Success",
          
        });
        }
     catch (error) {
        res.status(500).send(error);
        }
}

/* ****************************** */
const getAllMedicalDoc=async(req,res)=>{
    console.log("hello ")
    const mds=await MedicalDocument.find({patientId:req.params.id})
    .then((mds)=>res.status(200).json(mds))
    .catch(error=>res.status(404).json(error))
}

/* ****************************** */
const addMedicalDoc=async(req,res)=>{
console.log("adding file")
    if(req.file) {
        console.log(dataUri(req).content)
        const file = dataUri(req).content;
        return uploader.upload(file).then((result) => {
        const image = result.url;
        console.log("hello"+req.params.id)
        const newdoc=new MedicalDocument({
        patientId:req.params.id,
        url:image})
    newdoc.save()
    
    return res.status(200).json({
    messge: 'Your image has been uploded successfully to cloudinary',
    data: {
    image}
    })
   
    }).catch((err) => res.status(400).json({
    messge: 'someting went wrong while processing your request',
    data: {
    err
    }
    }))
    }
}
/* ****************************** */
const getOneMedicalDoc=async(req,res)=>{
    const md=await MedicalDocument.findById(req.params.idDoc)
    .then((md)=>res.status(200).json(md))
    .catch(error=>res.status(404))
}

/***********************/ 
const affiche=(req,res)=>{
    console.log(req.body);
}
/* ****************************** */
const deleteMedicalDoc=async(req,res)=>{
    try{
    const md= await MedicalDocument.deleteOne({_id:req.params.idDoc});
    if (!md) res.status(404).send("No item found");
        res.status(200).json({
            message:"Success",
          
        });
        }
     catch (error) {
        res.status(500).send(error);
        }
}

/* ****************************** */

module.exports={get_mr,getMR,
    createMR,
    updateMR_From,
    deleteMR,
    getAllMedicalDoc,
    addMedicalDoc,
    getOneMedicalDoc,
    deleteMedicalDoc,
    affiche
  }