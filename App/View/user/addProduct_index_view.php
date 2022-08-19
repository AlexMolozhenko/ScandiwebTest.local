
<nav>
    <div class="name_page" ><h2>Product Add</h2></div>
    <div class="button">
        <button type="button" class="Save" id="Save" form="product_form" name="SAVE">SAVE</button>
        <button type="button" class="Cansel" id="Cansel" form="product_form" name="CANCEL">CANCEL</button>
    </div>
</nav>


    <form action="<?= Route::url('addproduct','add')?>" method="POST" enctype="application/x-www-form-urlencoded" name="product_form" id="product_form" >
        <div class="product_add_form">
            <div class="input_form">
                <label for="sku">SKU</label>
                <input type="text" name="sku" pattern="^[a-zA-Z0-9\/]+$"  required id="sku" />
            </div>
            <div class="input_form">
                <label for="name">Name</label>
                <input type="text" name="name"   required pattern="^[a-zA-Z0-9\s]+$" id="name" />
            </div>
            <div class="input_form">
                <label for="price">Price ($)</label>
                <input type="number" step="any" name="price" min="0" pattern="\-?\d+[.,]\d"  required id="price"/>
            </div>
            <div class="input_form">
                <label for="productType">Type Switcher</label>
                <select id="productType" required>
                    <option  selected disabled value="">Type Switcher</option>
                    <?php foreach ($types as $type):?>
                        <option  name="<?=$type['name']?>" value="<?=$type['id']?>" ><?=$type['name']?></option>
                    <?php endforeach ;?>
                </select>
            </div>
        </div>
        <div class="attribute" id="attribute"></div>

    </form>


<div id="errorMassage">
   <?php if(!empty($errors)):?>
    <?php foreach($errors as $error):?>
       <p><?=$error?></p>
    <?php endforeach;?>
    <?php endif;?>

</div>

<script src="../addProduct.js"></script>