<?php
// Template Name: contact us




get_header();
?>


<div class="contact-container">
    <h1>Contact Us</h1>
    <div class="contact-info">
        <p><i class="fas fa-map-marker contact-icon"></i>123 Main Street, City, Country</p>
        <p><i class="fas fa-phone contact-icon"></i>+1 (123) 456-7890</p>
        <p><i class="fas fa-envelope contact-icon"></i>info@example.com</p>
    </div>
    <div class="contact-form">
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>


<?php
get_footer();
?>