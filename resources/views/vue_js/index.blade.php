<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('js') }}/vue.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Vue.js</title>
</head>
<body>
    <div id="app">
        Hello world!
        <h1>{{ 'Hello world!' }}</h1>
        {{-- <h1>{ message }}</h1> --}}
    </div>
    <script>
        var app = new Vue({
        el: '#app',
        // data: {
        //     message: 'Hello Vue.js!'
        // }
        })
    </script>
</body>
</html>