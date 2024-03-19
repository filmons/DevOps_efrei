FROM alpine

RUN apk update
# Install PHP and other dependencies

# Install PHP and other dependencies
RUN apk search php7 php7-pdo php7-pdo_mysql php7-json

RUN apk add --no-cache -f php7 php7-cli php7-pdo php7-pdo_mysql php7-json
# Set the working directory to /php inside the container
WORKDIR /php/

# Copy app files
COPY . .

# Expose port
EXPOSE 3001

# Start the PHP application

CMD ["/usr/bin/php", "-S", "0.0.0.0:3001", "test.php"]


