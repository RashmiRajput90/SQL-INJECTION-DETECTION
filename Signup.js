const handleSignup = async (e) => {
    e.preventDefault();
    const response = await fetch('http://localhost:5000/auth/signup', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ fullName, email, password, confirmPassword })
    });
    const data = await response.json();
    if (data.message) {
        alert(data.message);
    } else {
        alert(data.error);
    }
};