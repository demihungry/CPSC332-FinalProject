INSERT INTO Professor
VALUES (273546189, 1234123789, 'Evelyn Reed', 8641372591, 'Professor', 120000, 'F', '1234 East Road', 'Long Beach', 'CA', 98617),
(567439894, 1234123789,  'James Maxwell', 1956724833, 'Professor', 150090, 'M', '7859 Summer Lane', 'Tampa', 'FL', 65378),
(741392843, 4097647128,  'Eleanor Vance', 4763896738, 'Professor', 175000, 'F', '384 Garnet Boulevard', 'Birmingham', 'AL', 45637);

INSERT INTO Department
VALUES (1234123789, 'Computer Science', 'CS-522', 4698127351),
(4097647128, 'Anthropology', 'MH-426', 1958463279);

INSERT INTO Course
VALUES (305, 4097647128,  'Anthropology', 3, 'Anthropology of Religion', 'NONE'),
(486, 4097647128,  'Ethnographic Analysis of Digital Media', 3, 'Anthropology of Digital Media', 'ANTH-102'),
(349, 1234123789,  'Guide to Front-End Development', 3, 'Web Front-End Engineering', 'CPSC-131'),
(240, 1234123789,  'Assembly x86-64 Guide', 3, 'Assembly Language', 'CPSC-131');

INSERT INTO CourseSection
VALUES (02, 305, 741392843, 'Tuesday, Thursday', 104, '12:45', '2:15', 30),
(08, 305, 741392843, 'Monday, Wednesday', 201, '9:15', '10:30', 50),
(04, 349, 273546189, 'Wednesday', 401, '12:00', '2:30', 40),
(01, 486, 741392843, 'Monday, Wednesday', 109, '5:30', '6:15', 30),
(03, 240, 567439894, 'Tuesday, Thursday', 304, '8:30', '9:45', 35),
(11, 349, 273546189, 'Friday', 312, '11:00', '1:15', 40);

INSERT INTO Student
VALUES (678512593, 'Claudia', 'Ryan', 1234123789, 8947565672, '6584 Walnut Street', 'Temecula', 'CA', 48962),
(670892533, 'Cameron', 'Hopkins', 1234123789, 3215649876, '8465 Sycamore Lane', 'Sacramento', 'CA', 79856),
(174598492, 'Tia', 'Harvey', 1234123789, 5689488926, '4892 Seacoast Row', 'San Diego', 'CA', 65432),
(670259679, 'Neo', 'Slater', 1234123789, 7984651849, '4865 Parkview Lane', 'Miami', 'FL', 84616),
(234098756, 'Mason', 'Hayden', 4097647128, 3126578937, '7896 Java Boulevard', 'Queens', 'NY', 13476),
(804593309, 'Dante', 'Lester', 4097647128, 9786458946, '6544 Cross Row', 'Las Vegas', 'NV', 68147),
(512389627, 'Bailey', 'Petersen', 4097647128, 4568974652, '5478 Senna Route', 'Medford', 'OR', 64517),
(974654846, 'Logan', 'Bryant', 4097647128, 1746577286, '5641 Bell Row', 'Princeton', 'NJ', 32184);

INSERT INTO Enrollment
VALUES (678512593, 240, 03, 567439894, 'B'),
(678512593, 349, 11, 273546189, 'A-'),
(678512593, 305, 08, 741392843, 'B+'),
(670892533, 240, 03, 567439894, 'B-'),
(670892533, 349, 04, 273546189, 'D'),
(670892533, 305, 02, 741392843, 'B-'),
(174598492, 240, 03, 567439894, 'B+'),
(174598492, 349, 04, 273546189, 'F'),
(174598492, 305, 08, 741392843, 'B+'),
(670259679, 240, 03, 567439894, 'C'),
(670259679, 349, 11, 273546189, 'A-'),
(670259679, 305, 08, 741392843, 'D+'),
(234098756, 305, 02, 741392843, 'C-'),
(234098756, 486, 01, 741392843, 'C+'),
(804593309, 305, 02, 741392843, 'B-'),
(804593309, 486, 01, 741392843, 'B'),
(512389627, 305, 08, 741392843, 'C+'),
(512389627, 486, 01, 741392843, 'D-'),
(974654846, 305, 02, 741392843, 'A-'),
(974654846, 486, 01, 741392843, 'D-');

INSERT INTO Minor
Values(678512593, 4097647128);