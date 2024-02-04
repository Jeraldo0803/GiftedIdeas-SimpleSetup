CREATE DATABASE IF NOT EXISTS GiftedIdeasDB; -- Create the database if it doesn't exist
USE GiftedIdeasDB; -- Use the database

DROP TABLE IF EXISTS UserHistory;
DROP TABLE IF EXISTS UserCredentials;
DROP TABLE IF EXISTS UserInfo;
DROP TABLE IF EXISTS UserQueries;

CREATE TABLE UserInfo (
    Id INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    Surname VARCHAR(255) NOT NULL,
    MiddleName VARCHAR(255) NULL,
    Birthday DATE NULL,
    PlaceofBirth VARCHAR(255) NULL,
    Gender ENUM('Male','Female','Prefer not to say') NULL,
    Nationality VARCHAR(255) NULL,
    CivilStatus VARCHAR(255) NULL,
    MobileNumber VARCHAR(255) NULL,
    EmailAddress VARCHAR(255) NULL,
    Landline VARCHAR(255) NULL,
    HomeAddress VARCHAR(255) NULL,
    DistrictBarangy VARCHAR(255) NULL,
    MunicipalityCity VARCHAR(255) NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE UserCredentials (
    Id INT NOT NULL AUTO_INCREMENT,
    userinfo_id INT NOT NULL,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Status ENUM('active', 'inactive') NOT NULL,
    Authority ENUM('user', 'admin') NOT NULL,
    PRIMARY KEY (Id),
    FOREIGN KEY (userinfo_id) REFERENCES UserInfo(Id)
);

CREATE TABLE UserHistory (
    Id INT NOT NULL AUTO_INCREMENT,
    userinfo_id INT NOT NULL,
    Action VARCHAR(255) NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Time DATETIME NOT NULL,
    Date DATETIME NOT NULL,
    Day_string ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') NOT NULL,
    PRIMARY KEY (Id),
    FOREIGN KEY (userinfo_id) REFERENCES UserInfo(Id)
);

CREATE TABLE UserQueries (
    Id INT NOT NULL AUTO_INCREMENT,
    userinfo_id INT NOT NULL,
    UserQuery TEXT NOT NULL,
    QueryTime DATETIME NOT NULL,
    QueryDate DATETIME NOT NULL,
    QueryDateString ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') NOT NULL,
    PRIMARY KEY (Id),
    FOREIGN KEY (userinfo_id) REFERENCES UserInfo(Id)
);