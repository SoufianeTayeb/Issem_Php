-- Active: 1677576166528@@127.0.0.1@3306
CREATE DATABASE  travail_collaboratif
    DEFAULT CHARACTER SET = 'utf8mb4';
Use travail_collaboratif;
-- !! Create Table `travail_collaboratif`
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    d_naissance DATE,
    mail VARCHAR(50) UNIQUE NOT NULL,
    mdp VARCHAR(15) NOT NULL,
    CHECK(LENGTH(mail) >= 5 AND LENGTH(mail) <= 50),
    CHECK(LENGTH(mdp) >= 4 AND LENGTH(mdp) <= 15)
);