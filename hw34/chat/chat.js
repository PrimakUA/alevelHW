function jsonPost(url, data) {
    return new Promise((resolve, reject) => {
        var x = new XMLHttpRequest();
        x.onerror = () => reject(new Error('jsonPost failed'))
        //x.setRequestHeader('Content-Type', 'application/json');
        x.open("POST", url, false);
        x.send(JSON.stringify(data))

        x.onreadystatechange = () => {
            if (x.readyState == XMLHttpRequest.DONE && x.status == 200) {
                resolve(JSON.parse(x.responseText))
            } else if (x.status != 200) {
                reject(new Error('status is not 200'))
            }
        }
    })
}


var block = document.querySelector(".block");

var form = block.querySelector("form");

var login = block.querySelector("[name=nickName]");
var message = block.querySelector("[name=message]");

var credentials = {
    login: '',
    message: '',
};


get.onclick = function() {
    jsonPost("server.php", {func: 'getMessage'});
    someText = 'Message get!';
    box.innerHTML = someText;
    box.style['background-color'] = 'green';
};

var box = document.getElementById('info-box'), someText;

form.addEventListener("submit", function (evt) {
    evt.preventDefault();
    if (login.value != credentials.login && message.value != credentials.message) {

        someText = 'Message send!';
        box.innerHTML = someText;
        box.style['background-color'] = 'green';
        jsonPost("server.php", {
            func: 'addMessage',
            nick: login.value,
            message: message.value
        })

    } else {
        someText = 'Message not send!';
        box.innerHTML = someText;
        box.style['background-color'] = 'red';
    }
});

// $(document).ready(function(){
//     var nextMessageId = 0;
//
//     function sendData(data, callback){
//         $.post("http://students.a-level.com.ua:10012",JSON.stringify(data),callback, "json");
//     }
//
//     function sendMessage(nick, message){
//         var data    = {func: "addMessage", nick: nick, message: message, author: 'chat'};
//         sendData(data, function(data){
//             getMessages();
//         });
//     }
//
//     function cleanUp(text){
//         if (typeof text !== 'string')
//             return text;
//         if (text.match(/<script/i)){
//             let el = document.createElement('div');
//             el.innerText = text;
//             return `<h1>SUPER HACKER CODE:</h1><pre>${el.innerHTML}</pre>`
//         }
//         return text;
//     }
//
//     function getMessages(){
//         var data    = {func: "getMessages", messageId: nextMessageId, author: 'chat'};
//         sendData(data, function(data){
//             //for (var msgIndex=0;msgIndex<data.data.length;msgIndex++)
//             for (var msgIndex in data.data){
//                 msg     = data.data[msgIndex]
//                 $msgDiv = $("<div>").html(`<b>${cleanUp(msg.nick)}</b>:${cleanUp(msg.message)}`);
//                 $("#chat").prepend($msgDiv);
//             }
//             nextMessageId = data.nextMessageId;
//         });
//     }
//
//     $("#send").click(function(){
//         var nick    = $('#nick').val();
//         var message = $('#msg').val();
//         sendMessage('nick', 'message');
//     });
//     getMessages();
//
//     setInterval(getMessages,2000);
// });