<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Content Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fb;
    }

    .form-container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #0068ff;
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Add New Content</h2>
    <form action="process-form.php" method="post">
      <div class="form-group">
        <label for="contentTitle">Content Title:</label>
        <input type="text" id="contentTitle" name="contentTitle" required>
      </div>

      <div class="form-group">
        <label for="contentDescription">Content Description:</label>
        <textarea id="contentDescription" name="contentDescription" rows="4" required></textarea>
      </div>

      <!-- Add more form fields as needed -->

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>
