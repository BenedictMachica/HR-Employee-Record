CREATE DATABASE emp_data;
 
USE emp_data;
 
CREATE TABLE employee (
   employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender VARCHAR(10),
    birth_date DATE,
    department VARCHAR(50),
    position VARCHAR(70),
    salary DECIMAL(10,2),
    contact_number VARCHAR(20),
    email VARCHAR(100),
    address VARCHAR(255),
    date_hired DATE
);
 