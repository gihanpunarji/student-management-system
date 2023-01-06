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
                window.location = "student_login.php";
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

// Save Profile

function saveProfile () {
    const f_name = document.getElementById("f_name");
    const l_name = document.getElementById("l_name");
    const mobile = document.getElementById("mobile");
    const address = document.getElementById("address");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                window.location.reload();
            }
        }
    } 

    const form = new FormData();

    form.append("f_name", f_name.value);
    form.append("l_name", l_name.value);
    form.append("mobile", mobile.value);
    form.append("address", address.value);

    req.open("POST", "public/saveProfileProcessStudent.php", true);
    req.send(form);
}

// Log out

function logout () {

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            alert(t);
            if (t == "success") {
                window.location = "student_login.php";
            }
        }
    }

    req.open("GET", "public/signoutStudent.php", true);
    req.send();
}
