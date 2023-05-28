## step 1:
* creacte The DockerFile:
  # image
  FROM python:3.8-slim-buster
  # working directory
  WORKDIR /python-docker
  # copy the dependecies file
  COPY requirements.txt requirements.txt
  # install dependecies
  RUN pip3 install -r requirements.txt
  # copy the local directory to the docker image directory
  COPY . .
  # execute the command to start the flask app as module and make it accessible 
  CMD ["python3","-m","flask","run","--host=0.0.0.0"]
## step 2:
* build the docker image 
  # docker build --tag python-docker .
* view images 
  # docker images
* run the container from the image
  # docker run -d -p 5000:5000 python-docker
* see running containers
  # docker ps
* stop container
  # docker stop python-docker
* tag the docker image
  # docker tag python-docker python-local-image