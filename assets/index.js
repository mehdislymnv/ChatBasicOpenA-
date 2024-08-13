    var input = $('#input-msg');
    var btn = $('#sent-btn');
    var chat = $('#chat-box');

    btn.click('on', function () {
    if(input.val().length == 0){
    alert('Zəhmət olmasa sualınızı qeyd edin!')
} else {
    var value = input.val();
    chat.append(`
           <div class="media-chat media-chat-reverse">
                <p>
                    <b>MXD:</b>
                    ` + value + `
                </p>
            </div>
        `);
    chat.scrollTop(chat.prop('scrollHeight')); // Mesaj əlavə edildikdən sonra scroll
    input.val('')

    $.ajax({
    type: "POST",
    url: "/chat-api.php",
    data: {prompt: value},
    dataType: "json",
    success:function (response){
    var data = JSON.parse(response)
    chat.append(`
               <div class="media-chat">
                    <p>
                        <b>AI:</b>
                        ` + data.choices[0].text + `
                    </p>
                </div>
               `)
    chat.scrollTop(chat.prop('scrollHeight')); // AI cavabı əlavə edildikdən sonra scroll
},
    error:function (e){
    console.error("Səhv" + e);
}
});
}
});

    setInterval(() => {
    chat.scrollTop(chat.prop('scrollHeight'));
}, 200);

