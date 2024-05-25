<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #B8C3D0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
        }
        .card .icon {
            font-size: 4rem;
            color: green;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <div class="card-body">
            <div class="icon mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#1A8655" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>

            </div>
            <h3 class="card-title">Payment Successful</h3>

            <ul class="list-group list-group-flush" style="font-size: 14px; text-align: left;">
                <li class="list-group-item">ID : #{{ $data_payment->id }}</li>
                <li class="list-group-item">Name : {{ $data_payment->customer_name }}</li>
                <li class="list-group-item">Email : {{ $data_payment->customer_email }}</li>
                <li class="list-group-item">Package : {{ $data_payment->package_name }}</li>
                <li class="list-group-item">Amount Paid : {{ ($data_payment->currency == 'usd' ? '$' : 'IDR ')}}{{ $data_payment->amount_paid }}</li>
              </ul>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
