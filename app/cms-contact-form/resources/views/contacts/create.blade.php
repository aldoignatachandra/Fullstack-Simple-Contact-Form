@extends('layouts.app')

@section('content')
<nav class="bg-[#2A4D7D] p-4">
    <div class="container mx-auto">
        <a href="{{ route('contacts.index') }}" class="text-white text-xl font-bold">CMS Contact Form</a>
    </div>
</nav>

<h1 class="text-3xl font-bold mb-6 text-center">Create New Contact</h1>

@include('partials.errors')

<form
    action="{{ route('contacts.store') }}"
    method="POST"
    class="max-w-lg mx-auto bg-white p-6 rounded shadow-md"
    onsubmit="return confirm('Are you sure to create this contact?');">
    @csrf
    <div class="mb-4">
        <label class="block mb-2 font-semibold">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div class="mb-4">
        <label class="block mb-2 font-semibold">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div class="mb-4">
        <label class="block mb-2 font-semibold">Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>
    <div class="mb-4">
        <label class="block mb-2 font-semibold">Message</label>
        <textarea name="message" class="w-full h-32 resize-y border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('message') }}</textarea>
    </div>
    <div class="flex justify-between">
        <a href="{{ route('contacts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
    </div>
</form>
@endsection