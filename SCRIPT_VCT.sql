#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: ROLE
#------------------------------------------------------------
CREATE TABLE ROLE(
        IDROLE  Int (3) NOT NULL ,
        LIBELLE Varchar (50) NOT NULL
	,CONSTRAINT ROLE_PK PRIMARY KEY (IDROLE)
)ENGINE=InnoDB;


INSERT INTO ROLE(IDROLE, LIBELLE) VALUES(1,'ADMINISTRATEUR'),(2,'SCRUTATEUR'),(3,'CANDIDAT');


#------------------------------------------------------------
# Table: USER
#------------------------------------------------------------

CREATE TABLE USER(
        IDUSER     Int  Auto_increment  NOT NULL ,
        NOMUSER    Varchar (50) NOT NULL ,
        PRENOMUSER Varchar (50) NOT NULL ,
        EMAIL      Varchar (5) NOT NULL ,
        MDP        Varchar (50) NOT NULL ,
        IDROLE     Int NOT NULL
	,CONSTRAINT USER_PK PRIMARY KEY (IDUSER)

	,CONSTRAINT USER_ROLE_FK FOREIGN KEY (IDROLE) REFERENCES ROLE(IDROLE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ELECTEUR
#------------------------------------------------------------

CREATE TABLE ELECTEUR(
        NUMVOTANT Int  Auto_increment  NOT NULL ,
        NOM       Varchar (50) NOT NULL ,
        PRENOM    Varchar (50) NOT NULL ,
        DATENAISS Date NOT NULL ,
        ADRESSE   Varchar (50) NOT NULL ,
        MDP       Varchar (50) NOT NULL ,
        SEXE      Varchar (50) NOT NULL ,
        EMAIL     Varchar (50) ,
        TEL       Varchar (50) ,
        NUMCI     Varchar (50) NOT NULL ,
        STATUT    Varchar (50) NOT NULL ,
        IDUSER    Int NOT NULL
	,CONSTRAINT ELECTEUR_PK PRIMARY KEY (NUMVOTANT)

	,CONSTRAINT ELECTEUR_USER_FK FOREIGN KEY (IDUSER) REFERENCES USER(IDUSER)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PARTI
#------------------------------------------------------------

CREATE TABLE PARTI(
        IDPARTI  Int  Auto_increment  NOT NULL ,
        NOMPARTI Varchar (50) NOT NULL ,
        SLOGAN   Varchar (50) NOT NULL
	,CONSTRAINT PARTI_PK PRIMARY KEY (IDPARTI)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CANDIDAT
#------------------------------------------------------------

CREATE TABLE CANDIDAT(
        NUMCANDIDAT Int  Auto_increment  NOT NULL ,
        PRENOM      Varchar (50) NOT NULL ,
        NOM         Varchar (50) NOT NULL ,
        PHOTO       Blob NOT NULL ,
        RESUME      Varchar (50) NOT NULL ,
        IDPARTI     Int NOT NULL
	,CONSTRAINT CANDIDAT_PK PRIMARY KEY (NUMCANDIDAT)

	,CONSTRAINT CANDIDAT_PARTI_FK FOREIGN KEY (IDPARTI) REFERENCES PARTI(IDPARTI)
)ENGINE=InnoDB;



#------------------------------------------------------------
# Table: VOTER
#------------------------------------------------------------

CREATE TABLE VOTER(
        NUMCANDIDAT Int NOT NULL ,
        NUMVOTANT   Int NOT NULL ,
        NBVOTE      Int NOT NULL ,
        HEURE       Time NOT NULL
	,CONSTRAINT VOTER_PK PRIMARY KEY (NUMCANDIDAT,NUMVOTANT)

	,CONSTRAINT VOTER_CANDIDAT_FK FOREIGN KEY (NUMCANDIDAT) REFERENCES CANDIDAT(NUMCANDIDAT)
	,CONSTRAINT VOTER_ELECTEUR0_FK FOREIGN KEY (NUMVOTANT) REFERENCES ELECTEUR(NUMVOTANT)
)ENGINE=InnoDB;





