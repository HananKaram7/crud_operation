CREATE DATABASE innovation_day;

  CREATE TABLE hackathon (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  email VARCHAR(30) NOT NULL,
  phone INT(11),
  Governorate VARCHAR(30),
  Participating_As VARCHAR(30),
  Team_Name VARCHAR(30),
  Team_Members_Number VARCHAR(30),
  Team_Members_Names VARCHAR(30),
  Your_Role_Skill VARCHAR(30),
  Profile_Link VARCHAR(30),
  Background_Experience TEXT,
  Describe_Idea TEXT,
  Need_To_Execute_Your_Idea TEXT,
  Mentorship_You_Need TEXT,
  Participated_Hackathons_Before VARCHAR(30),
  Hackathon_Name VARCHAR(30),
  Know_About VARCHAR(30),
  comment TEXT);

  CREATE TABLE workshops (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) ,
  Phonenum int,
	workshop_attend varchar(50),
  workshops text,
  Experience text
);

CREATE TABLE attendees (
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(100)  PRIMARY KEY,
    Phonenum int,
    attendingas VARCHAR(50),
     educationalstatus VARCHAR(50),
     governorate  varchar(50),
     college  varchar(50),
     comment  text
 );

CREATE TABLE partners (
  company_name VARCHAR(100),
  company_brief TEXT,
  company_url VARCHAR(250),
  package_type VARCHAR(50),
  rep_name VARCHAR(100),
	rep_email VARCHAR(100),
  rep_phone INT(11),
  needed_supplies VARCHAR(250),
  booth_stuff VARCHAR(250),
  comment VARCHAR(250)
);
