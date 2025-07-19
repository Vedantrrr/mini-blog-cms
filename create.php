<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];
  $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $title, $content);
  mysqli_stmt_execute($stmt);
  header("Location: index.php");
}
?>

<h2>New Post</h2>
<form method="POST">
  Title:<br><input type="text" name="title" required><br><br>
  Content:<br><textarea name="content" rows="6" required></textarea><br><br>
  <button type="submit">Save</button>
</form>
