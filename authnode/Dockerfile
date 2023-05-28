FROM node:14

WORKDIR /medico-app
COPY package.json .
RUN npm install
COPY . .
CMD npm start