# Inventory Management System

## Introduction

Welcome to the Inventory Management App! This project aims to streamline inventory management processes using Laravel for the backend, Vue.js for the frontend, and additional technologies such as Jetstream, Inertia, and Laradock.

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

## Importing the Database and Registering

**Note**: If you wish to import the database, you can do so from the "Import" tab in phpMyAdmin. The file to import is located at `hiring-team-logistica\inventory-management-dennis\default_database_export_volume\default.sql`. The credentials to log in to the database are as follows:

- **Server**: mysql
- **User**: default
- **Password**: secret

If you prefer to use volume persistence for your database, you can replace the mysql directory in `hiring-team-logistica\inventory-management-dennis\laradock\mysql` with the contents of the `hiring-team-logistica\inventory-management-dennis\default_database_export_volume\mysql` directory. This directory contains the MySQL data. By replacing the mysql directory with this one, you can ensure that your colleague's environment also has the same database data.

## Test User Credentials

After importing the database, you can log in using the following test user credentials:

- **Email:** admin@funiber.org
- **Password:** 12345678

If you choose not to import the database, you must create a new user through the registration form.

## Acknowledgements

Thank you CT Funiber!

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