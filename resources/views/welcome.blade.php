<!DOCTYPE html>
<html>
    <head>
        @livewireStyles
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    </head>
    <body>
        <livewire:wysiwyg />

        @livewireScripts
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    </body>
</html>
