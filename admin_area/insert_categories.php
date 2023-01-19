<?php
    include('../includes/connect.php');
    if(isset($_POST['insert_cat'])) {
        $category_title = $_POST['cat_title'];

        // select data from db
        $sql = "select category_title from categories where category_title = '$category_title'";
        $stmt = $conn->query($sql);

        if($stmt->rowCount() > 0) { ?>
            <div class="alert alert-danger" role="alert">
                Categoria <?=  $category_title ?> já cadastrada.
            </div> <?php
        } else {
            $sql = "insert into categories (category_title) values (:category)";

            $stmt = $conn->prepare($sql);
            $prepare = array(
                ':category' => $category_title
            );
            $stmt->bindParam(':category', $category_title, PDO::PARAM_STR, 100);

            if ($stmt->execute($prepare)) {  ?>
                <div class="alert alert-success" role="alert">
                    Categoria <?=  $category_title ?>  inserida com êxito
                </div> <?php
            } else {  ?>
                <div class="alert alert-danger" role="alert">
                    Não foi possivel inserir a categoria <?=  $category_title ?> .
                </div> <?php
            }
        }    
    }   
?>

<h2 class="text-center">Inserir Categorias</h2>

<form action="" method="post" class="mb-2">
    
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="cat_title" placeholder="Inserir categoria" 
            aria-label="Categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-102 mb-2 m-auto">
        <input  type="submit" 
                class="bg-info border-0 p-2 my-3" 
                name="insert_cat" 
                value="Inserir Categoria"
        >
    </div>

</form>