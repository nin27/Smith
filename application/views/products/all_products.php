<h2><?= $page ?></h2>


<div class="col-md-12">
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach ($products as $product) : ?>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo base_url("assets/{$product['image']}") ?>" class="card-img-top" alt="<?=$product['name'] ?>" style="width:100%; height:170px;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?=$product['name'] ?></h5>
                            <p class="card-text ">$<?=$product['price'] ?></p>
                            <a href="<?=base_url()?>products/view/<?=$product['product_id']?>" class="btn btn-secondary">Preview</a>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
    
        <?php endforeach; ?>
    </div>
</div>