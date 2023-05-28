const express=require('express')
const router=express.Router()
const { multerUploads,dataUri } =require ('../middlewares/multer');

const{get_mr,
    getMR,
    createMR,
    updateMR_From,
    deleteMR,
  getAllMedicalDoc,
    addMedicalDoc,
    getOneMedicalDoc,
    deleteMedicalDoc,affiche

    
}=require('../Controller/medicalRecordController');
//.get(getMR)
router.route('/').get(get_mr);
router.route('/:id').get(getMR).post(createMR).patch(updateMR_From).delete(deleteMR);
router.use(multerUploads)
router.route('/:id/MedicalDoc').get(getAllMedicalDoc).post(addMedicalDoc);
router.route('/:id/medicaldoc/:idDoc').get(getOneMedicalDoc).delete(deleteMedicalDoc);
router.route('/form').post(affiche)
module.exports = router ;