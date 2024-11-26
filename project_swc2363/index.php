<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPTM Student Portal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Header and Navigation Bar Styling */
        header {
            background-color: #00008b; /* Dark blue background */
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px; /* Adds spacing between navigation items */
        }

        .nav-list li {
            display: inline-block;
        }

        .nav-list a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 15px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-list a:hover {
            background-color: #575fcf; /* Light blue hover */
            border-radius: 5px;
            color: #fff;
        }

        /* Full-Wide Image Styling */
        main {
            margin: 0;
            padding: 0;
        }

        main img {
            width: 100%; /* Full width of the screen */
            height: auto; /* Keep the aspect ratio */
            display: block;
            margin: 0; /* Remove default margins */
        }
    </style>
</head>
<body>
    <header>
        <!-- Navigation Bar -->
        <nav>
            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="digitaluniversity.php">Digital University</a></li>
                <li><a href="review.php">Review</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <img src="UPTM Campus.jpg" alt="Welcome to UPTM"> <!-- Full-width image -->
    </main>
</body>
</html>
