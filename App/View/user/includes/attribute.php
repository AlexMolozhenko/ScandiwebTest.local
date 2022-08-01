


    <input type="hidden" name="typeId" value="<?=$typeId?>"/>

    <?php foreach ($attributes as $attribute):?>
       <label><?=$attribute['name']?> (<?=$attribute['units']?>)
           <input type="number" step="any" name="attributes[<?=$attribute['id']?>]" id="<?=$attribute['id']?>" form="product_form"  pattern="\-?\d+[.,]\d" required/>
       </label>
    <?php endforeach;?>
