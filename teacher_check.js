function validate_teacher() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === "sadia" && password === "123") {
        alert("Login successful! Welcome Mam Saadia");
        window.location.href = "../html/web_quiz_results.php";
    } else {
        alert("Invalid credentials. Please enter correct username and password.");
    }
}