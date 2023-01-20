<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }
    </style>


</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">

        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Bem vindo</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </nav>

        <!-- segond child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Painel Administrativo</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#">
                        <img src="../images/perfume1.jfif" alt="" class="admin_image">
                    </a>
                    <p class="text-light text-center">Nome Admin</p>
                </div>

                <!-- button*10>a.nav-link.tet-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class="my-3">
                        <a href="insert_product.php" class="nav-link text-light bg-info my-1">
                            Inserir Produtos
                        </a>
                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Ver Produtos
                        </a>
                    </button>

                    <button>
                        <a href="index.php?insert_category" class="nav-link text-light bg-info my-1">
                            Inserir Categorias
                        </a>
                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Ver Categorias
                        </a>
                    </button>

                    <button>
                        <a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">
                            Inserir Marcas
                        </a>
                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Ver Marcas
                        </a>

                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Todos Pagamentos</a></button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Todos Pedidos
                        </a>
                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Listar Usuários
                        </a>
                    </button>

                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">
                            Logout
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-5">

            <?php
                if(isset($_GET['insert_category'])) {
                    include('insert_categories.php');
                }
            ?>

            <?php
                if(isset($_GET['insert_brands'])) {
                    include('insert_brands.php');
                }
            ?>
            
        </div>
  

        <!-- last child -->
        <div class="bg-info p-3 text-center footer">
            <p>Todos os direitos reservados - by Gilmar P Martins</p>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>