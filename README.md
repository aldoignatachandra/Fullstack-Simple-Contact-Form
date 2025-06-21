# Contact Form Project

This repository is part of my learning journey in fullstack engineering, where I'm exploring modern web development practices including microservices architecture, containerization, and multi-language development. The project was developed as part of the curriculum at [BuildWithAngga](https://buildwithangga.com/), under the mentorship of [Tri Wicaksono](https://triwicaksono.com/). Through this project, I've gained hands-on experience with Go, Next.js, and Laravel, as well as Docker containerization and API development.

## 📚 Introduction

This project is a complete contact form solution with three main components:

1. `Client Contact Form` - A Next.js frontend for users to submit contact messages
2. `API Contact Form` - A Go backend API for processing and storing contact messages
3. `CMS Contact Form` - A Laravel admin panel for managing contact messages

All components are containerized with Docker for easy **deployment** and **development**.

## 🏗️ Architecture

The project follows a microservices architecture with the following components:

- `Client Contact Form` : Next.js application that provides a simple interface for submitting contact messages
- `API Contact Form` : Go API that handles data validation, storage, and retrieval of contact messages
- `CMS Contact Form` : Laravel application that provides a simple admin interface for managing contact messages
- `MariaDB` : Database for storing contact messages
- `PHPMyAdmin` : Web interface for database management

## 🗂️ Project Structure

```
├── app/
│   ├── api-contact-form/       # Go API backend
│   │   ├── config/             # Database and environment configuration
│   │   ├── handlers/           # HTTP request handlers
│   │   ├── models/             # Data models
│   │   ├── repositories/       # Database interaction layer
│   │   ├── services/           # Business logic layer
│   │   └── main.go             # Application entry point
│   ├── client-contact-form/    # Next.js frontend
│   │   ├── src/                # Source code
│   │   │   ├── api/            # API route handlers
│   │   │   └── app/            # Next.js app directory
│   │   └── public/             # Static assets
│   └── cms-contact-form/       # Laravel admin panel
│       ├── app/                # Application code
│       │   ├── Http/           # HTTP controllers and middleware
│       │   └── Services/       # Service layer for API communication
│       ├── resources/          # Views and assets
│       └── routes/             # Route definitions
└── docker-compose.yaml         # Docker Compose configuration
```

## 🚀 Getting Started

### Prerequisites

- Docker
- Git

### Installation

1. Clone the repository:

```bash
git clone https://github.com/aldoignatachandra/Fullstack-Simple-Contact-Form.git
cd Fullstack-Simple-Contact-Form
```

2. Create environment files:

```bash
cp .env.example .env
cp app/api-contact-form/.env.example app/api-contact-form/.env
cp app/client-contact-form/.env.local.example app/client-contact-form/.env.local
cp app/cms-contact-form/.env.example app/cms-contact-form/.env
```

3. Configure the environment variables in the .env file:

```bash
# Database Configuration
MYSQL_ROOT_PASSWORD=rootpassword
MYSQL_DATABASE=contactsdb
MYSQL_USER=user
MYSQL_PASSWORD=password

# Port Mapping Configuration
HOST_MARIADB_PORT=3306
CONT_MARIADB_PORT=3306

HOST_PHPMYADMIN_PORT=8011
CONT_PHPMYADMIN_PORT=80

HOST_API_PORT=8080
CONT_API_PORT=8080

HOST_CMS_PORT=8081
CONT_CMS_PORT=80

HOST_CLIENT_PORT=3000
CONT_CLIENT_PORT=3000
```

4. Start the application:

```bash
docker compose up -d
```

5. Wait for all services to start up (this may take a few minutes for the first run).

## 🌐 Accessing the Applications

After starting the services, you can access the different components at:

- Client Contact Form : http://localhost:3000
- CMS Admin Panel : http://localhost:8081
- API Endpoints : http://localhost:8080
- PHPMyAdmin : http://localhost:8011 (Username: root, Password: rootpassword)

## 🧩 Components

### Client Contact Form

The client contact form is built with Next.js and provides a simple interface for users to submit their contact information. It includes:

- Form validation
- API integration
- Responsive design
- Success confirmation page

### API Contact Form

The API is built with Go and uses the Gin framework. It provides:

- RESTful endpoints for CRUD operations
- Data validation
- Database integration with GORM
- CORS configuration for cross-origin requests

### CMS Contact Form

The CMS is built with Laravel and provides an admin interface for managing contacts. It includes:

- Contact listing with pagination
- Contact details view
- Edit and delete functionality
- API integration with the backend

## 🛠️ Development

### Modifying the API

To make changes to the Go API:

1. Make your changes in the `app/api-contact-form` directory
2. Rebuild the container:

```bash
docker compose up -d --build api-contact-form
```

### Modifying the Client Contact Form

To make changes to the Next.js frontend:

1. Make your changes in the `app/client-contact-form` directory
2. Rebuild the container:

```bash
docker compose up -d --build client-contact-form
```

### Modifying the CMS

To make changes to the Laravel CMS:

1. Make your changes in the `app/cms-contact-form` directory
2. Rebuild the container:

```bash
docker compose up -d --build cms-contact-form nginx-cms-contact-form
```

## 🧪 Testing

### API Testing

You can test the API endpoints using tools like `cURL`, `Postman`, or any `HTTP client`.

Example cURL command to create a new contact:

```bash
curl -X POST http://localhost:8080/contacts \
  -H "Content-Type: application/json" \
  -d '{"name":"John Doe","email":"john@example.com","phone":"1234567890","message":"Hello, this is a test message."}'
```

## 🧩 Areas for Improvement

### Authentication and Authorization

- Implement basic authentication and authorization for the API endpoints
- Use JWT tokens for secure authentication

### Logging and Monitoring

- Enhance logging to include more detailed information
- Set up monitoring to track application performance and errors

### API Documentation

- Create comprehensive API documentation using tools like Swagger or Postman

### Unit Testing

- Write unit tests for the API to ensure code quality and reliability

### CI/CD Pipelines

- Set up CI/CD pipelines to automatically build, test, and deploy the application

### Scalability Enhancements

- Explore strategies for horizontal scaling, such as using a database cluster or a message queue

## 👨‍💻 Author

Created with 💻 by Ignata

- 📂 GitHub: [Aldo Ignata Chandra](https://github.com/aldoignatachandra)
- 💼 LinkedIn: [Aldo Ignata Chandra](https://linkedin.com/in/aldoignatachandra)
