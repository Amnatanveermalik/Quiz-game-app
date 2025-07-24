document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('studentForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();  

        const username = document.getElementById('username').value;
        const rollNumber = document.getElementById('roll_number').value;

        let isValid = true;
        for (let i = 0; i < rollNumber.length; i++) {
            if (rollNumber[i] < '0' || rollNumber[i] > '9') {
                isValid = false;
                break;
            }
        }

        if (isValid && rollNumber !== "") {
            alert("Validation successful! Logging in...");

            form.submit();
        } else {
            alert("Invalid input. Please enter numbers only for Roll Number.");
        }
    });
});
