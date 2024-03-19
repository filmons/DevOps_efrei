FROM node:16-alpine as builder

RUN apk add --no-cache -f php7 php7-cli php7-pdo php7-pdo_mysql php7-json

WORKDIR /Services

COPY . .

FROM nginx:1.21.0-alpine as production

ENV NODE_ENV production

# Copy built assets from `builder` image
COPY --from=builder /Services/test.php /usr/share/nginx/html

# Add your nginx.conf

EXPOSE 3002
# Start nginx
CMD ["nginx", "-g", "daemon off;"]