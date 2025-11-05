document.addEventListener("DOMContentLoaded", function() {
    const selects = document.querySelectorAll(".role-select");
    selects.forEach(select => {
        select.addEventListener("change", function() {
            select.disabled = true;
            const user = this.dataset.user;
            const newRole = this.value;

            fetch('actions/adminpanel/vaihda_rooli.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: `user=${encodeURIComponent(user)}&role=${encodeURIComponent(newRole)}`
            })
            .then(res => res.text())
            .then(response => console.log("Server:", response))
            .catch(err => console.error("Fetch error:", err))
            .finally(() => select.disabled = false);
        });
    });

    const deletes = document.querySelectorAll(".delete-btn");
    deletes.forEach(deleteBtn => {
        deleteBtn.addEventListener("click", function() {
            deleteBtn.disabled = true;
            const user = this.dataset.user;

            fetch('actions/adminpanel/poista_kayttaja.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: `user=${encodeURIComponent(user)}`
            })
            .then(res => res.text())
            .then(response => console.log("Server:", response))
            .catch(err => console.error("Fetch error:", err))
            .finally(() => deleteBtn.disabled = false);
        });
    });

    const resets = document.querySelectorAll(".reset-btn");
    resets.forEach(deleteBtn => {
        resetBtn.addEventListener("click", function() {
            
        });
    });
});