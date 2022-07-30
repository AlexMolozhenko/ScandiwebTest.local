
<nav>
    <h2>Product Add</h2>
    <button type="button" id="save" form="product_form">Save</button>
    <button>Cancel</button>
</nav>

<form action="<?= Route::url('AddProduct','add')?>" method="post" enctype="application/x-www-form-urlencoded" name="product_form" id="product_form" >
    <label>SKU
        <input type="text" name="sku" required placeholder="Please, provide SKU"/>
    </label>
    <label>Name
        <input type="text" name="name" required placeholder="Please, provide Name"/>
    </label>
    <label>Price ($)
        <input type="number" name="price" required placeholder="Please, provide Price"/>
    </label>
    <label>Type Switcher
        <select id="productType" >
                <option selected disabled>Type Switcher</option>
            <?php foreach ($types as $type):?>
                <option  name="<?=$type['name']?>" value="<?=$type['id']?>"><?=$type['name']?></option>
            <?php endforeach ;?>
        </select>
    </label>
    <div id="attribute"></div>
</form>

<div id="response"></div>
