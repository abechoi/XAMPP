<?php
    require('config/db.php');
    require('config/config.php');

    // Get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);

    // Free result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
    <h1><?php echo $post['title']; ?></h1>
    <div class="container">     
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>           
        <small>
            Created on <?php echo $post['created_at']; ?> by 
            <?php echo $post['author']; ?>
            <p><?php echo $post['body']?></p>
        <small>
    </div>
<?php include('inc/footer.php'); ?>