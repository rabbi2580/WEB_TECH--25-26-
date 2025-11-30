<!DOCTYPE html>
<html lang="en">
<head>
        <title>Student Registration & Course Selection</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2084e9ff;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #ea0c0cff;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fffbfbff;
            padding: 30px;
            border-radius: 82px;
            
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 6px 0 12px 0;
            border: 1px solid #460404ff;
            border-radius: 40px;
        }
        button {
            background-color: #050606ff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 5px;
        }
        button:hover {
            background-color: #1f2328ff;
        }
        .success-message {
            margin-top: 15px;
            padding: 10px;
            background-color: #093613ff;
            color: #00b32aff;
            border-radius: 4px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin: 5px;
            padding: 8px;
            background-color: #a1a7adff;
            display: flex;
            justify-content: space-between;
            align-items: first baseline;
            border-radius: 4px;
        }
        .delete-btn {
            background-color: #dc3545;
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
            color: white;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #5e4d4fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Students Registration</h2>
    <form id="registrationForm">
        <label>Full Name:</label>
        <input type="text" id="fullName" required>
        <label>Email:</label>
        <input type="email" id="email" required>
        <label>Password:</label>
        <input type="password" id="password" required>
        <label>Confirm Password:</label>
        <input type="password" id="confirmPassword" required>
        <button type="submit">Register</button>
    </form>

    <div id="successMessage" class="success-message" style="display:none;"></div>

    <hr>

    <h2>Course Selection</h2>
    <input type="text" id="courseName" placeholder="Enter Course Name">
    <button id="addCourseBtn">Add Course</button>
    <ul id="courseList"></ul>
</div>

<script>
    // Registration Validation
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let fullName = document.getElementById('fullName').value.trim();
        let email = document.getElementById('email').value.trim();
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('confirmPassword').value;

        if (!fullName || !email || !password || !confirmPassword) {
            alert('All fields are required.');
            return;
        }

        if (!email.includes('@')) {
            alert('Email must contain "@" symbol.');
            return;
        }

        if (password !== confirmPassword) {
            alert('Password and Confirm Password do not match.');
            return;
        }

        // Success
        let successDiv = document.getElementById('successMessage');
        successDiv.style.display = 'block';
        successDiv.innerHTML = `<strong>Registration Successful!</strong><br>
                                Name: ${fullName}<br>
                                Email: ${email}`;
        // Reset form
        document.getElementById('registrationForm').reset();
    });

    // Course Management
    document.getElementById('addCourseBtn').addEventListener('click', function() {
        let courseInput = document.getElementById('courseName');
        let courseName = courseInput.value.trim();
        if (!courseName) {
            alert('Please enter a course name.');
            return;
        }

        let li = document.createElement('li');
        li.textContent = courseName;

        let delBtn = document.createElement('button');
        delBtn.textContent = 'Delete';
        delBtn.className = 'delete-btn';
        delBtn.onclick = function() {
            li.remove();
        }

        li.appendChild(delBtn);
        document.getElementById('courseList').appendChild(li);

        courseInput.value = '';
    });
</script>

</body>
</html>
