import './bootstrap';

Echo.channel('login-notification')
    .listen('LoginNotification', (e) => {
        alert(e.message)
        window.location.href = '/'
    })
