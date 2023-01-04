// Signup Academic Officer

function signup_ac_officer () {
    const u_name = document.getElementById("uname");
    const password = document.getElementById("password");
    const l_code = document.getElementById("l_code");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                window.location = "academic_officer_panel.php";
            }
        }
    }

    const form = new FormData();

    form.append('u_name', u_name.value);
    form.append('password', password.value);
    form.append('l_code', l_code.value);

    req.open("POST", "public/signup_academicOfficer_process.php", true);
    req.send(form);
}

// Login Academic Officer

function login_ac_officer () {
    const u_name = document.getElementById("uname");
    const password = document.getElementById("password");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                window.location = "academic_officer_panel.php";
            }
        }
    }

    const form = new FormData();

    form.append('u_name', u_name.value);
    form.append('password', password.value);

    req.open("POST", "public/login_academicOfficer_process.php", true);
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

    req.open("POST", "public/saveProfileProcess.php", true);
    req.send(form);
}

// Change Password 

function change_pw () {
    window.location = "change_ac_officer_pw.php";
}

function send_v_code () {
    const email = document.getElementById("email2");
    const vCode = document.getElementById("l_code2");
    const password = document.getElementById("password2");
    const vText = document.getElementById("v_text");
    const Pbtn = document.getElementById("cp");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            alert(t);
            if(t == "success") {
                vText.classList.remove("d-none");
                vCode.removeAttribute("disabled");
                password.removeAttribute("disabled");
                Pbtn.removeAttribute("disabled");
            }
        }
    }

    req.open("GET", "public/sendCodeToChangePWProcess.php?e=" + email.value, true);
    req.send();
}

function change_password () {
    const password = document.getElementById("password2");
    const v_code = document.getElementById("l_code2");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            if (t == "success") {
                alert ("Password reset successful");
                window.location = "academic_officer_profile.php";
            }
        }
    } 

    const form = new FormData();

    form.append("password", password.value);
    form.append("v_code", v_code.value);

    req.open("POST", "public/ChangePasswrodAcOfficerProcess.php", true);
    req.send(form);
}