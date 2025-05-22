<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-header {
            margin-bottom: 30px;
            text-align: center;
            color: #0044cc;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }

        .contact-form label {
            font-weight: bold;
        }

        .contact-form button {
            background-color: #0044cc;
            color: white;
        }
        
        .contact-info p {
            font-size: 1.2rem;
        }

        .footer {
            background-color: #0044cc;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <!-- Contact Header -->
    <div class="contact-header">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Reach out with any questions or concerns.</p>
    </div>

    <!-- Contact Information -->
    <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:support@medicinedonation.com">support@medicinedonation.com</a></p>
        <p><strong>Phone:</strong> +123456789</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h4>Send us a message:</h4>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Medicine Donation. All rights reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

