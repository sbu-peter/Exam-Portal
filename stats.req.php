<?php
 require_once 'dbConnection.php';
// get the total number of students enrolled for the exams
  $getStudents = "SELECT COUNT(studentNum) FROM enrollments";
    $totalStudents = $conString->query($getStudents);
      if($totalStudents == false){
          $error = $conString->error;
              echo "error: " .$error;
              exit();
            }
            $studentsRow = $totalStudents->num_rows;
            for ($i = 0; $i < $studentsRow; $i++): $totalStu = $totalStudents->fetch_assoc();
                    $students = implode($totalStu);
                  endfor;
// get the total number of modules that have been enrolled for the exams
  $getModules = "SELECT COUNT(moduleCode) FROM modules";
    $totalModules = $conString->query($getModules);
      if($totalModules == false){
        $error = $conString->error;
        echo "error: " . $error;
        exit();
      }
      $modulesRow = $totalModules->num_rows;
        for ($i = 0; $i < $modulesRow; $i++): $totalMod = $totalModules->fetch_assoc();
              $modules = implode($totalMod);
            endfor;
  ?>
