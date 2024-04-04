document.addEventListener("DOMContentLoaded", function() {
    const dataContainer = document.getElementById("data-container");
    const paginationContainer = document.getElementById("pagination");

    let currentPage = 1;
    const itemsPerPage = 10; // Number of items to display per page

    // Function to load data based on the current page
    function loadData() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `get_data.php?page=${currentPage}&itemsPerPage=${itemsPerPage}`, true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                dataContainer.innerHTML = xhr.responseText;
            } else {
                console.error("Failed to load data.");
            }
        };

        xhr.send();
    }

    // Function to handle pagination clicks
    function handlePaginationClick(event) {
        if (event.target.classList.contains("page-link")) {
            currentPage = parseInt(event.target.dataset.page);
            loadData();
        }
    }

    // Attach a click event listener to the pagination container
    paginationContainer.addEventListener("click", handlePaginationClick);

    // Set currentPage to 1 and load initial data
    currentPage = 1;
    loadData();
});
