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
            <li class="col-4" v-for="disc in discs">
                <div class="card">
                    <div class="card-header">
                        <img :src="disc.poster">
                    </div>
                    <div class="card-body">
                        <p>{{ disc.title }}</p>
                        <p>{{ disc.author }}</p>
                        <p>{{ disc.year }}</p>
                    </div>
                </div>
               
                
                
            </li>
          
        </ul>

    </div>

<script>
</script>
    
<script src="./app.js"></script>

</body>
</html>