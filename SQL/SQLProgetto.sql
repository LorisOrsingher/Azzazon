/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Loris
 * Created: 20 feb 2023
 */

DROP DATABASE IF EXISTS progettoInfo;

CREATE DATABASE IF NOT EXISTS progettoInfo DEFAULT CHARACTER SET = utf8;

USE progettoInfo;
    

CREATE TABLE Gioco (
    idGioco                     BIGINT              NOT NULL    AUTO_INCREMENT,
    nome                        VARCHAR(20)         NOT NULL,     
    descrizione                 VARCHAR(200)        NOT NULL,
    prezzo                      FLOAT(50)         NOT NULL,
    attivo                      BOOLEAN             DEFAULT    TRUE,
    PRIMARY KEY(idGioco)
);

CREATE TABLE utente (
    idUtente                    BIGINT              NOT NULL    AUTO_INCREMENT,
    nome                        VARCHAR(20)         NOT NULL,
    cognome                     VARCHAR(20)         NOT NULL,
    mail                        VARCHAR(50)         NOT NULL UNIQUE,
    password                    VARCHAR(100)        NOT NULL,
    PRIMARY KEY(idUtente)
);

CREATE TABLE carrello (
    idCarrello                  BIGINT              NOT NULL    AUTO_INCREMENT,
    totprezzo                   FLOAT(5)          NOT NULL,
    PRIMARY KEY(idCarrello),  
    fkUtente                    BIGINT              NOT NULL,
    FOREIGN KEY(fkUtente) REFERENCES utente(idUtente)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);



CREATE TABLE carta (
    idCarta                     BIGINT              NOT NULL    AUTO_INCREMENT,
    tipoCarta                   VARCHAR(20)         NOT NULL,    
    numCarta                    INT(16)             NOT NULL,
    codVerifica                 INT(3)              NOT NULL,
    scadenza                    char(5)             NOT NULL,
    PRIMARY KEY(idCarta), 
    fkUtente                    BIGINT              NOT NULL,
    FOREIGN KEY(fkUtente) REFERENCES utente(idUtente)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE contine (    
    fkGioco                 BIGINT              NOT NULL,
    fkCarrello              BIGINT              NOT NULL,
    PRIMARY KEY(fkGioco, fkCarrello),
    FOREIGN KEY(fkGioco) REFERENCES Gioco(idGioco)
        ON UPDATE CASCADE
        ON DELETE CASCADE,    
    FOREIGN KEY(fkCarrello) REFERENCES carrello(idCarrello)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
   