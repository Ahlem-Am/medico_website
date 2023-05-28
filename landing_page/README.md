## step 1:
* creacte The DockerFile:
  # image
  FROM node:alpine-10
  # working directory
  WORKDIR /nodejs-docker
  # copy the dependecies file
  COPY package*.json /.
  # install dependecies
  RUN npm install
  # copy the local directory to the docker image directory
  COPY . .
  # execute the command to start the flask app as module and make it accessible 
  CMD ["npm","start"]
## step 2:
* build the docker image 
  # docker build --tag nodejs-docker .
* view images 
  # docker images
* run the container from the image
  # docker run -d -p 3000:3000 nodejs-docker
* see running containers
  # docker ps
* stop container
  # docker stop nodejs-docker
* tag the docker image
  # docker tag nodejs-docker nodejs-local-image