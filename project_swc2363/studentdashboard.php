<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="studentdashboard.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="digitaluniversity.php">Digital University</a></li>
                <li><a href="javascript:void(0);" onclick="logout()">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="admin-dashboard">
        <h1>Admin Dashboard</h1>
        <p>Insert online class details below:</p>

        <form id="online-class-form">
            <label for="course-name">Course Name:</label>
            <input type="text" id="course-name" placeholder="Enter course name" required>

            <label for="subject-name">Subject Name:</label>
            <input type="text" id="subject-name" placeholder="Enter subject name" required>

            <label for="lecturer-name">Lecturer Name:</label>
            <input type="text" id="lecturer-name" placeholder="Enter lecturer name" required>

            <label for="class-name">Class Name:</label>
            <input type="text" id="class-name" placeholder="Enter class name" required>

            <label for="class-date">Class Date:</label>
            <input type="date" id="class-date" required>

            <label for="class-time-start">Class Time (Start):</label>
            <input type="time" id="class-time-start" required>

            <label for="class-time-end">Class Time (End):</label>
            <input type="time" id="class-time-end" required>

            <label for="google-meet-link">Google Meet Link:</label>
            <input type="url" id="google-meet-link" placeholder="Enter Google Meet link" required>

            <button type="button" onclick="addMeeting()">Add Meeting</button>
        </form>

        <h2>Scheduled Meetings</h2>
        <div id="meeting-list">
            <!-- Meetings will be dynamically added here -->
        </div>
    </section>

    <script>
        // Function to log out and redirect to Digital University page
        function logout() {
            window.location.href = "digitaluniversity.html";
        }

        // Function to add a new meeting
        function addMeeting() {
            const courseName = document.getElementById("course-name").value;
            const subjectName = document.getElementById("subject-name").value;
            const lecturerName = document.getElementById("lecturer-name").value;
            const className = document.getElementById("class-name").value;
            const classDate = document.getElementById("class-date").value;
            const classTimeStart = document.getElementById("class-time-start").value;
            const classTimeEnd = document.getElementById("class-time-end").value;
            const googleMeetLink = document.getElementById("google-meet-link").value;

            if (!courseName || !subjectName || !lecturerName || !className || !classDate || !classTimeStart || !classTimeEnd || !googleMeetLink) {
                alert("Please fill in all fields.");
                return;
            }

            const meeting = {
                id: Date.now(),
                courseName,
                subjectName,
                lecturerName,
                className,
                classDate,
                classTimeStart,
                classTimeEnd,
                googleMeetLink,
            };

            let meetings = JSON.parse(localStorage.getItem("meetings")) || [];
            meetings.push(meeting);
            localStorage.setItem("meetings", JSON.stringify(meetings)); // Save to local storage
            displayMeetings();
            document.getElementById("online-class-form").reset(); // Clear form
        }

        // Function to display meetings
        function displayMeetings() {
            const meetingList = document.getElementById("meeting-list");

            const meetings = JSON.parse(localStorage.getItem("meetings")) || [];
            meetingList.innerHTML = "";

            meetings.forEach((meeting) => {
                const meetingDiv = document.createElement("div");
                meetingDiv.className = "meeting-entry";
                meetingDiv.innerHTML = `
                    <p><strong>Course:</strong> ${meeting.courseName}</p>
                    <p><strong>Subject:</strong> ${meeting.subjectName}</p>
                    <p><strong>Lecturer:</strong> ${meeting.lecturerName}</p>
                    <p><strong>Class:</strong> ${meeting.className}</p>
                    <p><strong>Date:</strong> ${meeting.classDate}</p>
                    <p><strong>Time:</strong> ${meeting.classTimeStart} - ${meeting.classTimeEnd}</p>
                    <p><strong>Google Meet Link:</strong> <a href="${meeting.googleMeetLink}" target="_blank">${meeting.googleMeetLink}</a></p>
                    <button onclick="editMeeting(${meeting.id})">Edit</button>
                    <button onclick="deleteMeeting(${meeting.id})">Delete</button>
                    <hr>
                `;
                meetingList.appendChild(meetingDiv);
            });
        }

        // Function to delete a meeting
        function deleteMeeting(meetingId) {
            let meetings = JSON.parse(localStorage.getItem("meetings")) || [];
            meetings = meetings.filter((meeting) => meeting.id !== meetingId);
            localStorage.setItem("meetings", JSON.stringify(meetings)); // Save updated list
            displayMeetings();
        }

        // Function to edit a meeting
        function editMeeting(meetingId) {
            let meetings = JSON.parse(localStorage.getItem("meetings")) || [];
            const meeting = meetings.find((m) => m.id === meetingId);

            if (meeting) {
                document.getElementById("course-name").value = meeting.courseName;
                document.getElementById("subject-name").value = meeting.subjectName;
                document.getElementById("lecturer-name").value = meeting.lecturerName;
                document.getElementById("class-name").value = meeting.className;
                document.getElementById("class-date").value = meeting.classDate;
                document.getElementById("class-time-start").value = meeting.classTimeStart;
                document.getElementById("class-time-end").value = meeting.classTimeEnd;
                document.getElementById("google-meet-link").value = meeting.googleMeetLink;

                deleteMeeting(meetingId);
            }
        }

        // Display meetings on page load
        window.onload = function () {
            displayMeetings();
        };
    </script>
</body>
</html>
