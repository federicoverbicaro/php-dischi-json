<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <title>PHP-DISCHI-JSON</title>
</head>

<body>

    <div id="app">

        <div v-for= '(element, index) in musicDisc' :key="index" class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h2>{{element.title }}</h2>
                <h6>{{element.author }}</h6>
                <span>{{element.year}}</span>
            </div>
        </div>




    </div>





    <!-- Vue -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- personal javascript -->
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js' integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==' crossorigin='anonymous'></script>

</body>

</html>