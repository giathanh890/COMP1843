<?php
global $totalPage;
global $currentActivePage;

function getActivePage()
{
    if(isset($_POST['next-button']))
    {
        $currenActivePage = $_POST['next-button'];
        return $currenActivePage;
    }  
    else if(isset($_POST['back-button']))
    {
        $currenActivePage = $_POST['back-button'];
        return $currenActivePage;
    }
    else if(isset($_POST['page-number']))
    {
        $currenActivePage = $_POST['page-number'];
        return $currenActivePage;
    }
    else
    {
        $currenActivePage = 1;
        return 1;
    }  
}
function Pagination()
{
    global $totalQuestions;
    global $totalPage;
    $pageNumber = getActivePage();
    $pageContentLimit = 10;
    $totalPage = ($totalQuestions-1)/$pageContentLimit;
    $initialPage = ($pageNumber-1)*$pageContentLimit;
    $paginatedQuery = "SELECT * FROM question_list LIMIT ". $initialPage .",". $pageContentLimit;
    $paginatedQuestionQuery = $GLOBALS['pdo']->query($paginatedQuery);
    $paginatedQuestion = $paginatedQuestionQuery->fetchAll();
    return $paginatedQuestion;
}

?>