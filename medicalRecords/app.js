const express =require('express');
const { urlencoded, json } =require ('body-parser');
const path=require ('path');
const { uploader, cloudinaryConfig } =require( './config/cloudinaryConfig')
const { multerUploads, dataUri } =require ('./middlewares/multer');
const app = express();
const Port = process.env.PORT || 3000;
//app.use(express.static(path.join(__dirname, 'src/public')));
app.use(urlencoded({ extended: false }));
app.use(json());
app.use('*', cloudinaryConfig);
app.get('/*', (req, res) => res.sendFile(path.resolve(__dirname, './public/index.html')));
app.post('/upload', multerUploads, (req, res) => {
if(req.file) {
    console.log(dataUri(req).content)
const file = dataUri(req).content;
return uploader.upload(file).then((result) => {
const image = result.url;
return res.status(200).json({
messge: 'Your image has been uploded successfully to cloudinary',
data: {
image
}
})
}).catch((err) => res.status(400).json({
messge: 'someting went wrong while processing your request',
data: {
err
}
}))
}
});
app.listen(Port, () => console.log(`Server started at http://localhost:${Port}`));