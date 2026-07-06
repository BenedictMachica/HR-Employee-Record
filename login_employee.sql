CREATE DATABASE emp_data;
 
USE emp_data;
 
CREATE TABLE employee (
   user_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    gender VARCHAR(10),
    dob DATE,
    department VARCHAR(50),
    phonenum VARCHAR(20),
    email VARCHAR(100),
    address VARCHAR(255),
    username VARCHAR(30),
    password VARCHAR(30)
);
 