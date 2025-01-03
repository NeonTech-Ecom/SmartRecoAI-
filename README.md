# SmartRecoAI-
NVIDIA-Powered Recommendation Engine
This repository contains a recommendation engine for an e-commerce platform, powered by NVIDIA SDKs such as RAPIDS, Merlin, and TensorRT. The project demonstrates how to use NVIDIA GPUs to provide fast, accurate product recommendations.

Features
Personalized product recommendations based on user input.
GPU-accelerated processing using NVIDIA SDKs (RAPIDS, Merlin).
Easy-to-use frontend with a search field for user queries.
Scalable backend using Flask for API services.

Technologies Used
Frontend: PHP, CSS, JavaScript.
Backend: Python with Flask.
NVIDIA SDKs:
Merlin: Preprocessing and model training.
RAPIDS: Data analysis and inference acceleration.
TensorRT: Speeds up inference.
GPU Requirements: NVIDIA A100 or H100 for large scale interface.

Prerequisites
System Requirements:
A system with an NVIDIA GPU supporting CUDA (Compute Capability 6.0 or higher).
At least 8GB of GPU memory (16GB or more recommended for large datasets).
Software Requirements:
Miniconda or Anaconda installed on your machine.
Python 3.9 or higher.
CUDA Toolkit 11.8 or higher.
Installed Packages:
Flask
RAPIDS libraries
scikit-learn

Installation Steps
Step 1: Clone the Repository
bash

git clone https://github.com/NeonTech-Ecom/SmartRecoAI-
cd recommendation-engine


Step 2: Set Up the Environment
1. Install Miniconda:
If Miniconda is not installed, download and install it from Miniconda Installation Guide.
2. Create a New Environment:
bash

conda create -n rec-engine python=3.9 -y
conda activate rec-engine

3. Install RAPIDS and Other Dependencies:
bash

conda install -c rapidsai -c nvidia -c conda-forge \
    rapids=23.08 python=3.9 cudatoolkit=11.8 -y
pip install flask scikit-learn

Step 3: Frontend Setup
Navigate to the frontend directory:
bash

cd frontend
Place the CSS and JavaScript files in their respective folders:
markdown

frontend/
├── index.php
├── css/
│   └── styles.css
└── js/
    └── scripts.js

Step 4: Backend Setup
Run the Flask server:
bash

backend_py.py

Step 5: Run the Application
Start a local server for the frontend (e.g., using PHP):
bash

php -S localhost:8000

Access the application in your browser:
arduino

http://localhost:8000

Test the search field with queries such as "budget-friendly" or "luxury" to get recommendations.

Usage
Enter your preferences in the search field (e.g., "budget-friendly").
The system will provide recommendations based on user input and pre-trained data.
The backend processes the request using RAPIDS and NVIDIA Merlin to generate results.


Folder Structure
bash

recommendation-engine/
├── backend/
│   ├── backend_py.py           # Flask backend
│   └── backend_php # backend php
├── frontend/
│   ├── index.php        # Frontend entry point
│   ├── css/
│   │   └── styles.css   # CSS for styling
│   └── js/
│       └── scripts.js   # JavaScript for interactivity
└── README.md            # Documentation


Troubleshooting
Error: "Conda is not recognized":
Ensure Miniconda is installed and added to the system PATH.
Error: "No module named cudf":
Verify that RAPIDS is installed and the Conda environment is activated.
Frontend not loading:
Check that the PHP server is running on the correct port (default: 8000).
GPU not detected:
Verify your system meets GPU requirements using nvidia-smi.

