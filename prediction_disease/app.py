from flask import Flask, render_template, request, flash, redirect,jsonify
import pickle
import numpy as np
from PIL import Image
from tensorflow.keras.models import load_model
from flask_cors import CORS


app = Flask(__name__)
CORS(app)
def predict(values, dic):
    if len(values) == 8:
        model = pickle.load(open('models/diabetes.pkl','rb'))
        values = np.asarray(values)
        return model.predict(values.reshape(1, -1))[0]
    elif len(values) == 26:
        model = pickle.load(open('models/breast_cancer.pkl','rb'))
        values = np.asarray(values)
        return model.predict(values.reshape(1, -1))[0]
    elif len(values) == 13:
        model = pickle.load(open('models/heart.pkl','rb'))
        values = np.asarray(values)
        return model.predict(values.reshape(1, -1))[0]
    elif len(values) == 18:
        model = pickle.load(open('models/kidney.pkl','rb'))
        values = np.asarray(values)
        return model.predict(values.reshape(1, -1))[0]
    elif len(values) == 10:
        model = pickle.load(open('models/liver.pkl','rb'))
        values = np.asarray(values)
        return model.predict(values.reshape(1, -1))[0]






@app.route("/DiseasePrediction", methods = ['POST', 'GET'])
def predictPage():

    try:
        if request.method == 'POST':
            to_predict_dict = request.form.to_dict()
            to_predict_list = list(map(float, list(to_predict_dict.values())))
            pred = predict(to_predict_list, to_predict_dict)
    except:
        message = "Please enter valid Data"
        return {
            "message":"Please enter valid Data",
        }
        

    return {
        "message":str(pred)
        }

@app.route("/malariapredict", methods = ['POST', 'GET'])
def malariapredictPage():
    if request.method == 'POST':
        pred=""
        print(request.files)
        if 'image' in request.files:
            
                img = Image.open(request.files['image'])
                img = img.resize((36,36))
                img = np.asarray(img)
                img = img.reshape((1,36,36,3))
                img = img.astype(np.float64)
                model = load_model("models/malaria.h5")
                pred = np.argmax(model.predict(img)[0])
                pred=str(pred)
            
        else:
                message = "Please upload an Image"
                return {"message":message}
    return { "message" :pred}
   

if __name__ == '__main__':
	app.run(debug = True)