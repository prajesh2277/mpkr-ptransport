<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container">
        <h2>Payment Details</h2>
        <form action="/process_payment" method="post">
            <div class="form-group">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" required>
            </div>
            <div class="form-group">
                <label for="today_date">today Date:</label>
                <input type="text" id="today_date" name="today_date" placeholder="MM/YYYY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
            </div>
            <div class="form-group">
                <button type="submit">Pay Now</button>
            </div>
        </form>
        <button class="exit-button" onclick="exitPayment()">Exit</button>
   
    </div>
    <script>
        function exitPayment() {
            // Redirect to the home page
            window.location.href = "home.php";
        }
    </script>
</body>