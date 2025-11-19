<?php include('includes/header.php'); ?>



<?php
$success = false;
$error   = "";

// FORM SUBMIT HUA?
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Values receive
    $name   = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $query  = trim($_POST['query']);

    // Basic validation
    if ($name === "" || $email === "" || $mobile === "" || $query === "") {
        $error = "All fields are required.";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    }
    elseif (!preg_match("/^\+?\d{7,15}$/", $mobile)) {
        $error = "Invalid mobile number.";
    }
    else {
        // OPTIONAL: Save to database

        
        include "db.php";  // <- agar database me save karna ho to yeh add karna

        $sql = "INSERT INTO contact_form (name, email, mobile, query)
                VALUES ('$name','$email','$mobile','$query')";

        if (mysqli_query($conn, $sql)) {
            $success = true;
        } else {
            $error = "Failed to save message. Try again!";
        }
    }
}
?>





<!-- Page Header -->
<section class="contact-header">
    <div class="contact-header-content">
        <div class="contact-breadcrumb">
            <a href="index.php">Home</a> / <span>Contact</span>
        </div>
        <h1>Contact Us</h1>
    </div>

    <div class="faint">
        
        <!-- LEFT INFO BOX -->
        <div class="inner">
            <h5>Address</h5>
            <p>101, First Floor Gladdiola Above Kotak Bank, Hanuman Road, Ville Parle East, Mumbai - 400 0</p>

            <h5>E-Mail :</h5>
            <p>info@3planet.org | communication@3planet.org</p>

            <h5>Mobile No:</h5>
            <p>+91 9876543210 | +91 1234567890</p>

            <h5>Follow Us :</h5>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <iframe
            src="https://www.google.com/maps?q=Kanpur,+Uttar+Pradesh&output=embed"
            width="100%"
            height="170 px"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
  
        </div>

        <!-- RIGHT FORM BOX -->
        <div class="inner-box">
            <?php if ($success): ?>
                <div class="msg success">✓ Thank you! Your message has been received.</div>
            <?php elseif ($error): ?>
                <div class="msg error">✗ <?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="name">Full Name *</label>
                <input id="name" name="name" type="text" required placeholder="Your name">

                <label for="email">Email Address *</label>
                <input id="email" name="email" type="email" required placeholder="you@example.com">

                <label for="mobile">Mobile No *</label>
                <input id="mobile" name="mobile" type="tel" required placeholder="+91 9876543210"
                        pattern="\+?\d{7,15}" title="Digits only, optional leading +">

                <label for="query">Your Query *</label>
                <textarea id="query" name="query" required placeholder="Type your message..."></textarea>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>

    </div>
</section>



<?php include('includes/footer.php'); ?>
