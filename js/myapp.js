var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);

	app.controller('HeaderCtrl', function($scope, $location){
		$scope.appDetails = {
			title: 'Kenshin\'s App'
			
		};
		$scope.nav = {};
		$scope.nav.isActive = function(path){
			if(path === $location.path()){
				return true;
				console.log($location.path());
			}
			return false;
		};
		
	});

	//for routing
	app.config(function($routeProvider){
		$routeProvider.when("/products", {
				templateUrl: 'parts/products.html',
				controller: 'ProductsCtrl'
			}).when("/cart", {
				templateUrl: 'parts/cart.html',
				controller: 'CartCtrl'
			}).otherwise({
				redirectTo: '/products'
			});
	});
	
	app.factory('cartService', function() {
		var cart = [];
	
	return {
		getCart: function() {
			return cart;
		},
		addToCart: function(product) {
			cart.push(product);
			alert('You Product "'+product.name+'" has been added to cart. Click on the cart link to checkout');
		},
		buy: function(product) {
			alert("Thanks for buying: ", product.name);
		}
	}
	});
	
	
	
	app.controller('CartCtrl', function($scope, cartService, productService){
		
		$scope.cart = cartService.getCart();
		$scope.buy = function(product){
			cartService.buy(product);
		}
		
		
	});
	
	app.factory('productService',function(){
			var products = [
		
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "Adultery",
			"price": 205,
			"rating": 4,
			"binding": "Paperback",
			"publisher": "Random House India",
			"releaseDate": "12-08-2014",
			"details": "Linda, in her thirties, begins to question the routine and predictability of her days. In everybodys eyes, she has a perfect life-happy marriage, children and a career. Yet what she feels is an eno... <a href='#'>View More<a>"
		},
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "Geronimo Stilton Spacemice#2 : You're Mine, Captain!",
			"price": 168,
			"rating": 5,
			"binding": "Paperback",
			"publisher": "Scholastic",
			"releaseDate": "01-07-2014",
			"details": "Geronimo Stilton meets outer space in this cosmically fun spin-off series!Meet Geronimo StiltonixHe is a spacemouse - the Geronimo Stilton of a parallel universe! He is captain of the spaceship Mou... View More"
		},
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "Life or Death",
			"price": 339,
			"rating": 4,
			"binding": "Paperback",
			"publisher": "Hachette India",
			"releaseDate": "01-04-2014",
			"details": "Why would a man escape from prison the day before he's due to be released? Audie Palmer has spent a decade in prison for an armed robbery in which four people died, including two of his gang. Five... View More"
		},
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "Playing It My Way : My Autobiography",
			"price": 599,
			"rating": 5,
			"binding": "Hardcover",
			"publisher": "Hodder & Stoughton",
			"releaseDate": "01-08-2014",
			"details": "I knew that if I agreed to write my story, I would have to be completely honest, as thats the way I have always played the game and that would mean talking about a number of things I have not addr... View More"
		},
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "The Fault in Our Stars",
			"price": 227,
			"rating": 4.5,
			"binding": "Paperback",
			"publisher": "Penguin Books Ltd",
			"releaseDate": "25-01-2013",
			"details": "Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist n... View More"
		},
		{
			"imgUrl": "http://localhost/projects/angular/images/easyfeed-shredder-sc170-strip-cut.jpg",
			"name": "Wings of Fire: An Autobiography",
			"price": 124,
			"rating": 5,
			"binding": "Paperback",
			"publisher": "Universities Press",
			"releaseDate": "25-08-2000",
			"details": "Wings of Fire traces the life and times of India's former president A.P.J. Abdul Kalam. It gives a glimpse of his childhood as well as his growth as India's Missile Man. Summary of the Book Wings... View More"
		}
];

	return{
			getProducts: function() {
					return products;
				}
			};
			
			
});
	
	app.controller('ProductsCtrl', function($scope, productService, cartService){
	
		$scope.products = productService.getProducts();
		
		$scope.addToCart = function (product) {
				cartService.addToCart(product);
		}
	});//enc productCtrl

	/*
	// getting products frm a json file
	app.controller('ProductsCtrl',['$http', '$scope', function($http, $scope){
		var store = $scope;
		//store.products = [];
		$http.get('js/products.json').success(function(data){
			store.products = data;
		});
		store.addToCart = function(product){
			alert('You have chosen this product: '+ product.name);
		};
	
	} ]);*/
	
	