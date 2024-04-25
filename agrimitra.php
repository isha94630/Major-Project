<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil Testing Form </title>
    <link rel="stylesheet" href="styleAgriMitra.css">
    <script src="https://kit.fontawesome.com/d572ea7b6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Call your Agri Mitra</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="104b3a6a-5db5-4bfd-9245-62cfe57c7191">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
            <input type="text" name="pno" placeholder="Your Phone Number" class="contact-inputs" required>
            <textarea name="Address" placeholder="Your Address" class="contact-inputs" required></textarea>
            <input type="text" name="pincode" placeholder="Your PINCODE" class="contact-inputs" required>
            <textarea name="message" placeholder="Your Message" class="contact-inputs"></textarea>
            <button type="submit">Submit <i class="fa-solid fa-hand-point-left"></i></button>
            <p><a href="services.php"><B><u>GO BACK TO SERVICES</B></u></a></p>
        </form>
        <div class="contact-right">
        </div>
    </div>
</body>
</html>