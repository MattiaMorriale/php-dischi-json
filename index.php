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
                <img src="./img/logo.png" alt="">
            </div>
        </nav>
        <div class="container-fluid d-flex flex-wrap flex-column align-items-center my-bg-color-container">
            <div class='d-flex my-container flex-wrap justify-content-center'>
                <div class="card d-flex flex-column align-items-center my-card border-0 " v-for="(currentDisk, index) in diskList" @click='showDisk(index)'>
                    <img :src="currentDisk.poster" class="img-fluid card-img-top mt-2 p-1" alt="...">
                    <div class="card-body d-flex flex-column align-items-center ">
                        <h5 class="card-title text-center ">{{currentDisk.title}}</h5>
                        <p class="card-text">{{currentDisk.author}}</p>
                        <strong>{{currentDisk.year}}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-wrap flex-column align-items-center justify-content-center  my-bg-color-show position-absolute top-0 start-0 end-0 " v-if='showOverlay'>
            <div class='d-flex my-container flex-wrap justify-content-center'>

                <div class="card d-flex flex-column align-items-center my-card-show border-0 ">

                    <img :src="diskOverlay.poster" class="img-fluid card-img-top mt-2 p-1" alt="...">

                    <div class="card-body d-flex flex-column align-items-center ">
                        <h5 class="card-title text-center ">{{diskOverlay.title}}</h5>
                        <p class="card-text">{{diskOverlay.author}}</p>
                        <strong>{{diskOverlay.year}}</strong>
                    </div>
                </div>

            </div>
            <div class='position-absolute border-3 my-icon' @click='showOverlay = false'><i class="fa-solid fa-xmark"></i></div>
        </div>
    </div>


    <!-- script -->
    <script src="./js/main.js"></script>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/1a036a6099.js" crossorigin="anonymous"></script>

</body>
</html>