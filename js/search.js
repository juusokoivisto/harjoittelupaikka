function searchFunction() {
    const input = document.getElementById("myInput");
    const filter = input.value.trim().toUpperCase();
    const table = document.querySelector(".overflow-table");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        const tds = tr[i].getElementsByTagName("td");
        let rowContainsFilter = false;

        for (let j = 0; j < tds.length; j++) {
            const txtValue = tds[j].textContent || tds[j].innerText || "";
            if (txtValue.trim().toUpperCase().includes(filter)) {
                rowContainsFilter = true;
                break;
            }
        }

        tr[i].style.display = rowContainsFilter ? "" : "none";
    }
}
