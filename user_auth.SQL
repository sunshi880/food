-- Create Database
CREATE DATABASE user_auth;

-- Switch to the newly created database
USE user_auth;

-- Create Table for Users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
