        <h1>RazorPay Integrated App</h1>
        <table class="section">
            <tr>
                <th colspan="2">Payment Form</th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" id="phone" required></td>
            </tr>
            <tr>
                <td>Amount:</td>
                <td><input type="number" id="amount" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="button" onclick="payNow()">Pay</button>
                </td>
            </tr>
        </table>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="RDF_ACTION/razorPayIntegratedAppAction.js"></script>