<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Donation</title>
    <style>
        body {
            background-image: url('background.jpg.jpeg'); 
            background-size: cover;
            text-align: center;
            font-family:  Open Sans;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            text-align: left;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .thank-you-message {
            font-size: 40px;
            color: white;
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-weight: bold;
            width: 60%;
            margin: 100px auto;
            display: none;
        }

        .warning-message {
            color: red;
            font-size: 16px;
            font-weight: bold;
            display: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Donate Medicine</h2>
        <form onsubmit="event.preventDefault(); submitForm();">
            <label for="medicine_name">Medicine Name:</label>
            <input type="text" id="medicine_name" name="medicine_name" placeholder="Enter medicine name" required>

            <label for="expiry_date">Expiry Date:</label>
            <input type="date" id="expiry_date" name="expiry_date" required>

            <label for="donor_name">Your Name:</label>
            <input type="text" id="donor_name" name="donor_name" placeholder="Enter your name" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>

            <label for="address">Your Address:</label>
            <textarea id="address" name="address" placeholder="Enter your address" required></textarea>

            <input type="submit" value="Donate">
        </form>

        <div class="warning-message" id="warningMessage">
            ⚠️ Expiry date cannot be in the past! Please choose a valid date.
        </div>
    </div>

    <div class="thank-you-message">
        🎉 Thank You for Your Donation! 🎉
    </div>

    <script>
        function submitForm() {
            const expiryDate = document.getElementById("expiry_date").value;
            const currentDate = new Date().toISOString().split('T')[0]; 

            if (expiryDate < currentDate) {
                document.getElementById("warningMessage").style.display = "block"; 
                return; 
            }

            document.getElementById("warningMessage").style.display = "none"; 

            document.querySelector(".thank-you-message").style.display = "block";
            document.querySelector(".container").style.display = "none";
        }
    </script>

</body>
</html>
