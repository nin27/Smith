<h2><?= $page ?></h2>


<div class="col-md-12">
    <div class="row">
    
    <?php foreach ($products as $product) : ?>
            
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo base_url("assets/{$product['image']}") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php print $product['name'] ?></h5>
                            <p class="card-text text-center">$<?php print $product['price'] ?></p>
                            <a href="#" class="btn btn-primary">Preview</a>
                        </div>
                    </div>
                </div>
    
        <?php 
        endforeach; ?>
    </div>
</div>