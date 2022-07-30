
    <?php foreach ($attributes as $attribute):?>
       <label><?=$attribute['name']?> (<?=$attribute['units']?>)
           <input type="number" name="<?=$attribute['id']?>" id="<?=$attribute['id']?>" form="product_form" required placeholder="Please, provide <?=$attribute['name']?>"/>
       </label>
    <?php endforeach;?>
