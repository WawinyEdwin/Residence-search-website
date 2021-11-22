CREATE TABLE users (
    phone_number int primary key,
    psw1 varchar(20) not null,
);

CREATE accounts (
    accountId int not null primary key,
    psw varchar(20) not null,
)

CREATE TABLE flats (
    flatsName varchar(60) primary key,
    flatPrice int not null,

)

CREATE TABLE apartments (
    apartmentName varchar(60) primary key,
    apartmentPrice int not null,

)

CREATE TABLE mabatini (
    mabatiniName varchar(60) primary key,
    mabatiniPrice int not null,

)

CREATE TABLE rentals (
    rentalName varchar(60) primary key,
    rentalPrice int not null,

)

CREATE TABLE oneBedroom (
    oneBedroomName varchar(60) primary key,
    oneBedroomPrice int not null,

)

CREATE TABLE twoBedroom (
    twoBedroomName varchar(60) primary key,
    twoBedroomPrice int not null,

)

CREATE TABLE threeBedroom (
    threeBedroomName varchar(60) primary key,
    threeBedroomPrice int not null,

)

CREATE TABLE fourBedroom (
    fourBedroomName varchar(60) primary key,
    fourBedroomPrice int not null,

)

CREATE TABLE utilities (

)

CREATE table subscriptions (
    
)