const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    // Just a mock-up of form validation
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');
    
    if (username === 'user' && password === 'password123') {
        window.location.href = "/dashboard"; // Redirect to dashboard or home page
    } else {
        errorMessage.textContent = 'Invalid username or password.';
    }
});