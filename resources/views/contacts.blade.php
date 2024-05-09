<x-layout>
    <x-slot name="heading">
        Contact Page
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    Message
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Your Message"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Send
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
        <ul class="list-disc list-inside">
            <li>Name: Kristaps Toms Vasrajas</li>
            <li>Email: <a href="mailto:k.vasarajs@gmail.com" class="text-blue-500">k.vasarajs@gmail.com</a></li>
            <li>Socials:
                <ul class="list-none pl-4 flex space-x-4">
                    <!-- TikTok Icon -->
                    <li><a href="https://www.tiktok.com/@kr1ks1s_" target="_blank" rel="noopener noreferrer"><img src="tik-tok.png" alt="TikTok" class="w-8 h-8"></a></li>
                    <!-- Instagram Icon -->
                    <li><a href="https://www.instagram.com/kr1ks1s_" target="_blank" rel="noopener noreferrer"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="w-8 h-8"></a></li>
                </ul>
            </li>
        </ul>
    </div>
</x-layout>