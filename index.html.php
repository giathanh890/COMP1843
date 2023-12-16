<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
include "php/page.php";
include "php/question_time_calculate.php";
include "php/connect_sql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav-bar.css">
    <link rel="stylesheet" href="css/page-content.css">
    <link rel="stylesheet" href="css/side-bar.css">
    <link rel="stylesheet" href="css/question-page/filter.css">
    <link rel="stylesheet" href="css/question-page/question.css">
    <link rel="stylesheet" href="css/question-page/pagination.css">
    <link rel="stylesheet" href="css/ask-question-page/ask-question.css">
    <link rel="stylesheet" href="css/ask-question-page/heading.css">
    <link rel="stylesheet" href="css/ask-question-page/title.css">
    <link rel="stylesheet" href="css/ask-question-page/tags.css">
    <link rel="stylesheet" href="css/ask-question-page/content.css">
    <title>Document</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body 
<?php if(isset($_POST["askQuestion"]))
    {
        echo 'id="ask-question-body"';
    }
    else
    {
        echo '';
    }
?>>
<?php if(isset($error)): ?>
<p><?=$error?></p>
<?php else: ?>
    <header>
        <div class="nav-bar-container">
            <div class="nav-bar">
                <div class="nav-bar-content-container">
                    <div class="logo-container">
                        <a href=""><img class="logo-img" src="photo\official logo.png" alt=""></a>
                    </div>
                    <div class="search-bar-container">
                        <input type="search" placeholder="Search...">
                    </div>
                    <div class="login-button-container">
                        <button class="login-button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php 
    if(isset($_POST["askQuestion"]))
    {
        connectAskQuestionPage();
    }
    else
    {
        connectMainQuestionPage();
    }
?>
<?php endif; closeConnection();?>
</body>
</html>