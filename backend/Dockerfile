FROM node:14-alpine

WORKDIR /usr/src/backend

COPY ./package*.json ./

RUN npm install glob rimraf
RUN npm -i g @nestjs/cli

COPY . .

EXPOSE 5000

CMD ["npm", "run", "build"]
