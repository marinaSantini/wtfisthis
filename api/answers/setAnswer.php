<?php

// checks to see that all the POSTs
if(strlen($_POST['reply_text'])!= 0) {
	
	$replay_text = $_POST['reply_text'];
	$question_id = $_POST['question_id'];
	$replay_author = $_POST['reply_author'];
	
	$answer = new Answer(null, $question_id, $replay_author, $replay_text, null);
	
	if($answer->save()) {
		echo '{"id":"' . $answer->getId() . '"}';;
	} else {
		echo '{"error":"Det gick inte att spara " . "svaret" . " i databasen"}';
	}
	
}
else {
	echo '{"error":"Fyll i alla fält!"}';
}
