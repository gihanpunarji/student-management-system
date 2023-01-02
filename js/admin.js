function gotoProfile () {
    window.location = "admin_profile.php";
}
function gotoStudentProfile () {
    window.location = "student_profile.php";
}
function gotoAccOffProfile () {
    window.location = "academic_offficer_profile.php";
}
function gotoTeacherProfile () {
    window.location = "teacher_profile.php";
}

function manageTeachersInfo () {
    window.location = "manage_teachers_info.php";
}

function manageAcademicOfficerInfo () {
    window.location = "manage_academic_officer_info.php";
}

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
            if (t == "success") {
                vText.classList.remove("d-none");
                vCode.removeAttribute("disabled");
                 Pbtn.removeAttribute("disabled");
            }
       }
    }

    const form = new FormData();

    form.append("email", email.value);

    req.open("POST", "sendCodeForAdminLogin.php", true);
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
            if (t == "success") {
                window.location = "adminPanel.php";
            }
       }
    }

    const form = new FormData();

    form.append("v_code", vCode.value);
    form.append("email", email.value);

    req.open("POST", "loginAdminProcess.php", true);
    req.send(form);
}
