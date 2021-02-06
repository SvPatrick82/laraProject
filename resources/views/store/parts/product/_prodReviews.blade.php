<h3>Reviews</h3>

<form action="/product/ut-atque-quis-ut" method="POST">
    @csrf

    <textarea name="productRev" class="form-control border-dark" rows="3"></textarea>
    <button class="btn btn-outline-primary mt-3">Add review</button>
    <input type="hidden" name="product_id" value="product_id">
</form>

