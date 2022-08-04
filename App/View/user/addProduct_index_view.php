
<nav>
    <h2>Product Add</h2>
    <button type="button" id="save" form="product_form">Save</button>
    <button type="button" id="cansel" form="product_form">Cancel</button>
</nav>
<div class="">
    <form action="<?= Route::url('AddProduct','add')?>" method="POST" enctype="application/x-www-form-urlencoded" name="product_form" id="product_form" >
        <label>SKU
            <input type="text" name="sku"    pattern="^[a-zA-Z0-9\/]+$"  required id="productSku" />
        </label>
        <label>Name
            <input type="text" name="name"   required pattern="^[a-zA-Z0-9\s]+$" id="productName" />
        </label>
        <label>Price ($)
            <input type="number" step="any" name="price" pattern="\-?\d+[.,]\d"  required id="productPrice"/>
        </label>
        <label>Type Switcher
            <select id="productType" required>
                <option value="">Type Switcher</option>
                <?php foreach ($types as $type):?>
                    <option  name="<?=$type['name']?>" value="<?=$type['id']?>" ><?=$type['name']?></option>
                <?php endforeach ;?>
            </select>
        </label>
        <div id="attribute"></div>
    </form>
</div>


<div id="errorMassage">
   <?php if(!empty($errors)):?>
    <?php foreach($errors as $error):?>
       <p><?=$error?></p>
    <?php endforeach;?>
    <?php endif;?>

</div>

<script src="../JS/addProduct.js"></script>