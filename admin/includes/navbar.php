<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="category.php">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="post.php">Post</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome, <?php echo $_SESSION['name'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>