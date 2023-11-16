<?php

include 'Person.php';
include 'Student.php';
include 'Employee.php';
include 'Faculty.php';
include 'Staff.php';
include 'MyDate.php';


// Test the classes
$person = new Person('Kakembo  ', 'Gayaza', '0708197424', 'joashkakembo10@gmail.com');
echo "Person: " . $person->getName() . "\n\n";

$student = new Student('Turinawe ', 'Kikoni', '0700294565', 'turinskandrew69@gmail.com');
echo "Student: " . $student->getName() . "\n\n";

$employee = new Employee('Luwaga ', 'Mengo', '0752710540', 'mathewwicky8@gmail.com', 'Office 10', 80000, new MyDate(2023, 11, 15));
echo "Employee: " . $employee->getName() . "\n\n";

$faculty = new Faculty('Tugume  ', 'Mulago', '0752547070', 'leeboynathan@gmail.com', 'Office 20', 90000, new MyDate(2023, 11, 15), '10 AM - 2 PM', 'Professor');
echo "Faculty: " . "\n\n" . $faculty->getName() . "\n\n";

$staff = new Staff('Muwanguzi  ', 'Makerere', '0701731556', 'derrickmk421@gmail.com ', 'Office 30', 10000, new MyDate(2023, 11, 15), 'Manager');
echo "Staff: " . $staff->getName() . "\n\n";


?>

