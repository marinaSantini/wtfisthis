<?php
	require_once '../lib/base.php';
	require_once "../lib/simpletest/unit_tester.php";
	require_once "../lib/simpletest/autorun.php";
	require_once '../lib/classes/Question.class.php';

	class test_phpflickr extends UnitTestCase {
		/*
		public function test_save() {
			$question = new Question($id = null, 'Test Question', 'This is a test question', Photo::from_file('../mobile/images/handwriting_small.jpg', 'test image', $description));
			$question->save();
			$id = Db::insert_id();
			$this->assertEqual($id, $question->getId());
			$this->assertTrue(is_numeric($id) && is_numeric($question->getId()));
			$this->assertFalse($id == 0 || $question->getId() == 0);
		}
		*/
		
		public function test_loadAnswers () {
			$id = 7;
			$question = new Question($id);
			$this->assertEqual($id, $question->getId());
			$this->assertNotEqual(0, count($question->getAnswers()));			
		}
		
		public function test_photo_urls () {
			$question = new Question(8);
			$photo_urls = $question->getPhoto()->getUrls();
			$this->assertNotNull($photo_urls['medium']);
		}
	}
	
?>