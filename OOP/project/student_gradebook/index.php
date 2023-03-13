<?php 
    require_once('student.php');
    require_once('course.php');
    require_once('gradeBook.php');

    //Create some student from student.php from Student Class
    $student1 = new Student('17123','Shovan');
    $student2 = new Student('17122','Rinku');
    $student3 = new Student('17121','Subrato');

    //Create some Course from course.php from Course Class
    $course1 = new Course('ph001','physics');
    $course1 -> studentAdd($student1);
    $course1 -> studentAdd($student2);
    $course1 -> studentAdd($student3);

    //Add grade for the students
    $course1 -> addGrade('s001',80);
    $course1 -> addGrade('s002',85);
    $course1 -> addGrade('s003',90);

    //Create other student
    $student4 = new Student('18012','Arif');
    $student5 = new Student('18013','Sujon');
    $student6 = new Student('18014','Rohim');

    //Create Another Course

    $course2 = new Course('mth001','Math');
    $course2 -> studentAdd($student4);
    $course2 -> studentAdd($student5);
    $course2 -> studentAdd($student6);

    //Add grade for the others student..

    
    $course2 -> addGrade('s001',80);
    $course2 -> addGrade('s002',85);
    $course2 -> addGrade('s003',90);

    //Create a gradebook and add the course

    $gradebook = new Gradebook();
    $gradebook -> addCourses($course1);
    $gradebook -> addCourses($course2);

    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gradebook</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Gradebook</h1>

    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $gradebook->getCourses() as $course ): ?>
                <?php foreach ( $course->getStudents() as $student ): ?>
                    <tr>
                        <td><?php echo $student->getName(); ?></td>
                        <td><?php echo $course->getCourseName(); ?></td>
                        <td><?php echo $course->getGrade( $student->getId() ); ?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>