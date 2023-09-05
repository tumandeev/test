
<div class="container mt-5">
<div class="card">

    <div class="card-body">
    
<form action="/products" method="post" >
    <div class="form-group">
        <label for="productName">Название товара</label>
        <input type="text" class="form-control" id="productName" name="title">
        <small id="productNameHelp" class="form-text text-muted">Краткое но емкое описание товара.</small>
    </div>
    <div class="form-group">
        <label for="productPrice">Цена</label>
        <input type="number" class="form-control" id="productPrice" name="price">
    </div>

    <button type="submit" class="btn btn-primary float-right">Сохранить</button>
</form>

</div>

</div>

</div>