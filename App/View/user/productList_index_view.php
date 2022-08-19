

<nav>
    <div class="name_page"><h2>Product list</h2></div>
    <div class="button">
        <button type="button" class="ADD" id="ADD" name="ADD">ADD</button>
        <button type="button" class="delete-product-btn"  id="delete-product-btn" form="delete-form" name="MASS DELETE">MASS DELETE</button>
    </div>
</nav>
<form action="<?= Route::url('productlist','destroy')?>" method="POST" enctype="application/x-www-form-urlencoded" id="delete_form">
    <div class="product_list">
        <?php foreach($products as $product):?>
            <div class="product">
                <?php foreach($product as $key=>$values):?>

                    <?php if($key == 'product'):?>
                    <input type="checkbox"  name="products[]" value="<?=$values['id']?>" class="delete-checkbox" id="delete-checkbox"/>
                    <div class="product_param">
                        <div><?=$values['sku']?></div>
                        <div><?=$values['name']?></div>
                        <div><span><?=$values['price'].' '.$values['currency']?></span></div>
                        <?php endif;?>

                        <?php if($key == 'attributes'):?>
                            <?php foreach($values as $attribute):?>
                                <div><span><?=$attribute['attributeName'].' '.$attribute['attributeValue'].''.$attribute['attributeUnits']?></span></div>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
            </div>
        <?php endforeach;?>
    </div>
</form>





<script src="../productList.js"></script>