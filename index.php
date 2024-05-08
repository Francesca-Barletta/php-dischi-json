<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

    <div id="app">
        <ul>
            <li v-for="disc in discs">
                <p>{{ disc.title }}</p>
                <p>{{ disc.author }}</p>
                <p>{{ disc.year }}</p>
                <p>{{ disc.genre }}</p>
                <img :src="disc.poster">
            </li>
          
        </ul>

    </div>

<script>
</script>
    
<script src="./app.js"></script>

</body>
</html>