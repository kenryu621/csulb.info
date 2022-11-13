$(document).ready(function () {
    setTimeout(
        function () {
            $(".promoted-fed-cred-box").css("display", "block")
        }, 300
    );
});

function nextPage() {
    let email = document.getElementById("email-input").value
    if (email.includes("@student.csulb.edu")) {
        document.getElementById("displayName").innerHTML = email
        $("#usernameError").css("display", "none")
        document.getElementById("email-input").classList.remove("has-error")

        $(".promoted-fed-cred-box").css("display", "none")
        document.getElementById("sliding-page").classList.remove("slide-in-next")
        document.getElementById("sliding-page").classList.remove("slide-in-back")
        document.getElementById("sliding-page").classList.add("slide-out-next")
        setTimeout(() => {
            $("#sliding-page").css("display", "none")
            $("#sliding-page-2").css("display", "block")
            document.getElementById("sliding-page-2").classList.remove("slide-out-back")
            document.getElementById("sliding-page-2").classList.add("slide-in-next")
        }, 250);
    } else {
        $("#usernameError").css("display", "block")
        document.getElementById("email-input").classList.add("has-error")
    }
}

function backPage() {
    $(".promoted-fed-cred-box").css("display", "block")
    document.getElementById("sliding-page-2").classList.remove("slide-in-next")
    document.getElementById("sliding-page-2").classList.add("slide-out-back")
    setTimeout(() => {
        $("#sliding-page-2").css("display", "none")
        $("#sliding-page").css("display", "block")
        document.getElementById("sliding-page").classList.add("slide-in-back")
    }, 250);
}