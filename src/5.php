 <?php
function mySchoolProject() {
    $randomNumber = rand(1, 10);
    if ($randomNumber % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}
 ?>