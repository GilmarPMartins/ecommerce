<?php

include('./includes/connect.php');

function getProducts()
{

    global $conn;

    $sql = "Select * from products order by product_title";
    $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($stmt as $item) {

        $product_id          = $item['id'];
        $product_title       = $item['product_title'];
        $product_description = $item['product_description'];
        $product_image1      = $item['product_image1'];
        $product_price       = $item['product_price'];
        $category_id         = $item['category_id'];
        $brand_id            = $item['brand_id'];

        echo "
                    <div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <a href='#' class='btn btn-info'>Adicionar</a>
                            <a href='#' class='btn btn-secondary'>Veja mais</a>
                        </div>
                    </div>
                </div>                           
           ";
    }
}


function getBrands()
{

    global $conn;

    $select_brands = "Select * from brands order by brands_title";
    $result_brands = $conn->query($select_brands)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result_brands as $result) {
        $id = $result['id'];
        echo " <li class='nav-item'>
                        <a href='index.php?brand=$id' class='nav-link text-light'> " . $result['brands_title'] . "</a>   
                    </li>";
    }
}


function getCategories()
{
    global $conn;
    
    $select_categories = "Select * from categories order by category_title";
    $result_categories = $conn->query($select_categories)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result_categories as $result) {
        $id = $result['id'];
        echo " 
                    <li class='nav-item'>
                        <a href='index.php?category=$id' class='nav-link text-light' class='nav-link text-light'> " . $result['category_title'] . "</a>   
                    </li>
                ";
    }
}
