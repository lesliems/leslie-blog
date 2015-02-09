<?php
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<pTitle: $title></p>";
echo"<p>Post: $post</p>";

