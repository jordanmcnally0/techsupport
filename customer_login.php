<?php include '../view/header.php'; ?>
<a href="../home.php">Home</a><br/><br/>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- display a search form -->
    <form action="." method="post">
        <input type="hidden" name="action" value="display_register">
        <label>Email:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email); ?>">
        <input type="submit" value="Login">
    </form>

</main>

<?php include '../view/footer.php'; ?>