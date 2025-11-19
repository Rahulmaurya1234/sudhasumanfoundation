
<?php
$success = false;
$error   = "";

// Form submit?
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Form values receive
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);

    // Validation
    if ($name === "" || $email === "" || $mobile === "") {
        $error = "All fields are required.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    }
    elseif (!preg_match("/^\+?\d{7,15}$/", $mobile)) {
        $error = "Invalid mobile number.";
    }
    else {

        // Database Connection
        include "db.php";

        // SQL Insert
        $sql = "INSERT INTO newsletter (name, email, mobile)
                VALUES ('$name', '$email', '$mobile')";

        if (mysqli_query($conn, $sql)) {
            $success = true;
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
}
?>





<footer class="ssf-footer">
    <div class="container ssf-footer-grid">

        <!-- 1: LEFT - Logo + About text -->
        <div class="ssf-footer-about">
            <div class="d-flex align-items-start mb-3">
                <img src="images/logo.png" alt="Sudha Suman Foundation" class="ssf-footer-logo">
                <div class="ms-3">
                    <h4 class="ssf-footer-title">Sudha Suman<br>Foundation</h4>
                </div>
            </div>

            <p class="ssf-footer-text">
                Sudha Suman Foundation is a non-profit dedicated to empowering children, women and communities through  quality education, essential healthcare, sustainable livelihood initiatives, and holistic social development in underserved areas.
            </p>

            <a href="about.php" class="ssf-footer-readmore">Read More</a>
        </div>

        <!-- 2: MIDDLE - Useful Links -->
        <div class="ssf-footer-links">
            <h5>Useful Links</h5>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="projects.php">PROJECTS</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>

        <div class="container">
  <div class="row">
    <!-- Left Column: Contact + Social stacked vertically -->
    <div class="col-md-6 d-flex flex-column justify-content-between">
      <div>
        <h5>CONTACT US</h5>
        <p class="ssf-footer-contact-line">
          <i class="fa-solid fa-location-dot me-2"></i>
          Sudha Suman Foundation<br>
          XYZ Road, Some Area<br>
          New Delhi 1100XX, India
        </p>

        <p class="ssf-footer-contact-line">
          <i class="fa-solid fa-mobile-screen-button me-2"></i> +91-98XXXXXXX
        </p>
        <p class="ssf-footer-contact-line">
          <i class="fa-solid fa-phone me-2"></i> 011-4XXX XXXX
        </p>
        <p class="ssf-footer-contact-line">
          <i class="fa-regular fa-envelope me-2"></i> info@sudhasuman.org
        </p>
      </div>

      <div class="mt-3">
        <h6>Follow us</h6>
        <div class="ssf-footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <!-- Right Column: Map -->
    <div class="col-md-6">

         <!-- Newsletter -->
        <div class="ssf-newsletter">

    <?php if ($success): ?>
        <div class="msg success">✓ Thank you! You have subscribed successfully.</div>
    <?php elseif ($error): ?>
        <div class="msg error">✗ <?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="footer.php ">
        <h4>Subscribe to Newsletter</h4>

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email ID" required>
        <input type="text" name="mobile" placeholder="Mobile Number" required
               pattern="\+?\d{7,15}" title="Digits only, optional +">

        <button class="ssf-btn">SUBMIT</button>
    </form>
</div>

    </div>
       </div>
     </div>

    </div>
    <!-- .container -->

    <div class="ssf-footer-bottom">
        © <?php echo date('Y'); ?> Sudha Suman Foundation • All Rights Reserved
    </div>
</footer>
 