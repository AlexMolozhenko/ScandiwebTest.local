
<nav>
    <h2>Product Add</h2>
    <button type="button" id="load">Save</button>
    <button>Cancel</button>
</nav>

<form action="" method="post" enctype="application/x-www-form-urlencoded" name="add_product">
    <label>SKU
        <input type="text" name="sku"/>
    </label>
    <label>Name
        <input type="text" name="name"/>
    </label>
    <label>Price ($)
        <input type="number" name="price"/>
    </label>
    <label>Type Switcher
        <select id="getAttribute" >
                <option selected disabled>Type Switcher</option>
            <?php foreach ($types as $type):?>
                <option  name="<?=$type['name']?>" value="<?=$type['id']?>"><?=$type['name']?></option>
            <?php endforeach ;?>
        </select>
    </label>

</form>

<div id="attribute"></div>

<!--<script src="../JS/load.js"></script>-->
<!--<script src="/JS/load.js"></script>-->