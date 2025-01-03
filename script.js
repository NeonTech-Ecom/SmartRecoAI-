document.getElementById("search-form").addEventListener("submit", async function(event) {
    event.preventDefault();

    const query = document.getElementById("search-input").value;
    if (!query) {
        alert("Please enter your preferences.");
        return;
    }

    // Send the query to the backend
    const response = await fetch("/recommendations.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ query })
    });

    const data = await response.json();
    displayRecommendations(data);
});

function displayRecommendations(recommendations) {
    const container = document.getElementById("recommendations");
    container.innerHTML = "<h2>Recommended Products</h2>";
    recommendations.forEach(item => {
        const div = document.createElement("div");
        div.textContent = item;
        container.appendChild(div);
    });
}