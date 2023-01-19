<?php
    include('../includes/connect.php');
    if(isset($_POST['insert_brand'])) {
        $brand_title = $_POST['brand_title'];

        // select data from db
        $sql = "select brands_title from brands where brands_title = '$brand_title'";
        $stmt = $conn->query($sql);

        if($stmt->rowCount() > 0) { ?>
            <div class="alert alert-danger" role="alert">
                Marca <?=  $brand_title ?> já cadastrada.
            </div> <?php
        } else {
            $sql = "insert into brands (brands_title) values (:brand)";

            $stmt = $conn->prepare($sql);
            $prepare = array(
                ':brand' => $brand_title
            );
            $stmt->bindParam(':brand', $brand_title, PDO::PARAM_STR, 100);

            // $stmt->execute($prepare);

            if ($stmt->execute($prepare)) {  ?>
                <div class="alert alert-success" role="alert">
                    Marca <?=  $brand_title ?>  inserida com êxito
                </div> <?php
                
            } else {  ?>
                <div class="alert alert-danger" role="alert">
                    Não foi possivel inserir a marca <?=  $brand_title ?> .
                </div> <?php
               
            }
        }    
    }   
?>

<form action="" method="post" class="mb-2">
    
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="brand_title" placeholder="Inserir marcas" 
            aria-label="brands" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-102 mb-2 m-auto">
        <input  type="submit" 
                class="bg-info border-0 p-2 my-3" 
                name="insert_brand" 
                value="Inserir Marca"
        >
    </div>

</form>