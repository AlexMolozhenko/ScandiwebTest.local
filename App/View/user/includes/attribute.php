


    <input type="hidden" name="typeId" value="<?=$typeId?>"/>

    <?php foreach ($attributes as $attribute):?>
    <div class="input_attribute_form">
        <label for="<?=mb_strtolower($attribute['name'])?>"><?=$attribute['name']?> (<?=$attribute['units']?>)</label>
            <input type="number" step="any"  min="0" name="attributes[<?=$attribute['id']?>]" id="<?=mb_strtolower($attribute['name'])?>" form="product_form"  pattern="\-?\d+[.,]\d" required/>

    </div>

    <?php endforeach;?>
