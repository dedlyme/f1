<x-layout>
    <x-slot name="heading">
        Chat with other F1 fans
    </x-slot>

    <div class="chat-box" id="chatBox">
        <!-- Existing chat messages will be displayed here -->
    </div>
    <div>
        <input type="text" id="messageInput" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        // Retrieve chat messages from localStorage when the page loads
        document.addEventListener('DOMContentLoaded', function () {
            var storedMessages = localStorage.getItem('chatMessages');
            if (storedMessages) {
                var chatBox = document.getElementById('chatBox');
                chatBox.innerHTML = storedMessages;
            }
        });

        function appendMessage(message) {
            var chatBox = document.getElementById('chatBox');
            var newMessage = document.createElement('div');
            newMessage.classList.add('chat-message');
            newMessage.textContent = message;
            chatBox.appendChild(newMessage);
            chatBox.scrollTop = chatBox.scrollHeight;

            // Store the updated chat messages in localStorage
            localStorage.setItem('chatMessages', chatBox.innerHTML);
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