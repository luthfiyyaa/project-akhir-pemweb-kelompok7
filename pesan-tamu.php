<html>
<head>
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ffffff;
            color: #000000;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }
        .header i {
            font-size: 24px;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
        }
        h2 {
            font-size: 36px;
            font-weight: bold;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        label {
            font-size: 18px;
            margin: 10px 0 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            height: 150px;
        }
        .attachment {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .attachment input[type="text"] {
            flex: 1;
            margin-right: 10px;
        }
        .attachment button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            font-size: 16px;
        }
        .submit-button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #e0e0e0;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-home"></i>
            <i class="fas fa-user"></i>
        </div>
        <h1>GUESTBOOK</h1>
        <h2>Send Your Message!</h2>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Fill out your message here!"></textarea>
            <label for="attachment">Attachment</label>
            <div class="attachment">
                <input type="text" id="attachment" name="attachment" placeholder="Send your moment!">
            </div>
            <button type="submit" class="submit-button"><a href="thanks.php">send message</a>
        </form>
    </div>
</body>
</html> 
