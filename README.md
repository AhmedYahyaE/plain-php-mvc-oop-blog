# Plain PHP and MySQL MVC Pattern OOP Advanced CMS Blog Application/System
A plain PHP and MySQL advanced blog application which follows the MVC Design Pattern (Model-View-Controller Architecture) (Separation of Concerns), and is completely Object-oriented (OOP). This project script is written entirely in plain PHP and aims to demonstrate the implementation of a blog system without relying on any external libraries or frameworks.

Frontend technologies used: jQuery and Bootstrap (Responsive Design/Mobile First Design).

## Screenshots:
***Blog post***
![blog-post](https://github.com/AhmedYahyaE/plain-php-mvc-oop-blog/assets/118033266/561f5609-39f6-4f8d-b5df-e3c2e86b99df)

## Features:
1- User Registration, Authentication and Authorization.

2- Both Server-side and Client-side Validation.

3- Login System (Session Management).

4- CRUD Operations.

5- Admin Panel for the website owner (interactive Dashboard, user registration approval, member commemt approval, item and category approval, ...).

6- User Roles and Permissions.

7- File Upload.

## Application URLs:
1- Frontend: The public-facing website can be accessed at https://www.domain-example.com/index.php. This is where customers/users/members can browse products/items, add items to their cart, and comment on existing products, ...

2- Admin Panel: The Admin Panel for managing the E-commerce website is available at https://www.domain-example.com/admin/index.php. This is a secure area accessible only to authorized administrators. It provides functionalities for managing products/items, categories, orders, and user accounts and comments.

## Installation & Configuration:
1- Clone the project or download it.

2- Create a MySQL database named **\`shop\`** and import the database schema from [shop database - PhpMyAdmin Export.sql](<Database - shop/shop database - PhpMyAdmin Export.sql>) SQL Dump file. Navigate to '**`Database - shop`**/**`shop database - PhpMyAdmin Export.sql`**' SQL Dump file.

3- Navigate to the database connection configuration file in '**`admin/connect.php`**' file and configure/edit the file according to your MySQL credentials.

4- Navigate to the project root directory by using the **`cd`** terminal command, and then start your PHP built-in Development Web Server by running the command: **`php -S localhost:8000`**.

5- In your browser, go to http://localhost:8000/index.php (**Frontend**) and http://localhost:8000/admin/index.php (**Admin Panel**).

6- A ready-to-use registered user account credentials (for both **Frontend** and **Admin Panel**):

> **Username**: **Ahmed**, **Password**: **123456**

## Contribution:
Contributions to my plain PHP/MySQL E-commerce application are most welcome! If you find any issues or have suggestions for improvements or want to add new features, please open an issue or submit a pull request.
