const handleLogin = async (e) => {
    e.preventDefault();
    const response = await fetch('http://localhost:5000/auth/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password })
    });
    const data = await response.json();
    if (data.token) {
        // Save the token and redirect
        localStorage.setItem('token', data.token);
    } else {
        alert(data.message);
    }
};
