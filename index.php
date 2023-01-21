<?php
    include('includes/connect.php');
    include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>

    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- css file -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="./images//logo.png" class="logo">

                <a class="navbar-brand" href="#">Logo</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Preço Total:100/-</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Localizar" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Localizar</button>
                    </form>
                </div>

            </div>
        </nav>

        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Bem vindo(a) convidado(a)</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">Produtos</h3>
            <p class="text-center">a comunicação está no centro do e-commerce e da comunidade</p>
        </div>

        <!-- fourth child -->
        <div class="row px-1">
            <div class="col-md-10">

                <!-- produtos -->
                <div class="row">

                    <?php
                        getProducts();
                        getUniqueCategories();
                        getUniqueBrands();
                    ?>


                </div>
            </div>

            <div class="col-md-2 bg-secondary p-0">
                <ul class="navbar-nav me-auto text-center">

                    <!-- Marcas -->
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h5>Marcas</h5>
                        </a>
                    </li>

                    <?php
                        getBrands();
                    ?>

                    <!-- Categorias -->
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h5>Categorias</h5>
                        </a>
                    </li>

                    <?php
                        getCategories();
                    ?>


                </ul>
            </div>
        </div>

        <!-- last child -->
        <div class="bg-info p-3 text-center">
            <p>Todos os direitos reservados - by Gilmar P Martins</p>
        </div>

    </div>

    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>