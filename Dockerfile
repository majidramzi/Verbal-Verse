# Use a base image with PHP and Apache
FROM php:7.4-apache

# Install eSpeak
RUN apt-get update && apt-get install -y espeak

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP files into the container
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]