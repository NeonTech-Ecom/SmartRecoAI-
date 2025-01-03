from flask import Flask, request, jsonify
import cudf  # RAPIDS DataFrame
import cuml  # RAPIDS Machine Learning
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Sample product dataset
products = [
    {"id": 1, "name": "Gaming Laptop", "description": "High performance gaming laptop", "price": "$1200"},
    {"id": 2, "name": "Wireless Mouse", "description": "Ergonomic wireless mouse", "price": "$30"},
    {"id": 3, "name": "Mechanical Keyboard", "description": "RGB mechanical keyboard", "price": "$80"},
    {"id": 4, "name": "Graphics Card", "description": "Nvidia RTX 3080 graphics card", "price": "$700"},
]

# Convert product data into RAPIDS dataframe
df = cudf.DataFrame(products)

# Initialize Flask app
app = Flask(__name__)

@app.route('/recommend', methods=['POST'])
def recommend():
    user_input = request.json.get('query', '').lower()
    if not user_input:
        return jsonify({"error": "No query provided"}), 400

    # TF-IDF Vectorization
    vectorizer = TfidfVectorizer()
    descriptions = df["description"].to_pandas()
    tfidf_matrix = vectorizer.fit_transform(descriptions)

    # Compute similarity scores
    user_vector = vectorizer.transform([user_input])
    similarity_scores = cosine_similarity(user_vector, tfidf_matrix)

    # Sort products by similarity scores
    df['similarity'] = similarity_scores[0]
    sorted_df = df.sort_values('similarity', ascending=False).iloc[:3]

    # Return top recommendations
    recommendations = sorted_df.to_pandas().to_dict(orient='records')
    return jsonify({"products": recommendations})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)