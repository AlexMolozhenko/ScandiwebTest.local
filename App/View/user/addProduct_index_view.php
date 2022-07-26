
<nav>
    <h2>Product Add</h2>
    <button>Save</button>
    <button>Cancel</button>
</nav>

<form action="<?php Route::url() ?>" method="post" enctype="application/x-www-form-urlencoded" name="add_product">
    <label>SKU
        <input type="text" name="sku"/>
    </label>
    <label>Name
        <input type="text" name="name"/>
    </label>
    <label>Price
        <input type="number" name="price"/>
    </label>





</form>
