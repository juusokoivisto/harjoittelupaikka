document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const passwordInput = document.getElementById('f_salasana');

    form.addEventListener('submit', function(event) {
        const password = passwordInput.value;

        if (!validatePassword(password)) {
            event.preventDefault();
            alert('Salasana ei täytä vaatimuksia: vähintään 5 merkkiä, iso kirjain, pieni kirjain, numero ja erikoismerkki.');
            passwordInput.focus();
        }
    });
});
