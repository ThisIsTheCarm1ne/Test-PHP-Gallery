<?php
$comments = array(
    array('author' => 'test_user 1', 'comment' => 'This is the first comment.'),
    array('author' => 'test_user 2', 'comment' => 'Another comment.'),
    array('author' => 'test_user 3', 'comment' => 'Yet another comment.'),
);

echo json_encode($comments);
?>