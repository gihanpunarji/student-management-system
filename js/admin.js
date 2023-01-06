
// Send Verification Code for admin

function verifyEmail () {
    const email = document.getElementById("email_admin");
    const vCode = document.getElementById("v_code");
    const vText = document.getElementById("v_text");
    const Pbtn = document.getElementById("proceed_btn");
    
    const req = new XMLHttpRequest ();

    req.onreadystatechange = function() {
       if( req.readyState == 4 ) {
        let t = req.responseText;
        alert(t);
            if (t == "success") {
                vText.classList.remove("d-none");
                vCode.removeAttribute("disabled");
                Pbtn.removeAttribute("disabled");
            }
       }
    }

    const form = new FormData();

    form.append("email", email.value);

    req.open("POST", "public/sendCodeForAdminLogin.php", true);
    req.send(form);
}

// Admin Login Process

function loginAdmin () {
    const vCode = document.getElementById("v_code");
    const email = document.getElementById("email_admin");
    
    const req = new XMLHttpRequest ();

    req.onreadystatechange = function() {
       if( req.readyState == 4 ) {
        let t = req.responseText;
        alert(t);
            if (t == "success") {
                window.location = "adminPanel.php";
            }
       }
    }

    const form = new FormData();

    form.append("v_code", vCode.value);
    form.append("email", email.value);

    req.open("POST", "public/loginAdminProcess.php", true);
    req.send(form);
}

// Send Req to academic officer

function sendRequest1 () {
    const ac_officer_email = document.getElementById("ac_officer_email");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            alert(t);
            if (t == "success") {
                alert("Request sent successfully");
                window.location.reload();
            }
        }
    }

    req.open("GET", "public/academic_officer_signup_process.php?e=" + ac_officer_email.value , true);
    req.send();
}

// Send Req to teacher

function sendRequest2 () {
    const teacher_email = document.getElementById("teacher_email");

    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if(req.readyState == 4) {
            let t = req.responseText;
            alert(t);
            if (t == "success") {
                alert("Request sent successfully");
                window.location.reload();
            }
        }
    }

    req.open("GET", "public/teacher_signup_process.php?e=" + teacher_email.value , true);
    req.send();
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

    req.open("POST", "public/saveProfileProcessAdmin.php", true);
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
                window.location = "admin_login.php";
            }
        }
    }

    req.open("GET", "public/signoutAdmin.php", true);
    req.send();
}
