<h2><?=$page?></h2>


<div class="row">
    <div class="container" style="width:800px;">
      <?php foreach($products as $product):?>
      <div class="col-md-5">
        <div class="thumbnail"> <img src="<?php echo base_url("assets/{$product['image']}")?>" alt="Lights" class="img-responsive" style="width:100%; height:200px;">
          <div class="caption">
            <p style="text-align:center;"><?php print $product['name']?></p>
            <p style="text-align:center;color:#04B745;"><b>$<?php print $product['price']?></b></p><br>
			<button type="submit" class="btn btn-warning" style="margin:0;">Preview</button>
            <form method="post" action="moro.php?action=addcart">
              <p style="text-align:center;color:#04B745;">
                <button onclick="addbtn()" type="submit" class="btn btn-warning">Add To Cart</button>
				<script>
				function addbtn(){
					alert("Item Added to Cart")
				} 
				</script>
                <input type="hidden" name="sku" value="<?php print $product['sku']?>">
              </p>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>

