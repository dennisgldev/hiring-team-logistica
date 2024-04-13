# Inventory Management System

## Introduction

Welcome to the Inventory Management App! This project aims to streamline inventory management processes using Laravel for the backend, Vue.js for the frontend, and additional technologies such as Jetstream, Inertia, and Laradock.

## Screenshots

**Principal Page**

[![principal-Page.png](https://i.postimg.cc/bvFp9D4K/principal-Page.png)](https://postimg.cc/t1PKXTq5)

**Login**

[![login.png](https://i.postimg.cc/xjNTg5fg/login.png)](https://postimg.cc/NLYcj1rr)

**Register**

[![register.png](https://i.postimg.cc/7hS44Bbk/register.png)](https://postimg.cc/K3cwrDnq)

**Show Products**

[![show-Product.png](https://i.postimg.cc/ry4M5pjP/show-Product.png)](https://postimg.cc/7bqFkwp3)

**Create Product**

[![create.png](https://i.postimg.cc/G2V3d8Qk/create.png)](https://postimg.cc/5Y5WmtD0)

**Edit Product**

[![edit.png](https://i.postimg.cc/CLyM28d0/edit.png)](https://postimg.cc/9zpjRrGg)

**Product History**

[![product-History.png](https://i.postimg.cc/852Gq8p4/product-History.png)](https://postimg.cc/XGktCzyB)

[![history2.png](https://i.postimg.cc/Xvvn5c1f/history2.png)](https://postimg.cc/XrTMSFbq)

**Filter Products by Typing**

[![filter.png](https://i.postimg.cc/jScsCkcq/filter.png)](https://postimg.cc/21qpKGgg)

**Delete Product**

[![delete1.png](https://i.postimg.cc/tJ6qTqS8/delete1.png)](https://postimg.cc/MfW23S8Y)

[![delete2.png](https://i.postimg.cc/fTxWQb09/delete2.png)](https://postimg.cc/xc1VKn5f)

**Database**

[![product-Table.png](https://i.postimg.cc/pXYv11gQ/product-Table.png)](https://postimg.cc/zVB4ypD3)

[![product-History-Table.png](https://i.postimg.cc/fThZChgT/product-History-Table.png)](https://postimg.cc/Lhvr4Gpr)

**Docker Containers**

[![docker.png](https://i.postimg.cc/Pxph3fjN/docker.png)](https://postimg.cc/dkYzDYDK)

## Getting Started

To get started with the project, follow these steps:

1. **Clone Repository**: Clone this repository to your local machine by running the following command in your terminal (This command will clone the main repository along with the Laradock submodule.):

   ```
   git clone -b development-test/dennis-gutierrez --recurse-submodules https://github.com/dennisgldev/hiring-team-logistica.git
   ```

2. **Initialize Docker Engine**: Ensure Docker Engine is installed and initialized on your local machine.

3. **Set Up Environment Variables**: Navigate to the `hiring-team-logistica\inventory-management-dennis` directory and set up environment variables according to `.env.example` and `.env.example.laradock`. Copy these files to create `.env` and laradock `.env` files respectively. Run the following commands:

   ```
   copy .env.example .env
   copy .env.example.laradock laradock\.env
   ```

4. **Start Laradock Services**: Navigate to the `hiring-team-logistica\inventory-management-dennis\laradock` directory within the project and start the Laradock services by executing the following command:

   ```
   docker-compose up -d nginx mysql phpmyadmin redis workspace
   ```

5. **Install Dependencies**: Navigate back to the project directory `hiring-team-logistica\inventory-management-dennis` and install the necessary dependencies by running:

   ```
   npm install
   npm run dev
   ```

6. **Access the Application**: You can now access the application by navigating to http://localhost in your web browser.

## Test User Credentials

Use the following credentials to log in as a test user:

- **Email:** admin@funiber.org
- **Password:** 12345678

## Acknowledgements

Thank you CT Funiber!

#### Development Test

Hello candidate! welcome to the development test for the position of Semi-Senior Developer for CT Funiber Ecuador. We present you with an inventory system development challenge with the requirements detailed below.

#### Inventory management requirements:

1) Authentication
	- by email and password
	- a demo user must be provided
	- no authorization rules must be added, the demo user has all the abilities
	
2) Products
	- seed some products examples in the database
	- add a search form with these filters 
		- code
		- name
		- category
		- has stock (boolean)
  	- add a form to edit the main attributes such as name, code, and category

3) Product categorization
	- all categories must be seeded in the database
	- the maintenance (CRUD) for the categories are optional
	
4) Product measurement
	- this features SHOULD BE handled in one single form
	- validations are expected, the rules are at your discretion
	
5) Stock inquiries
	- this features SHOULD BE handled in one single form
	- validations are expected, the rules are at your discretion
	
6) Product change history

The information must be stored in a database.
A non-relational database can be used (optional).
Possible technologies to use for front-end development: React, Vue, Angular, Javascript.
The backend development language is up to you. The provided one is php8.
The creation of the Entity Relationship Model is at the developer's discretion.
The binding and validation of the fields is at the discretion of the developer.
The design of the system is at the developer's discretion and creativity.


> You must send a pull request to this repository.
> The whole project will be checked with Docker Compose, manage your dependencies well.
> Any extra environment variables must be sent in the pull request with an explanation of how to use them.
> If you have questions, read the requirements or contact me by email ``alfredo.hermoso@funiber.org``.
> You have seven days to complete and submitted the project from the reception of the mail.
