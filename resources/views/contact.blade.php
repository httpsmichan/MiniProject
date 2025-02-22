@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        
        <p class="text-lg">If you have any questions, feel free to reach out to us. We are here to help you!</p>
        
        <div class="mt-6">
            <p><strong>Email:</strong> aizel.apares@gmail.com</p>
            <p><strong>Phone:</strong> +63 9077839641</p>
            <p><strong>Address:</strong> 143 Narra Street, Mahal ko siya City, France</p>
            <p><strong>Facebook:</strong> Aizel_skie 143 </p>
        </div>
        
        <div class="mt-6">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block font-medium">Name:</label>
                    <input type="text" name="name" id="name" class="w-full p-2 border rounded">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block font-medium">Email:</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded">
                </div>
                
                <div class="mb-4">
                    <label for="phone" class="block font-medium">Phone:</label>
                    <input type="text" name="phone" id="phone" class="w-full p-2 border rounded">
                </div>
                
                <div class="mb-4">
                    <label for="address" class="block font-medium">Address:</label>
                    <input type="text" name="address" id="address" class="w-full p-2 border rounded">
                </div>
                
                <div class="mb-4">
                    <label for="concern" class="block font-medium">Concern:</label>
                    <textarea name="concern" id="concern" class="w-full p-2 border rounded" rows="4"></textarea>
                </div>
                
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send Message</button>
            </form>
        </div>
    </div>
@endsection