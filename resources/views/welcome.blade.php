<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TryCat</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black flex h-screen justify-center items-center">
    <div id="game" class="text-white border-2 flex flex-col divide-y text-3xl" x-data="{ guessesAllowed: 5, wordLength: 3 }">
        <h1 x-text="name"></h1>
        <template x-for="row in Array.from({ length: guessesAllowed })">
            <div class="row flex divide-x">
                <template x-for="tile in Array.from({ length: wordLength })">
                    <div class="w-20 h-20 flex items-center justify-center"></div>
                </template>
            </div>
        </template>
    </div>
</body>
</html>
