document.addEventListener("DOMContentLoaded", function() {
    const registrationForm = document.getElementById("registrationForm");
    
    registrationForm.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        
        const user = {
            username,
            email,
            password
        };
        
        // Store user data in local storage
        localStorage.setItem(username, JSON.stringify(user));
        
        alert("Registration successful!");
        registrationForm.reset();
    });
});
