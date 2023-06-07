-- Active: 1685708046458@@127.0.0.1@3306@sgavapp
CREATE TABLE countries(
    id_country int NOT NULL AUTO_INCREMENT,
    name_country varchar(50) NOT NULL UNIQUE,
    CONSTRAINT PK_Countries PRIMARY KEY (id_country)
);

CREATE TABLE housetype(
    id_housetype int NOT NULL AUTO_INCREMENT,
    name_housetype varchar(50) NOT NULL UNIQUE,
    CONSTRAINT PK_Housetype PRIMARY KEY (id_housetype)
);

CREATE TABLE regions(
    id_region int NOT NULL AUTO_INCREMENT,
    name_region varchar(50) NOT NULL UNIQUE,
    id_country int,
    CONSTRAINT PK_Regions PRIMARY KEY (id_region),
    CONSTRAINT FK_CountriesRegions FOREIGN KEY (id_country) REFERENCES countries(id_country)
);

CREATE TABLE cities(
    id_city int NOT NULL AUTO_INCREMENT,
    name_city varchar(50) NOT NULL UNIQUE,
    id_region int,
    CONSTRAINT PK_Cities PRIMARY KEY (id_city),
    CONSTRAINT FK_RegionsCities FOREIGN KEY (id_region) REFERENCES regions(id_region)
);



CREATE TABLE persons(
    id_person varchar(20) NOT NULL,
    firstname_person varchar(50) NOT NULL,
    lastname_person varchar(50) NOT NULL,
    birthday_person date NOT NULL,
    id_city int,
    CONSTRAINT PK_Persons PRIMARY KEY (id_person),
    CONSTRAINT FK_CityPersons FOREIGN KEY (id_city) REFERENCES cities(id_city)
);

CREATE TABLE living_place(
    id_living int NOT NULL AUTO_INCREMENT,
    id_person varchar(20),
    id_city int,
    rooms_living int NOT NULL,
    bathrooms_living int NOT NULL,
    kitchen_living int NOT NULL,
    tvroom_living int NOT NULL,
    patio_living int NOT NULL,
    pool_living int NOT NULL,
    barbecue_living int NOT NULL,
    image_living varchar(60) NOT NULL,
    id_typehouse int,
    CONSTRAINT PK_Living PRIMARY KEY (id_living),
    CONSTRAINT FK_PersonsLiving FOREIGN KEY (id_person) REFERENCES persons(id_person),
    CONSTRAINT FK_CitiesLiving FOREIGN KEY (id_city) REFERENCES cities(id_city),
    CONSTRAINT FK_HousetypeLiving FOREIGN KEY (id_typehouse) REFERENCES housetype(id_housetype)
);

