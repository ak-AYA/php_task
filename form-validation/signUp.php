<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #heading {
            background-color: #fce8ef;
            width: 100%;
            margin: auto;
            padding: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .text h1:hover {
            color: #FFD700;
            transition-duration: 0.3s;
        }

        .text p {
            font-size: 20px;
        }

        .btn {
            width: 450px;
            margin: 10px;
            padding: 10px;
            border: 2px solid;
            border-radius: 20px;
        }

        .text {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 50px;
        }

        .inputs {
            margin: 20px;
        }

        .inputs .form-control {
            border-radius: 10px;
            width: 450px;
            height: 3rem;
            padding: 15px;
        }

        .form-group.success input {
            border-color: #A4CC00;
        }

        .form-group.error input {
            border-color: #CC0000;
        }

        .form-group.error span {
            color: #CC0000;
            font-size: 12px;
        }

        .sub {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

<?php

require("connct.php");

$errors = []; 

if (isset($_POST["submit"])) {

    $Full_name = trim($_POST['fullName']);
    $Email = trim($_POST['email']);
    $Mobile = trim($_POST['mobile']);
    $Password = trim($_POST['password']);
    $CheckPassword = trim($_POST['CheckPassword']);
    $BOD = $_POST['BOD'];
    $Gender = $_POST['gender'];

  
    if (empty($Full_name) || !preg_match("/^[A-Za-z]+(?:\s+[A-Za-z]+){3}$/", $Full_name)) {
        $errors['fullName'] = "Full Name must be at least 4 words.";
    }


    if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address.";
    }

 
    if (empty($Mobile) || !preg_match("/^\d{14}$/", $Mobile)) {
        $errors['mobile'] = "Mobile number must be 14 digits.";
    }

    if (empty($Password) || !preg_match("/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $Password)) {
        $errors['password'] = "Password must contain at least 8 characters, including an uppercase, a lowercase, a number, and a special character.";
    }


    if ($Password !== $CheckPassword) {
        $errors['CheckPassword'] = "Passwords do not match.";
    }

    $dobDate = new DateTime($BOD);
    $today = new DateTime();
    $age = $today->diff($dobDate)->y;
    if (empty($BOD) || $age < 16) {
        $errors['BOD'] = "You must be at least 16 years old.";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO `users` (`Full_name`, `Email`, `Mobile`, `Password`, `BOD`, `Gender`) VALUES (:user_name, :user_email, :user_mobile, :pass, :dob, :user_gender)";
        $stmt = $conn->prepare($sql);

        $data = [
            'user_name' => $Full_name,
            'user_email' => $Email,
            'user_mobile' => $Mobile,
            'pass' => password_hash($Password, PASSWORD_BCRYPT), // hash the password
            'dob' => $BOD,
            'user_gender' => $Gender,
        ];
        
        $stmt->execute($data);

        header('location:welcome.php?message=User added successfully');
        exit;
    }
}

?>



    <div id="heading">
        <div class="text">
            <h1 class="">Sign Up</h1>
            <p>Create an account, it's free!</p>
        </div>
        <form class="inputs" id="signUpForm" method="POST" action="">
            <div class="form-group mb-3">
                <label for="floatingName">Full Name</label>
                <input type="text" class="form-control" id="floatingName" name="fullName" placeholder="Full Name">
                <span id="errorName"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingEmail">Email address</label>
                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
                <span id="errorEmail"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingMobile">Mobile</label>
                <input type="number" class="form-control" id="floatingMobile" name="mobile" placeholder="00962">
                <span id="errorMobile"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <span id="errorPassword"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingCheckPassword">Password Confirmation</label>
                <input type="password" class="form-control" id="floatingCheckPassword" name="CheckPassword"
                    placeholder="Confirm Password">
                <span id="errorCheckPassword"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingDOB">Date of Birth</label>
                <input type="date" class="form-control" id="floatingDOB" name="BOD" placeholder="Date">
                <span id="errorDOB"></span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingSelect">Gender</label>
                <select class="custom-select" id="floatingSelect" name="gender"
                    aria-label="Floating label select example">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="sub">
                <button type="submit" id="signUpBtn" class="btn btn-outline-warning" name="submit">Sign Up</button>
                <p>Already have an account? <a href="http://localhost/php/form-validation/logIn.php"><b>Login</b></a>
                </p>
            </div>

        </form>
    </div>

    <script>
        let form = document.getElementById("signUpForm");
        let signUpBtn = document.getElementById("signUpBtn");
        let name = document.getElementById("floatingName");
        let email = document.getElementById("floatingEmail");
        let mobile = document.getElementById("floatingMobile");
        let password = document.getElementById("floatingPassword");
        let checkPassword = document.getElementById("floatingCheckPassword");
        let dob = document.getElementById("floatingDOB");

        signUpBtn.addEventListener("click", (event) => {
            validateInputs();
            if (isFormValid() === true) {
                form.submit();
            } else {
                event.preventDefault();
            }

        });

        function isFormValid() {
            let inputContainers = form.querySelectorAll('.form-group');
            let result = true;
            inputContainers.forEach((container) => {
                if (container.classList.contains('error')) {
                    result = false;
                }
            });
            return result;
        }


        function validateInputs() {

            ///////////name
            if (name.value === "") {
                setError(name, "Full Name is required");
            } else if (!name.value.match(/^[A-Za-z]+(?:\s+[A-Za-z]+){3}$/)) {
                setError(name, "Full Name must be 4 words.");
            } else {
                setSuccess(name);
            }

            ///////////email
            if (email.value.trim() === "") {
                setError(email, "Email is required");
            } else if (!email.value.trim().match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
                setError(email, "Invalid email address");
            } else {
                setSuccess(email);
            }

            ///////////phone
            if (mobile.value.trim() === "") {
                setError(mobile, "Mobile number is required");
            } else if (!mobile.value.trim().match(/^\d{14}$/)) {
                setError(mobile, "Mobile number must be 14 digits");
            } else {
                setSuccess(mobile);
            }

            ///////////password
            if (password.value.trim() === "") {
                setError(password, "Password is required");
            } else if (!password.value.trim().match(/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/)) {
                setError(password,
                    "Password must contain at least 8 characters, 1 uppercase, 1 lowercase, 1 number, and 1 special character"
                );
            } else {
                setSuccess(password);
            }

            ///////////check password
            if (checkPassword.value.trim() === "") {
                setError(checkPassword, "Password confirmation is required");
            } else if (password.value.trim() !== checkPassword.value.trim()) {
                setError(checkPassword, "Passwords do not match");
            } else {
                setSuccess(checkPassword);
            }

            ///////////BOD
            const dobDate = new Date(dob.value.trim());
            const today = new Date();
            const age = today.getFullYear() - dobDate.getFullYear();

            if (dob.value.trim() === "") {
                setError(dob, "Date of birth is required");
            } else if (age < 16) {
                setError(dob, "You must be at least 16 years old");
            } else {
                setSuccess(dob);
            }
        }

            function setError(element, message) {
                element.parentElement.classList.add("error");
            element.parentElement.classList.remove("success");
            const errorDisplay = element.parentElement.querySelector("span");
            errorDisplay.textContent = message;
        }

        function setSuccess(element) {
            element.parentElement.classList.add("success");
            element.parentElement.classList.remove("error");
            const errorDisplay = element.parentElement.querySelector("span");
            errorDisplay.textContent = "";
        }
    </script>
</body>

</html>