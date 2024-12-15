<p align="center">
 <h1 align="center">Private Medical Clinic Patient Management</h1>
</p>

## 💡Introduction
The **Private Medical Clinic Patient Management System** is designed to simplify the management of patient records, appointments, and clinic operations. Built with user-friendliness in mind, it provides efficient tools for handling patient information, scheduling visits, and ensuring data security to improve clinic services and patient care.

#### Key Features:
 - 📋 Manage patient records and medical histories efficiently.  
 - 💊 Track and update prescriptions and medications with ease.  
 - 🔒 Ensure the security of patient data.  
 - 🖥️ Designed for internal use within the clinic for streamlined operations.  

## 🖼️ Preview
**Private Medical Clinic Patient Management** offers a clean and functional interface that simplifies prescription handling while maintaining data privacy. Below is an example showcasing its efficient features.
<p align="center">
  <img src="asset/img/image.png" width=700><br/>
  <i>Home Page</i>
</p>

## 🧑‍💻 How to use my code
Follow these steps to set up and use the project locally:

##### 1. Clone the Repository
First, clone the repository to your local machine. Open your terminal or command prompt and run:
```bash
git clone https://github.com/NgoDuongwww/quan_ly_benh_nhan.git
```

##### 2. Set Up the Environment
Navigate to the project directory:
```bash
cd <project-folder>
```

 - **Set up a local server**: 
   Ensure you have a local server environment installed (e.g., XAMPP, WAMP, Laragon, or MAMP).

 - **Place the project in the server's root directory**: Copy the project folder to the appropriate location:
    - For XAMPP: htdocs/
    - For WAMP: www/
    - For Laragon: www/

 - **Create a database**:
    - Open your database management tool (e.g., phpMyAdmin).
    - Create a new database with a name that matches the configuration in your .env file or config.php.
    - Import the provided SQL file located in the database/ folder to set up the necessary tables.

 - **Configure environment settings**: 
   If the project uses an .env file, create one in the root directory and configure the database credentials. For example:
```makefile
DB_HOST=localhost
DB_NAME=<your-database-name>
DB_USER=root
DB_PASSWORD=<your-password>
```

##### 3. Install Dependencies (Optional)
If the project uses Composer for dependency management, run:
```bash
composer install
```
This will download and set up all required PHP packages.

##### 4. Run the Project Locally
 - Start your local server (e.g., XAMPP, WAMP).
 - Open your web browser and access the project by navigating to:
```arduino
http://localhost/<project-folder>
```

## 📣 Happy coding! 🚀