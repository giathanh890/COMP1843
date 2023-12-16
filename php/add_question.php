<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

include "./connect_sql.php";

if ($connected)
{
    $questionTitle = $_POST["question-title"];
    $questionContent = $_POST["question-body"];
    $questionDate = date("Y-m-d");
    $questionTime = date("H:i:s");

    $add_question_sql = "INSERT INTO question_list (Question_title, Question_content, Question_date, Question_time) VALUES ('{$questionTitle}', '{$questionContent}', '{$questionDate}', '{$questionTime}')";
    $pdo->exec($add_question_sql);
    header("location:../index.php");
}
?>