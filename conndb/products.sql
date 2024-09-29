CREATE DATABASE koks;
USE koks;

CREATE TABLE products (
    idProducts INT AUTO_INCREMENT PRIMARY KEY,  
    name VARCHAR(55) NOT NULL,                   
    description TEXT,                      
    image_url VARCHAR(55),                        
    price DECIMAL(10, 2) NOT NULL                    
);