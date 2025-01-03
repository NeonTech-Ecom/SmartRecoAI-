# SmartRecoAI

## NVIDIA-Powered Recommendation Engine

This repository contains a recommendation engine for an e-commerce platform, powered by NVIDIA SDKs such as RAPIDS, Merlin, and TensorRT. The project leverages NVIDIA GPUs to deliver fast, accurate product recommendations.

---

## Features
- **Personalized Recommendations:** Tailored product suggestions based on user input.
- **GPU Acceleration:** Enhanced processing speed using NVIDIA SDKs (RAPIDS, Merlin).
- **User-Friendly Frontend:** Search field for seamless user queries.
- **Scalable Backend:** Flask-based API services for robust scalability.

---

## Technologies Used
- **Frontend:** PHP, CSS, JavaScript.
- **Backend:** Python with Flask.
- **NVIDIA SDKs:**
  - *Merlin*: Preprocessing and model training.
  - *RAPIDS*: Data analysis and inference acceleration.
  - *TensorRT*: Optimized inference.
- **GPU Requirements:** NVIDIA A100 or H100 (recommended for large-scale usage).

---

## Prerequisites

### System Requirements
- **GPU:** An NVIDIA GPU supporting CUDA (Compute Capability 6.0 or higher).
- **Memory:** At least 8GB of GPU memory (16GB or more recommended for large datasets).

### Software Requirements
- Miniconda or Anaconda installed on your machine.
- Python 3.9 or higher.
- CUDA Toolkit 11.8 or higher.
- Required packages:
  - Flask
  - RAPIDS libraries
  - scikit-learn

---

## Installation Steps

### Step 1: Clone the Repository
```bash
git clone https://github.com/NeonTech-Ecom/SmartRecoAI-
cd SmartRecoAI-
```

### Step 2: Set Up the Environment

#### Install Miniconda
If Miniconda is not installed, download and install it from the [Miniconda Installation Guide](https://docs.conda.io/en/latest/miniconda.html).

#### Create a New Environment
```bash
conda create -n rec-engine python=3.9 -y
conda activate rec-engine
```

#### Install RAPIDS and Other Dependencies
```bash
conda install -c rapidsai -c nvidia -c conda-forge rapids=23.08 python=3.9 cudatoolkit=11.8 -y
pip install flask scikit-learn
```

### Step 3: Frontend Setup
Navigate to the frontend directory:
```bash
cd frontend
```

Place the CSS and JavaScript files in their respective folders:
```
frontend/
├── index.php
├── css/
│   └── styles.css
└── js/
    └── scripts.js
```

### Step 4: Backend Setup
Run the Flask server:
```bash
python backend/backend_py.py
```

### Step 5: Run the Application
Start a local server for the frontend (e.g., using PHP):
```bash
php -S localhost:8000
```

Access the application in your browser:
```
http://localhost:8000
```

Test the search field with queries such as "budget-friendly" or "luxury" to get recommendations.

---

## Usage
1. Enter your preferences in the search field (e.g., "budget-friendly").
2. The system generates recommendations based on user input and pre-trained data.
3. The backend processes the request using RAPIDS and NVIDIA Merlin to deliver results.

---

## Folder Structure
```
recommendation-engine/
├── backend/
│   ├── backend_py.py   # Flask backend
│   └── backend_php     # PHP backend (if applicable)
├── frontend/
│   ├── index.php       # Frontend entry point
│   ├── css/
│   │   └── styles.css  # CSS for styling
│   └── js/
│       └── scripts.js  # JavaScript for interactivity
└── README.md           # Documentation
```

---

## Troubleshooting

### Common Errors
- **Error:** "Conda is not recognized"
  - Ensure Miniconda is installed and added to the system PATH.
- **Error:** "No module named cudf"
  - Verify that RAPIDS is installed and the Conda environment is activated.
- **Frontend Not Loading:**
  - Check that the PHP server is running on the correct port (default: 8000).
- **GPU Not Detected:**
  - Verify your system meets GPU requirements using `nvidia-smi`.

---

## License
This project is licensed under the [MIT License](LICENSE).

---
