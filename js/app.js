(function(){

	var gems = [
	
	{
		name: 'Azurite',
		price: 110.50,
		canPurchase: true,
		soldOut: true,
		description: 'This is a gem and everyone loves to have it.'
	  },
	  {
		name: 'Alloser',
		price: 120.50,
		canPurchase: false,
		soldOut: false,
		description: 'This is not a gem and everyone loves to have it.'
	  }
	  
	  ];
	var app = angular.module('gemStore', []);
	app.controller('StoreController', function(){
		this.products = gems;
	});
})();