CREATE DATABASE health_app;
use health_app;

--utilisateur--
CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email  VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role
    ENUM('patient','medecin','admin')DEFAULT 'patient'
);
--donnees sante---
CREATE TABLE health_data(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
tension VARCHAR(20),
heart_rate INT,
screen_time INT,
date DATETIME,
status VARCHAR(50)
);
--rendez-vous--
CREATE TABLE appointments(
id INT AUTO_INCREMENT PRIMARY KEY,
patient_id INT,
medecin_id INT,
date DATETIME,
status VARCHAR(50)
);
--message--(chat)
CREATE TABLE message(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT,
    receiver_id INT,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP    
);
--form--
CREATE TABLE forum(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    content TEXT,
    Created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
