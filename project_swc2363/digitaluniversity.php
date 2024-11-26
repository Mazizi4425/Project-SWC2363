<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital University</title>
    <link rel="stylesheet" href="digitaluniversity.css">
    <script>
        // Function to validate login credentials
        function validateLogin(role) {
            const email = document.getElementById(`${role}-email`).value;
            const password = document.getElementById(`${role}-password`).value;

            const adminEmail = "jamal4762@admin";
            const adminPassword = "jamal4762";

            const studentEmail = "kamal123@student";
            const studentPassword = "kamal123";

            if (
                (role === "admin" && email === adminEmail && password === adminPassword) ||
                (role === "student" && email === studentEmail && password === studentPassword)
            ) {
                alert(`${role.charAt(0).toUpperCase() + role.slice(1)} login successful!`);
                
                // Redirect to respective dashboard
                if (role === "admin") {
                    window.location.href = "admindashboard.php";
                } else if (role === "student") {
                    displayScheduledMeetings();
                }
            } else {
                alert("Invalid email or password. Please try again.");
            }
        }

        // Function to display scheduled meetings for students
        function displayScheduledMeetings() {
            const meetingListContainer = document.createElement("div");
            meetingListContainer.id = "meeting-list";

            const meetings = JSON.parse(localStorage.getItem("meetings")) || [];
            if (meetings.length === 0) {
                alert("No scheduled meetings found.");
                return;
            }

            meetings.forEach((meeting) => {
                const meetingDiv = document.createElement("div");
                meetingDiv.className = "meeting-entry";
                meetingDiv.innerHTML = `
                    <p><strong>Course:</strong> ${meeting.courseName}</p>
                    <p><strong>Subject:</strong> ${meeting.subjectName}</p>
                    <p><strong>Lecturer:</strong> ${meeting.lecturerName}</p>
                    <p><strong>Semester:</strong> ${meeting.semester || "N/A"}</p> <!-- Added Semester -->
                    <p><strong>Class:</strong> ${meeting.className}</p>
                    <p><strong>Date:</strong> ${meeting.classDate}</p>
                    <p><strong>Time:</strong> ${meeting.classTimeStart} - ${meeting.classTimeEnd}</p>
                    <p><strong>Google Meet Link:</strong> <a href="${meeting.googleMeetLink}" target="_blank">${meeting.googleMeetLink}</a></p>
                    <hr>
                `;
                meetingListContainer.appendChild(meetingDiv);
            });

            // Replace the current content with scheduled meetings
            document.body.innerHTML = `
                <header>
                    <h1>Student Dashboard</h1>
                    <button onclick="logout()">Logout</button>
                </header>
                <section>
                    <h2>Scheduled Class</h2>
                </section>
            `;
            document.body.appendChild(meetingListContainer);
        }

        // Function to log out and return to the login page
        function logout() {
            window.location.href = "digitaluniversity.php";
        }
    </script>
</head>
<body>
    <!-- Header Section -->
    <header>
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

    <!-- Title Section -->
    <section class="title">
        <h1>Digital University</h1>
    </section>

    <!-- Login Section -->
    <section class="login-container">
        <!-- Admin Login -->
        <div class="login-box">
            <h2>Admin Login</h2>
            <form onsubmit="event.preventDefault(); validateLogin('admin');">
                <label for="admin-email">Email:</label>
                <input type="email" id="admin-email" placeholder="Enter admin email" required>
                <label for="admin-password">Password:</label>
                <input type="password" id="admin-password" placeholder="Enter admin password" required>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Student Login -->
        <div class="login-box">
            <h2>Student Login</h2>
            <form onsubmit="event.preventDefault(); validateLogin('student');">
                <label for="student-email">Email:</label>
                <input type="email" id="student-email" placeholder="Enter student email" required>
                <label for="student-password">Password:</label>
                <input type="password" id="student-password" placeholder="Enter student password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
</body>
</html>
