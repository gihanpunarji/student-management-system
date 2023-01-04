// Signup Teacher

function teacher_signup () {
    const u_name = document.getElementById("uname");
    const password = document.getElementById("password");
    const l_code = document.getElementById("l_code");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                window.location = "teachersPanel.php";
            }
        }
    }

    const form = new FormData();

    form.append('u_name', u_name.value);
    form.append('password', password.value);
    form.append('l_code', l_code.value);

    req.open("POST", "public/signup_teacher_process.php", true);
    req.send(form);
}

// Login Teacher

function login_teacher () {
    const u_name = document.getElementById("uname");
    const password = document.getElementById("password");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                window.location = "teachersPanel.php";
            }
        }
    }

    const form = new FormData();

    form.append('u_name', u_name.value);
    form.append('password', password.value);

    req.open("POST", "public/login_teacher_process.php", true);
    req.send(form);
}


// Save Profile

function save_profile () {
    const f_name = document.getElementById("f_name");
    const l_name = document.getElementById("l_name");
    const mobile = document.getElementById("mobile");

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

    req.open("POST", "public/saveProfileProcessTeacher.php", true);
    req.send(form);
}