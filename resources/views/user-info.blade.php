<!-- In user-info.blade.php -->
<x-layout>
    <x-slot name="heading">
        User Information
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">User Information</h1>
        <div>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <!-- Add other user information fields as needed -->
        </div>
    </div>
</x-layout>