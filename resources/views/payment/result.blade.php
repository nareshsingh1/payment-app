<!DOCTYPE html>
<html>
<head>
    <title>Payment Result</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
        <h1 class="text-xl font-bold mb-4">Payment Status</h1>
        <p class="text-green-600 font-medium">{{ $message }}</p>
        <a href="{{ route('payment.form') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Make Another Payment
        </a>
    </div>
</body>
</html>
