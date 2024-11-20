<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Landing Page</title>
    <style>
        /* General body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header styles */
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header p {
            font-size: 18px;
            margin-top: 10px;
        }

        /* Main section styles */
        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            font-size: 28px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            font-size: 18px;
            margin: 5px 0;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #218838;
        }

        /* Footer styles */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Service</h1>
        <p>Your solution for better productivity.</p>
    </header>

    <main>
        <section>
            <h2>Why Choose Us?</h2>
            <ul>
                <li>High-quality services</li>
                <li>24/7 customer support</li>
                <li>Affordable pricing</li>
            </ul>
        </section>

        <section>
            <h2>Get Started</h2>
            <p>Sign up today and experience the best services we offer. It's easy and free!</p>
            <button onclick="alert('Redirecting to sign up page...')">Sign Up Now</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
