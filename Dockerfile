# Use the official PHP image as a base image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the contents of your PHP project to the container
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
