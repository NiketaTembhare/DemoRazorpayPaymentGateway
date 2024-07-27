function payNow() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var amount = document.getElementById('amount').value * 100; // Amount in paise

    var options = {
        "key": "rzp_test_sLRN6G8Xb8mi4t", // Enter the Key ID generated from the Dashboard
        "amount": amount,
        "currency": "INR",
        "name": username,
        "description": "Test Transaction",
        "image": "https://your-logo-url.com/logo.png",
        "handler": function (response) {
            alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
            // You can send the response.razorpay_payment_id to your server for further processing
        },
        "prefill": {
            "name": username,
            "email": email,
            "contact": phone
        },
        "theme": {
            "color": "#F37254"
        }
    };

    var rzp1 = new Razorpay(options);
    rzp1.open();
}