<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body data-bs-theme='dark'>

    <div id='app'>
        <nav class="navbar position-fixed top-0 start-0 end-0 my-nav">
            <div class="container">
                <h1 class='' >Music Sound</h1>
            </div>
        </nav>
        <div class="container-fluid d-flex flex-wrap flex-column align-items-center my-bg-color-container">
            <div class='d-flex my-container flex-wrap justify-content-center'>
                <div class="card d-flex flex-column align-items-center my-card" v-for="currentDisk in diskList">
                    <img :src="currentDisk.poster" class="img-fluid  card-img-top mt-2 p-3" alt="...">
                    <div class="card-body d-flex flex-column align-items-center ">
                        <h5 class="card-title text-center ">{{currentDisk.title}}</h5>
                        <p class="card-text">{{currentDisk.author}}</p>
                        <strong>{{currentDisk.year}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="./js/main.js"></script>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>