DROP DATABASE IF EXISTS  Itec_Dev2;
CREATE DATABASE Itec_Dev2;
USE Itec_Dev2;

DROP TABLE IF EXISTS Customer;
CREATE TABLE Customer (
    cID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cEmail VARCHAR(75) NOT NULL,
    cAddressLine1 VARCHAR(45) NOT NULL,
	cAddressLine2 VARCHAR(45) NULL,
    cProvince VARCHAR(45) NOT NULL,
    cPostalCode INT NOT NULL,
    cPassword VARCHAR(255) NOT NULL
);
DROP TABLE IF EXISTS Product;
CREATE TABLE Product (
    prodID INT PRIMARY KEY AUTO_INCREMENT,
    prodName VARCHAR(45) NOT NULL,
    prodDescription VARCHAR(45) NOT NULL,
    prodValue DOUBLE NOT NULL
);
CREATE TABLE Contact_Us(  
    cuID int NOT NULL primary key AUTO_INCREMENT ,
    cuName varchar(75) NOT NULL,
    cuEmail varchar(75) NOT NULL,
    cuMessage varchar(254) NOT NULL
);

DROP TABLE IF EXISTS Cart;
CREATE TABLE Cart (
    ordNumber INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
	cEmail VARCHAR(45) NOT NULL ,
    cID INT NOT NULL REFERENCES Customer(cID),
    prodName VARCHAR(254) NOT NULL,
	prodDetails VARCHAR(254)NOT NULL,
    ordTotal DOUBLE NOT NULL,
    ordDate DATE 
    );
   
DROP TABLE IF EXISTS Receipt;
 CREATE TABLE Receipt (
    ordNumber INT NOT NULL REFERENCES Cart(ordNumber),
    prodID INT NOT NULL REFERENCES Product(prodID),
    ordTotal DOUBLE NOT NULL REFERENCES Cart(ordTotal),
    ordDate DATE ,
    PRIMARY Key(ordNumber, prodID)
    );
    INSERT INTO Customer (cEmail,cAddressLine1,cAddressLine2, cProvince,cPostalCode,cPassword)
		VALUES 	("notTrudie24@hotmail.com","24 Brandy Cres"," ","Western Cape","6790","1234");


 INSERT INTO Contact_Us (cuEmail,cumessage,cuName)
		VALUES 	("notTrudie24@hotmail.com","Testing this","Test1");
        
        
         INSERT INTO Product (prodName,prodDescription ,prodValue)
		VALUES 	("mHoodies","Hoodies for Men","70"),
        	("wHoodies","Hoodies for Woman","70"),
            	("mShirt","Shirts for Men","70"),
                	("wShirt","Shirts for Woman","70"),
                    	("Buffs","Buffs","70"),
                        	("Keychains","Keychains","70"),
                            	("Masks","Masks","70"),
                                	("Mugs","Mugs","70");

    SELECT * FROM Customer;
	SELECT * FROM Product;
	SELECT * FROM Cart;
	SELECT * FROM Contact_Us;
	SELECT * FROM The Books;


