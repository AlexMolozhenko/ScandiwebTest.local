


    <input type="hidden" name="typeId" value="<?=$typeId?>"/>

    <?php foreach ($attributes as $attribute):?>
       <label><?=$attribute['name']?> (<?=$attribute['units']?>)
           <input type="number" name="attributes[<?=$attribute['id']?>]" id="<?=$attribute['id']?>" form="product_form"  placeholder="Please, provide <?=$attribute['name']?>" required/>
       </label>
    <?php endforeach;?>
