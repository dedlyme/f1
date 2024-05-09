<x-layout>
    <x-slot name="heading">
        Home Page
    </x-slot>

    <style>
        .chat-container {
            position: fixed;
            bottom: 20px; /* Adjust as needed */
            right: 20px; /* Adjust as needed */
            z-index: 9999; /* Ensure it's above other content */
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        /* Styles for slideshow */
        .slideshow-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .mySlides {
            display: none;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
    </style>

    <div class="chat-container">
        <div class="chat-box" id="chatBox">
            <!-- Existing chat messages will be displayed here -->
        </div>
        <div>
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <!-- Slideshow -->
    <div class="slideshow-container">
        @foreach(['alpine.jpg', 'ferrari.jpg', 'haas.jpg', 'kick.jpg', 'martin.jpg', 'McLaren.jpg', 'mercedes.jpg', 'redbull.jpg', 'visa.jpg', 'williams.jpg'] as $image)
            <div class="mySlides fade" style="background-image: url('{{ asset('img/' . $image) }}');"></div>
        @endforeach

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script>
        var slideIndex = 0;
        var slides = document.getElementsByClassName("mySlides");
        var slideInterval;

        showSlides();

        function plusSlides(n) {
            clearInterval(slideInterval);
            showSlides(slideIndex += n);
        }

        function showSlides() {
            var i;
            if (slideIndex >= slides.length) { slideIndex = 0; }
            if (slideIndex < 0) { slideIndex = slides.length - 1; }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex].style.display = "block";
            slideIndex++;
            slideInterval = setInterval(showSlides, 7000); // Change image every 7 seconds
        }

        // Retrieve chat messages from localStorage when the page loads
        document.addEventListener('DOMContentLoaded', function () {
            var storedMessages = localStorage.getItem('chatMessages');
            if (storedMessages) {
                var chatBox = document.getElementById('chatBox');
                chatBox.innerHTML = storedMessages;
            }
        });

        function appendMessage(sender, message) {
            var chatBox = document.getElementById('chatBox');
            var newMessage = document.createElement('div');
            newMessage.classList.add('chat-message');
            newMessage.textContent = sender + ': ' + message;
            chatBox.appendChild(newMessage);
            chatBox.scrollTop = chatBox.scrollHeight;

            // Store the updated chat messages in localStorage
            localStorage.setItem('chatMessages', chatBox.innerHTML);
        }

        function sendMessage() {
            var messageInput = document.getElementById('messageInput');
            var message = messageInput.value.trim();
            var username = "{{ auth()->user()->name }}"; // Get the authenticated user's name from Laravel
            if (message !== '' && username) {
                appendMessage(username, message);
                // Here you would send the message to the server for processing or storage
                messageInput.value = '';
            }
        }
    </script>
</x-layout>
