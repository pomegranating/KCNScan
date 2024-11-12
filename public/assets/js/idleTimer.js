const IDLE_THRESHOLD = 5 * 1000 * 60;
const LOGOUT_THRESHOLD = 10 * 1000 * 60;

let idleTimer;
let lastActivityTime = Date.now();

function resetTimer() {
    clearTimeout(idleTimer);
    idleTimer = setTimeout(checkIdleTime, IDLE_THRESHOLD);
}

function checkIdleTime() {
    const currentTime = Date.now();
    const elapsedTime = currentTime - lastActivityTime;

    const isOnLockScreen = window.location.pathname.includes('/authentication/lock_screen');

    if (isOnLockScreen) {
        if (elapsedTime >= LOGOUT_THRESHOLD) {
            window.location.href = '/authentication/sign_out';
        }
    } else {
        if (elapsedTime >= IDLE_THRESHOLD) {
            fetch('/authentication/auto_lock', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (!data.status) {
                        location.reload();
                    } else if (data.status === 'success') {
                        window.location.href = '/authentication/lock_screen';
                    }
                })
        }
    }

    resetTimer();
}

function handleUserActivity() {
    lastActivityTime = Date.now();
    resetTimer();
}

window.addEventListener('mousemove', handleUserActivity);
window.addEventListener('keypress', handleUserActivity);


resetTimer();