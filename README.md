Task

Create a  \"EmailSender\" class.

Define the namespace App\\Mail.

Implement the send(), which sends an email using an SMTP server.

Add support for different types of messages (e.g., welcome email, reminder email, notification email).

Use the EmailSender class to send a test email.

========================================================

System Requirements

The environment requirements are divided into two types: for local development and for a production server.

1. For Local Development (Recommended Method)

To run the project in development mode, you will only need:

-Docker Engine

-Docker Compose

The entire environment (PHP, Nginx) is already configured inside the Docker containers.

2. For a Production Environment (Manual Setup)

If you are deploying the project without Docker, you will need:

-Web Server (Nginx or Apache)

-PHP 8.4+ (as specified in the Dockerfile)

-Composer (to install dependencies)

The following PHP extensions:

-intl

-gd

-zip

-xdebug (optional, for debugging)

========================================================

Installation and Launch (with Docker)

Clone the repository:

-git clone [your_repository_address]
-cd [project_folder]


Navigate to the Docker folder:

-cd docker


Build and start the containers:

Note: Ensure you have an .env file in the project root with the variables PROJECT_NAME=PSR and APP_PORT=8080.

-docker-compose up -d --build


Install Composer dependencies (inside the container):

This step only needs to be run once. It will install vendor into a dedicated Docker volume.

-docker-compose exec php composer install


Done. The project will be available at: http://localhost:8080.
