var loginGlobal = window.loginGlobal;

window.addEventListener("DOMContentLoaded", () => {
    if (loginGlobal === true) {
        item= document.getElementById("logat");
        item.style.display = "flex";

        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const errorMsg = document.getElementById('errorMsg');
    
        const emailRegex = /^[\x20-\x7E]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const passwordRegex = /^[\x20-\x7E]{1,255}$/;
    
        emailInput.addEventListener('input', () => {
            if (!emailRegex.test(emailInput.value.trim())) {
                errorMsg.textContent = "Email invalid!";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
    
        passwordInput.addEventListener('input', () => {
            if (!passwordRegex.test(passwordInput.value)) {
                errorMsg.textContent = "Parola trebuie să aibă minim 1 caracter și să nu conțină simboluri ciudate.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });

        const passwordInputC = document.getElementById('passwordC');
        passwordInputC.addEventListener('input', () => {
            if (!passwordRegex.test(passwordInputC.value) | passwordInputC.value !== passwordInput.value) 
                {
                errorMsg.textContent = "Parolele trebuie să fie identice, sa aibă minim 1 caracter și să nu conțină simboluri ciudate.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });

        const numeInput = document.getElementById('nume');
        const prenumeInput = document.getElementById('prenume');
        const numeUtilizatorInput = document.getElementById('numeUtilizator');
        const numeRegex = /^[A-Za-zăâîşţĂÂÎŞŢ\s]+$/;
        const prenumeRegex = /^[A-Za-zăâîşţĂÂÎŞŢ\s]+$/;
        const numeUtilizatorRegex = /^[A-Za-z0-9_.-]{3,16}$/;

        numeInput.addEventListener('input', () => {
            if (!numeRegex.test(numeInput.value.trim())) {
                errorMsg.textContent = "Numele este invalid! Folosiți doar litere și spații.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
        
        prenumeInput.addEventListener('input', () => {
            if (!prenumeRegex.test(prenumeInput.value.trim())) {
                errorMsg.textContent = "Prenumele este invalid! Folosiți doar litere și spații.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
        
        numeUtilizatorInput.addEventListener('input', () => {
            if (!numeUtilizatorRegex.test(numeUtilizatorInput.value.trim())) {
                errorMsg.textContent = "Numele de utilizator trebuie să aibă între 3 și 16 caractere și să conțină doar litere, cifre sau _ . -.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });

        const apiKeyRegex = /^[A-Za-z0-9_-]{32,64}$/;
        const apiKeyInput = document.getElementById('cheieAPI');
        apiKeyInput.addEventListener('input', () => {
            if (!apiKeyRegex.test(apiKeyInput.value.trim())) {
                errorMsg.textContent = "API Key invalid!";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
        
    }
    else {
        item= document.getElementById("nelogat");
        item.style.display = "inline";
        const emailInput = document.getElementById('emailL');
        const passwordInput = document.getElementById('passwordL');
        const errorMsg = document.getElementById('errorMsgL');
    
        const emailRegex = /^[\x20-\x7E]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const passwordRegex = /^[\x20-\x7E]{1,255}$/;
    
        emailInput.addEventListener('input', () => {
            if (!emailRegex.test(emailInput.value.trim())) {
                errorMsg.textContent = "Email invalid!";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
    
        passwordInput.addEventListener('input', () => {
            if (!passwordRegex.test(passwordInput.value)) {
                errorMsg.textContent = "Parola trebuie să aibă minim 1 caracter și să nu conțină simboluri ciudate.";
                errorMsg.style.display = 'block';
            } else {
                errorMsg.style.display = 'none';
            }
        });
    }


});
