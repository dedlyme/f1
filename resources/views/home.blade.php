
<x-layout>
    <x-slot name="heading">
        Home Page
    </x-slot>

    <!-- Your content goes here -->
    <div class="chat-box" id="chatBox">
        <!-- Chat messages will be appended here -->
    </div>
    <input type="text" id="messageInput" placeholder="Type your message...">
    <button onclick="sendMessage()">Send</button>

    <script>
        // JavaScript code goes here 
            function appendMessage(message) {
            var chatBox = document.getElementById('chatBox');
            var newMessage = document.createElement('div');
            newMessage.classList.add('chat-message');
            newMessage.textContent = message;
            chatBox.appendChild(newMessage);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function sendMessage() {
            var messageInput = document.getElementById('messageInput');
            var message = messageInput.value.trim();
            if (message !== '') {
                appendMessage('You: ' + message);
                // Here you would send the message to the server for processing or storage
                messageInput.value = '';
            }
        }
    </script>
</x-layout>