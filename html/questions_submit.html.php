<div class="page-content-container">
    <div class="ask-question-container">
        <form action="php/add_question.php" method="post">
            <div class="ask-question-heading">
                <h2>Ask A Question</h2>
                <input class="post-button" type="submit" value="Post Question">
            </div>
            
            <div class="question-title-tag-container">
                <div class="question-title-form-container">

                    <div class="question-title-form">

                        <div class="question-title-content">

                            <div class="question-title-form-heading">
                                <p>Title</p>
                            </div>

                            <div class="question-title-form-body">
                                <div class="question-title-input">
                                    <input type="text" name="question-title" required onkeydown="return (event.keyCode!=13);">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="question-tag-form-container">

                    <div class="question-tag-form">

                        <div class="question-tag-content">

                            <div class="question-tag-form-heading">
                                <p>Tags</p>
                            </div>

                            <div class="question-tag-form-body">
                                <div class="question-tag-input">
                                    <input disabled type="text" name="question-tag" onkeydown="return (event.keyCode!=13);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="question-content-form-container">

                <div class="question-content-form">

                    <div class="question-content">

                        <div class="question-content-form-heading">
                            <p>Body</p>
                        </div>

                        <div class="question-content-form-body">
                            <div class="question-content-input">
                                <textarea name="question-body" id="question-body" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div>