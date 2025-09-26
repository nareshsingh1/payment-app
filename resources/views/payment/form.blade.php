<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-xl font-bold mb-4">Make a Payment</h1>
        <form action="{{ route('payment.pay') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Select Payment Gateway:</label>
                <select name="gateway" id="gateway" class="w-full border rounded p-2">
                    <option value="stripe">Stripe</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <div>
                <label class="block mb-1">Amount (₹):</label>
                <input type="number" name="amount" class="w-full border rounded p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Pay Now
            </button>
        </form>
    </div>
</body>
</html>
