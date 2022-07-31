
<nav>
    <h2>Product Add</h2>
    <button type="submit" id="save" form="product_form">Save</button>
    <button>Cancel</button>
</nav>

<form action="<?= Route::url('AddProduct','add')?>" method="POST" enctype="application/x-www-form-urlencoded" name="product_form" id="product_form" >
    <label>SKU
        <input type="text" name="sku"  placeholder="Please, provide SKU" required pattern="^[a-zA-Z0-9]+$" minlength="5" id="productSku" />
    </label>
    <label>Name
        <input type="text" name="name"  placeholder="Please, provide Name" required pattern="^[a-zA-Z0-9]+$" id="productName" minlength="3"/>
    </label>
    <label>Price ($)
        <input type="number" name="price"  placeholder="Please, provide Price" required id="productPrice"/>
    </label>
    <label>Type Switcher
        <select id="productType" required>
                <option selected disabled>Type Switcher</option>
            <?php foreach ($types as $type):?>
                <option  name="<?=$type['name']?>" value="<?=$type['id']?>"><?=$type['name']?></option>
            <?php endforeach ;?>
        </select>
    </label>
    <div id="attribute"></div>
</form>

<div id="response"></div>
<div id="errorMassage"></div>
