<?php
	# GET /api/index.php?resource=questions
   if (is_post()){
      include 'questions/setQuestion.php';
   }else if (is_get()){
      //If we request a single question by id, we don't want to get all of them
      if (isset($_GET['id'])&&is_numeric($_GET['id'])) {
         include 'questions/getQuestionById.php';
      } else {
         include 'questions/getQuestions.php';
      }
   }
