<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About UPTM</title>
    <link rel="stylesheet" href="about.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #00008b; /* Dark blue */
            overflow: hidden;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: inline-block;
            font-size: 16px;
        }

        .navbar a:hover {
            background-color: #575fcf; /* Light blue hover effect */
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .text-section {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            padding: 20px;
        }

        .text-section h2 {
            color: #00008b; /* Dark blue heading */
            font-size: 24px;
            border-left: 4px solid #00008b;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        .text-section p {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        .image-section {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            padding: 20px;
            text-align: center; /* Center images */
        }

        .image-section img {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Space between the images */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="admission.php">Admission</a>
        <a href="digitaluniversity.php">Digital University</a>
        <a href="review.php">Review</a>
    </div>

    <!-- Content Container -->
    <div class="container">
        <!-- Text Section -->
        <div class="text-section">
            <h2>ABOUT UPTM</h2>
            <p><strong>Universiti Poly-Tech Malaysia</strong>, also known as <strong>UPTM</strong>, is an institution of higher learning that has built itself upon years of continuous improvements and change, leading to a wealth of experience and wisdom.</p>
            <p>At UPTM, the focus is on providing a comprehensive education that goes beyond theoretical knowledge to include the development of essential human attributes, attitude, and aptitude. The university's committed educators work tirelessly to ensure that every student receives personalised attention and support that enables them to realise their full potential.</p>
            <p>UPTM's curriculum is anchored in contemporary technologies and business education, offering students a wide range of innovative courses that challenge and stimulate their skills and expertise essential for them to thrive in the fast-paced world of business. It is important to note that Poly-Tech, in this context, refers to the incorporation of cutting-edge technologies into business education and should not be confused with technical or vocational education.</p>
            <p>On the overall, the university's emphasis is on producing graduates who are not only highly skilled and knowledgeable but also possess the essential qualities of professionalism, ethical responsibility, and social awareness. With its unwavering commitment to academic excellence, UPTM stands out as an institution of higher learning that prepares students for successful careers and meaningful lives.</p>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img src="uptm3.png" alt="UPTM Campus">
            <img src="Student UPTM.jpeg" alt="UPTM Additional Campus">
        </div>
    </div>
</body>
</html>
