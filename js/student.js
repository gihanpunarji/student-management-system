function verifyEmail () {
    const email = document.getElementById("email");
    const vCode = document.getElementById("v_code");
    const Pbtn = document.getElementById("btn");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function() {
       if( req.readyState == 4 ) {
        let t = req.responseText;
        alert(t);
       }
    }

    const form = new FormData();

    form.append("email", email.value);

    req.open("POST", "public/verifyStudentProcess.php", true);
    req.send(form);
}

// Student signup

function studentSignup () {
    const vCode = document.getElementById("v_code");
    const email = document.getElementById("email");
    
    const req = new XMLHttpRequest ();

    req.onreadystatechange = function() {
       if( req.readyState == 4 ) {
        let t = req.responseText;
        alert(t);
            if (t == "success") {
                window.location = "studentPortal.php";
            }
       }
    }

    const form = new FormData();

    form.append("v_code", vCode.value);
    form.append("email", email.value);

    req.open("POST", "public/signupStudentProcess.php", true);
    req.send(form);
}

// Login Student

function studentLogin () {
    const u_name = document.getElementById("uname");
    const password = document.getElementById("password");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            alert(t);
            if (t == "success") {
                window.location = "studentPortal.php";
            }
        }
    }

    const form = new FormData();

    form.append('u_name', u_name.value);
    form.append('password', password.value);

    req.open("POST", "public/login_student_process.php", true);
    req.send(form);
}