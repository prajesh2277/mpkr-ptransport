<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Booking</title>
    <link rel="stylesheet" href="vechile booking.css">
</head>
<body>
    <div class="container">
        <h2>Vehicle Booking</h2>
        <form action="submit_booking.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="vehicle">Vehicle:</label>
            <select id="vehicle" name="vehicle" required>
                <option value="">Select a vehicle</option>
                <option value=" vechile MP20HB9844.html">vechile MP20HB9844</option>
                <option value="vechile MP20HB9744.html">vechile MP20HB9744</option>
                <option value="vechile MP20HB9044.html">vechile MP20HB9044</option>
                <option value="vechile MP20HB9154.html">vechile MP20HB9154</option>
                <!-- Add more options as needed -->
            </select>

            <input type="submit" value="Book Now">
        </form>
        <div class="container">
            <h2>Book Now</h2>
            <p>Thank you for your interest in booking a vehicle with us. Please click the button below to proceed with your booking:</p>
            <p>If you have any questions or need assistance, feel free to reply to this message or contact our support team at [Customer Support Number 7828798683].</p>
        </div>
        <button class="exit-button" onclick="exitPayment()">Exit</button>
    </div>
    <script>
        function exitPayment() {
            // Redirect to the home page
            window.location.href = "home.php";
        }
    </script>
</body>
</html>