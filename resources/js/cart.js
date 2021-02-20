const formAddToCart = document.querySelector('.form-add-to-cart');

if (formAddToCart){
	formAddToCart.addEventListener('submit',(e)=>{
		e.preventDefault();
		const data = new FormData(formAddToCart);
		// console.log(data);
		axios.post('/cart/add', data);


	})
}