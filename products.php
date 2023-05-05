<?php
include 'navbar.php';
 $products=[

        'product 1' => [
        'price' => '5800',
        'img' => 'images/img0.jpg',
        'descr' => 'Air Jordan 1 Retro High OG “Reverse Laney”'
        ],
        'product 2' => [
            'price' => '6300',
            'img' => 'images/img2.jpg',
            'descr' => 'Nike Air Max 90 Futura'
        ],
        'product 3' => [
            'price' => '7770',
            'img' =>   'images/img3.jpg',
            'descr' =>  'Jordan Retro 4 "Seafoam'
        ],  
            'product 4' => [
            'price' =>  '4500',
            'img' =>   'images/img4.jpg',
            'descr' =>  'Nike Go FlyEase Easy'
        ],  
            'product 5' => [
            'price' =>  '5600',
            'img' =>  'images/img5.jpg',
            'descr' =>  'Nike Air Max 90'
        ],   
        'product 6' => [
            'price' => '9000',
            'img' =>  'images/img6.jpg',
            'descr' => 'Adidas Ozweego'
        ]
 ];
 ?>

<div class="container">
    <div class="row m-3">

        <?php
 foreach($products as $key => $value)
 {
?>
        <div class="col-s-6 col-md-4">

            <div class="card mb-5" style="width: 18rem;">
                <img src="<?php echo $value['img'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <small> <?php echo $value['price']?> LE.</small>
                    <h5 class="card-title"><?php echo $key ?></h5>
                    <p class="card-text"> <?php echo $value['descr']?></p>
                    <a href="#" class="btn btn-primary">view options</a>
                </div>
            </div>
        </div>

        <?php
}
?>
    </div>
</div>