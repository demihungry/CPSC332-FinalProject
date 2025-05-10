SELECT Course.Title, CourseSection.Room, CourseSection.Days, CourseSection.Starttime, CourseSection.Endtime
FROM Professor, Department, Course, CourseSection
WHERE Professor.Ssn = '273546189' AND Professor.Dnumber = Department.Dnumber AND Department.Dnumber = Course.Dnumber AND Course.Cnumber = CourseSection.Cnumber;

SELECT Count(Distinct Student.Cwid), Enrollment.grade
FROM Course, CourseSection, Enrollment, Student
WHERE Course.Cnumber = '305' AND CourseSection.Snumber = '08' AND Course.Cnumber = CourseSection.Cnumber AND CourseSection.Snumber = Enrollment.ESnumber AND Enrollment.ECwid = Student.Cwid
GROUP BY Enrollment.Grade;

SELECT CourseSection.Snumber, CourseSection.Room, CourseSection.Starttime, CourseSection.Endtime, CourseSection.Days, count(Distinct Student.Cwid)
FROM Course, CourseSection, Enrollment, Student
WHERE Course.Cnumber = '349' AND Course.Cnumber = CourseSection.Cnumber AND CourseSection.Snumber = Enrollment.ESnumber AND Enrollment.ECwid = Student.Cwid
GROUP BY CourseSection.Snumber, CourseSection.Room, CourseSection.Starttime, CourseSection.Endtime, CourseSection.Days;

SELECT Course.Cnumber, Enrollment.Grade
FROM Student, Enrollment, CourseSection, Course
WHERE Student.Cwid = '678512593' AND Student.Cwid = Enrollment.ECwid AND Enrollment.ESnumber = CourseSection.Snumber AND CourseSection.Cnumber = Course.Cnumber
GROUP BY Course.Cnumber, Enrollment.Grade;