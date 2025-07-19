<?php
include("db.php");
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];
  $sql = "UPDATE posts SET title=?, content=? WHERE id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $id);
  mysqli_stmt_execute($stmt);
  header("Location: index.php");
}
?>

<h2>Edit Post</h2>
<form method="POST">
  Title:<br><input type="text" name="title" value="<?php echo $post['title']; ?>" required><br><br>
  Content:<br><textarea name="content" rows="6" required><?php echo $post['content']; ?></textarea><br><br>
  <button type="submit">Update</button>
</form>
