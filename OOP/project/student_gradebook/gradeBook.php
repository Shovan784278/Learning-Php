<?php 
    class Gradebook{
        protected $courses;

        public function addCourses($course){
            return $this->courses[] = $course;
        }

        public function getCourses(){
            return $this->courses;
        }

        public function getAverageGrade(){
            $total = 0;
            $count = count($this->courses);
            foreach($this->courses as $grade){
                $total += $grade;
                $count++;
            }

            return $count > 0 ? $total/$count:0;
        }
        

    }

?>



    