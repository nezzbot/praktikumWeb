import requests
import json

# Replace this URL with the endpoint you want to send the POST request to
url = "http://127.0.0.1:8000/posts"

# Replace this data with the JSON payload you want to send
data = {
    "title": "New Post",
    "content": "This is the content of the new post."
}

# Convert the data to JSON format
json_data = json.dumps(data)

# Set the headers to indicate that you're sending JSON data
headers = {
    "Content-Type": "application/json"
}

# Make the POST request
response = requests.post(url, data=json_data, headers=headers)

# Check the response
if response.status_code == 200:
    print("POST request successful!")
    print("Response:", response.json())
else:
    print(f"POST request failed with status code {response.status_code}")
    print("Response:", response.text)
