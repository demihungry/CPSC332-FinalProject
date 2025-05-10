CREATE TABLE Department (
        Dnumber numeric NOT NULL,
        Dname varchar(20),
        Office varchar(20),
        Dphone numeric(10),
        PRIMARY KEY (Dnumber)
);

CREATE TABLE Professor (
        Ssn numeric(9) NOT NULL,
        Dnumber numeric,
        Name varchar(64),
        Phone numeric(10),
        Title varchar(64),
        Salary integer,
        Sex ENUM('M', 'F') NOT NULL,
        Street varchar(20),
        City varchar(20),
        State char(2),
        Zipcode numeric(5),
        PRIMARY KEY (Ssn),
        FOREIGN KEY (Dnumber) REFERENCES Department(Dnumber)
);

CREATE TABLE Course (
        Cnumber numeric NOT NULL,
        Dnumber numeric,
        Textbook varchar(50),
        Units integer,
        Title varchar(50),
        Prerequisite varchar(50),
        PRIMARY KEY (Cnumber),
        FOREIGN KEY (Dnumber) REFERENCES Department(Dnumber)
);

CREATE TABLE CourseSection (
        Snumber numeric NOT NULL,
        Cnumber numeric,
        PSsn numeric(9),
        Days varchar(20),
        Room integer,
        Starttime char(11),
        Endtime char(11),
        Seats integer,
        PRIMARY KEY (Snumber),
        FOREIGN KEY (Cnumber) REFERENCES Course(Cnumber),
        FOREIGN KEY (PSsn) REFERENCES Professor(Ssn)
);

CREATE TABLE Student (
        Cwid numeric NOT NULL,
        Fname varchar(20),
        Lname varchar(20),
        Dnumber numeric,
        Phone numeric(10),
        Street varchar(20),
        city varchar(20),
        State char(2),
        Zipcode numeric(5),
        PRIMARY KEY (Cwid),
        FOREIGN KEY (Dnumber) REFERENCES Department(Dnumber)
);

CREATE TABLE Enrollment (
        ECwid numeric,
        ECnumber numeric,
        ESnumber numeric,
        PSsn numeric(9),
        Grade ENUM('A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'),
        FOREIGN KEY (ECwid) REFERENCES Student(Cwid),
        Foreign Key (ECnumber) REFERENCES Course(Cnumber),
        FOREIGN KEY (ESNumber) REFERENCES CourseSection(Snumber),
        FOREIGN KEY (PSsn) REFERENCES Professor(Ssn)
);

CREATE TABLE Minor (
        MCwid numeric,
        MDnumber numeric,
        FOREIGN KEY (MCwid) REFERENCES Student(Cwid),
        FOREIGN KEY (MDnumber) REFERENCES Department(Dnumber)
);