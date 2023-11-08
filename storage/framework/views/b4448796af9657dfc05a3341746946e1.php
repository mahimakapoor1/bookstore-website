<!DOCTYPE html>
<html>
<head>
    <!-- Your HTML head content here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">

</head>
<style>
    /* Navbar Styles */
.navbar {
    background-color: blue; /* Change this color to your desired header background color */
    height: 70px; /* Adjust the height as needed */
}

.navbar .navbar-brand {
    font-size: 24px;
    font-weight: bold;
}

.navbar .navbar-toggler-icon {
    background-color: #fff;
}

.navbar .navbar-toggler-icon::before {
    background-color: #fff;
}

.navbar .nav-link {
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
}

.navbar .nav-link:hover {
    color: #fff;
    background-color: #0056b3; /* Change this color to your desired hover background color */
    border-radius: 5px;
}

/* Footer Styles */
footer {
    background-color: #f8f9fa; /* Change this color to your desired footer background color */
    padding: 20px 0;
}

.footer .nav-item {
    margin: 0 10px;
}

.footer .nav-link {
    color: #333;
    font-weight: 600;
}

.footer .nav-link:hover {
    color: #007BFF; /* Change this color to your desired hover color */
}

.footer .text-body-secondary {
    font-size: 14px;
}

/* Additional Styles */
body {
    background-color: #f0f0f0; /* Change this color to your desired body background color */
    margin: 0;
}

    </style>
<body>
    <header>
    <nav class="navbar nav-justified navbar-expand-lg bg-body-tertiary ">
  <div class="container-md">
    <a class="navbar-brand" href="#">
    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    </header>
    <br>
    <div>
    <?php echo $__env->yieldContent('content'); ?> <!-- This is where the content from other views will be inserted -->
    
</div>
    <footer class="footer mt-5">
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>
</footer>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\bookstore-website\resources\views/app.blade.php ENDPATH**/ ?>