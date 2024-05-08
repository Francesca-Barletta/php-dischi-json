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
        <?php include_once __DIR__ . '/header.php';?>
        <div class="container">
            <ul>
                <li class="col-4" v-for="disc in discs">
                    <div class="card">
                        <div class="card-header">
                            <img :src="disc.poster">
                        </div>
                        <div class="card-body">
                            <h3>{{ disc.title }}</h3>
                            <p>{{ disc.author }}</p>
                            <h3>{{ disc.year }}</h3>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
       

    </div>

<script>
</script>
    
<script src="./app.js"></script>

</body>
</html>