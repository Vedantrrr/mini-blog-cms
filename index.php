<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");
?>

<h2>📝 My Blog</h2>
<a href="create.php">+ New Post</a>
<hr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <h3><?php echo $row['title']; ?></h3>
  <p><?php echo nl2br($row['content']); ?></p>
  <small><?php echo $row['created_at']; ?></small><br>
  <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
  <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
  <hr>
<?php } ?>
