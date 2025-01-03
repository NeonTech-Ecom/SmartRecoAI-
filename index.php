<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation Engine</title>
    <link rel="stylesheet" href="SRCSS.css">
    <script>
    	document.getElementById('searchButton').addEventListener('click', () => {
        const query = document.getElementById('searchField').value.trim();

        if (!query) {
            alert('Please enter a product name or keyword.');
            return;
        }

        // Send the search query to the backend
        fetch('recommendation_backend.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ query })
        })
            .then(response => response.json())
            .then(data => {
                const recommendations = document.getElementById('recommendations');
                recommendations.innerHTML = `<h2>Recommendations:</h2>`;

                data.products.forEach(product => {
                    recommendations.innerHTML += `
                        <div class="product">
                            <h3>${product.name}</h3>
                            <p>${product.description}</p>
                            <p><strong>Price:</strong> ${product.price}</p>
                        </div>
                    `;
                });
            })
            .catch(error => console.error('Error fetching recommendations:', error));
    });
    </script>
</head>
<body>
    <div class="container1">
        <h1><span class="name">SmartReco AI</span> <br>Product Recommendation</h1>
        <div class="search-bar1">
            <input type="text" id="searchField" placeholder="Enter product name or keywords...">
            <button id="searchButton1">Search</button>
        </div>
        <div id="recommendations">
            <!-- Recommendations will appear here -->
        </div>
    </div>
</body>
</html>