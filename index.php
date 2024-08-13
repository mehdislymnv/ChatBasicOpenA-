<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/index.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <span>CHAT</span>
        </div>
        <div class="p-4 chat-box" id="chat-box">
            <div class="media-chat">
                <p>
                    <b>AI:</b>
                    Salam mən ChatGPT
                </p>
            </div>
            <div tabindex="0" style="top:0;"></div>
        </div>
        <div class="publisher border-ligth">
            <input type="text" class="chat-input" id="input-msg" placeholder="Mesajınızı yazın...">
            <button class="btn btn-primary" id="sent-btn">Göndər</button>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/index.js"></script>
</body>
</html>
