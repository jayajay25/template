<x-app-layout title="Contact">
    Contact page

    <form action="/contact" method="post">
     @csrf

    <button type="submit">Kirim</button>
    </form>
</x-app-layout>