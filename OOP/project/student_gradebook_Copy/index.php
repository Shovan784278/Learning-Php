<?php 

    include_once('student.php');
    include_once('course.php');
    include_once('gradeBook.php');

    //add Student 
    $student1 = new Student('s001','Shovan');
    $student2 = new Student('s002','Rinku');
    $student3 = new Student('s003','Subrato');

    //add course for $student1
    $course1 = new Course('m001','Math');
    $course1 -> addStudent($student1);
    $course1 -> addStudent($student2);
    $course1 -> addStudent($student3);
    

    //add grade for the student

    $course1 -> addGrade('s001',85);
    $course1 -> addGrade('s002',90);
    $course1 -> addGrade('s003',95);

    //add another course 2 
    $course2 = new Course('p001','Physics');
    $course2 -> addStudent($student1);
    $course2 -> addStudent($student2);
    $course2 -> addStudent($student3);

    $course2 -> addGrade('s001',92);
    $course2 -> addGrade('s002',90);
    $course2 -> addGrade('s003',93);

    // Create a gradebook and add the courses
    $gradebook = new Gradebook();
    $gradebook->addCourse( $course1 );
    $gradebook->addCourse( $course2 );
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
                <?php foreach ( $course->getStudent() as $student ): ?>
                    <tr>
                        <td><?php echo $student->getName(); ?></td>
                        <td><?php echo $course->getName(); ?></td>
                        <td><?php echo $course->getGrade( $student->getId() ); ?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
