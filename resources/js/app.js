import './bootstrap';

Echo.channel('login-notification')
    .listen('LoginNotification', (e) => {
        alert('You have been logged out!')
        window.location.href = '/login'
    })
