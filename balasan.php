<html>
<head>
    <title>Guestbook Reply</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px;
        }
        .header i {
            font-size: 24px;
        }
        h1 {
            font-size: 24px;
            font-weight: normal;
            margin: 0;
        }
        h2 {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f2f2;
        }
        .form-group textarea {
            height: 150px;
            resize: none;
        }
        .submit-btn {
            display: flex;
            justify-content: flex-end;
        }
        .submit-btn button {
            background-color: #000000;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-home"></i>
            <h1>GUESTBOOK</h1>
            <i class="fas fa-user"></i>
        </div>
        <h2>Reply!</h2>
        <div class="form-group">
            <label for="reply-to">Reply to</label>
            <input type="text" id="reply-to" name="reply-to">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <div class="submit-btn">
            <button type="submit">Send Reply</button>
        </div>
    </div>
</body>
</html>
