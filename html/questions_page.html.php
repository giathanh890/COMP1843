<div class="page-content-container">

    <div class="side-bar-container">
        <div class="side-bar">
            <ul>
                <a href=""><li id="home-choice">Home</li></a>
                <a href=""><li>Questions</li></a>
                <a href=""><li>Tags</li></a>
                <a href=""><li>Users</li></a>
            </ul>
        </div>
    </div>

    <div class="content-container">

        <div class="filter-container">

            <div class="top-container">
                <p>Total questions:</p>
                <form action="index.php" method="post">
                    <input type="hidden" name="askQuestion">
                    <input class="ask-question-button" type="submit" value="Ask Question">
                </form>
                
            </div>

            <div class="bottom-container">

                <div class="total-question">
                    <p><?=$GLOBALS["totalQuestions"];?></p>
                </div>

                <div class="filter">
                    <button>Newest</button>
                    <button>Popular</button>
                    <button>Answered</button>
                    <button>Unanswered</button>
                    <button class="filter-option">Filter</button>
                </div>

            </div>
            
        </div>
        <div class="question-content-container">
        <?php include "php/pagination.php"; ?>
        <?php foreach(Pagination() as $questions): ?>    
            <div class="content">
                <a href="">
                    <div class="question-container">

                        <div class="question-content">
                            <h2><?=$questions['Question_title']; ?></h2>
                            <p class="question"><?=$questions['Question_content'] ?></p>
                            <div class="question-details">

                                <div class="question-posted-date">
                                    <p>Posted Date:</p>
                                    <p><?=$questions['Question_date']; ?></p>
                                </div>

                                <div class="question-posted-time">
                                    <p>Posted Time: </p>
                                    <p><?=PostedTimeCalculate($questions)." "."ago"; ?></p>
                                </div>

                                <div class="question-tag">
                                    <p>Tag:</p>
                                </div>

                            </div>

                        </div>

                        <div class="question-view">

                            <div class="view">
                                <p><?=$questions['Question_view_number']; ?></p>
                                <p>View</p>
                            </div>

                            <div class="answer">
                                <p><?=$questions['Question_answer_number']; ?></p>
                                <p>Answer</p>
                            </div>

                        </div>

                    </div>

                </a> 

            </div>
       
        <?php endforeach;?>
        <form action="../index.php" method="post">
        <div class="pagination-container">
            <div class="pagination-content-container">
                <?php 
                    $currentActivePage = getActivePage();
                    if($currentActivePage >= 2):
                ?>
                <div class="pagination-content">
                    <button name="back-button" value=<?="'" . $currentActivePage=$currentActivePage-1 . "'"?>><</button>
                </div>
                <?php endif; ?>
                <?php 
                for($page = 1; $page <= $GLOBALS["totalPage"]+1; $page++)
                {
                    if($page == getActivePage())
                    {
                        $currentActivePage = $page;
                        echo '<div class="pagination-content">';
                        echo '<button class="active">'. $page .'</button>';
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div class="pagination-content">';
                        echo '<button name="page-number" value="'. $page . '">'. $page .'</button>';
                        echo '</div>';
                    }
                    
                }
                
                ?>

                <div class="pagination-content">
                    <button name="next-button" value=<?="'" . $currentActivePage=$currentActivePage+1 . "'"?>>></button>
                </div>
            </div>
        </div>
        </form>

        </div>
    </div>

</div>