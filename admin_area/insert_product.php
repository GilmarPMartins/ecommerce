<?php

    include('../includes/connect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">

    <div class="container mt-3">
        <h1 class="text-center">Inserir Produtos</h1>

        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Titulo do produto -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Titulo do Produto</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Entre com o titulo do produto" autocomplete="off" required="required">
            </div>

            <!-- Descrição do produto -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Descrição</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Entre com a descrição do produto" autocomplete="off" required="required">
            </div>

            <!-- Palavra chave -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Palavra chave</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Entre com a palavra chave do produto" autocomplete="off" required="required">
            </div>

            <!-- Categorias -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Selecione uma categoria</option>
                    <?php
                        $sql="Select * from categories order by category_title";
                        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        foreach($stmt as $item) {
                            $id = $item['id'];
                            $value = $item['category_title'];
                            echo "<option value='$id'> $value </option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Marcas -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Selecione uma marca</option>
                    <?php
                        $sql="Select * from brands order by brands_title";
                        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        foreach($stmt as $item) {
                            $id = $item['id'];
                            $value = $item['brands_title'];
                            echo "<option value='$id'> $value </option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Imagem 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Imagem 1 do produto</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <!-- Imagem 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Imagem 2 do produto</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

            <!-- Imagem 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Imagem 3 do produto</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

            <!-- Preço-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Palavra chave</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Preço do produto" autocomplete="off" required="required">
            </div>

            <!-- Preço-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info" value="Inserir Produto">
            </div>

        </form>

    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>