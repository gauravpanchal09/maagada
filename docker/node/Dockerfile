FROM node:14.21.2-alpine

WORKDIR /app

COPY package*.json /app/

RUN npm install

COPY ./app .

EXPOSE 3000

CMD ["npm", "run", "start"]
