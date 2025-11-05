document.addEventListener("DOMContentLoaded", function() {
    // Select all select boxes with the class 'role-select'
    const selects = document.querySelectorAll(".role-select");

    selects.forEach(select => {
        select.addEventListener("change", function() {
            const user = this.dataset.user;
            const newRole = this.value;

            console.log(`User ${user} changed role to ${newRole}`);

            fetch('actions/adminpanel/vaihda_rooli.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: `user=${encodeURIComponent(user)}&role=${encodeURIComponent(newRole)}`
            })
            .then(res => res.text())
            .then(response => console.log("Server:", response));
        });
    });
});