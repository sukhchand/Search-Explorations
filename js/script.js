var app = angular.module("serachPOC", []);

app.controller("search", function($scope,searchService,$window) {

	$scope.searchRes = {};
	$scope.resLen = 0;
    $scope.productsResLen = 0;
    $scope.quaryLimit = 8;
    $scope.productLimit = 4;
    $scope.brandLen = 0;
    $scope.catLen = 0;
    $scope.quaryLen = 0;
    // $scope.$watch($scope.productsResLen, function(){
    //     $scope.productLimit = $scope.productsResLen == 1 ? 8 : 4;
    // });
	var retFn = function(response){
		$scope.searchRes = response;
		$scope.resLen = Object.keys(response.data).length;
        //console.log($scope.resLen.products, response.data.products);
        $scope.productsResLen = response.data.products != null ? Object.keys(response.data.products).length : 0;
        console.log($scope.productsResLen);
        $scope.productLimit = response.data.products != null ? ((Object.keys(response.data.products).length == 1) ? 8 : 4) : 0 ;
        //console.log((Object.keys(response.data.products).length == 1) ? 8 : 4);
        $scope.brandLen = response.data.brands != null ? Object.keys(response.data.brands).length : 0;
        $scope.catLen = response.data.categories != null ? Object.keys(response.data.categories).length : 0;
        $scope.quaryLen = response.data.quaries != null ? Object.keys(response.data.quaries).length : 0;
	}

	$scope.searchF = function(){
		if($scope.serachTxt.length > 1)
    		searchService.getSearchResult($scope.serachTxt,retFn);
    	else
    		$scope.resLen = 0;	
	};
    $scope.searchProductByQ = function(cat){
        alert(cat);
    };

    $scope.win = {
        h: 0,
        w: 0
    };
    var win = angular.element($window);
    var init = function(){
        win.bind('resize',function(){
            $scope.win.h = window.innerHeight;
            $scope.win.w = window.innerWidth;
            $scope.$apply();
        });
    };
    init();
});

app.service('searchService',function($http){
	this.getSearchResult = function(param,success){
		//$http.get('http://api.backcountry.com/v1/suggestions?q='+param+'&site=bcs')
		$http.get('http://localhost/search-explorations/search.php?q='+param+'&site=bcs')
    	.success(success);
	};	
});

app.filter('myLimitTo', [function(){
    return function(obj, limit){
        if(!obj)
            return;
        var keys = (obj.constructor === Array) ? obj : Object.keys(obj);
        if(keys.length < 1){
            return [];
        }

        var ret = new Object,
        count = 0;
        angular.forEach(keys, function(key, arrayIndex){
            if(count >= limit){
                return false;
            }
            ret[key] = obj[key];
            count++;
        });
        return ret;
    };
}]);

// app.directive('resize', function ($window) {
//     return function (scope, element, attr) {

//         var w = angular.element($window);
//         scope.$watch(function () {
//             return {
//                 'h': window.innerHeight, 
//                 'w': window.innerWidth
//             };
//         }, function (newValue, oldValue) {
//             console.log(newValue, oldValue);
//             scope.windowHeight = newValue.h;
//             scope.windowWidth = newValue.w;

//             scope.resizeWithOffset = function (offsetH) {
//                 scope.$eval(attr.notifier);
//                 return { 
//                     'height': (newValue.h - offsetH) + 'px'                    
//                 };
//             };

//         }, true);

//         w.bind('resize', function () {
//             scope.$apply();
//         });
//     }
// });


$( document ).ready(function() {
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    $(".popular_searches").outerHeight($(".search_popup").height());
    $(".search_field").on("click", function(){
        //$(".search_popup").slideToggle();
    });
    $('.popular_searches li a').on('click', function(){
        $('.products').css('display','none');
        $('.categories').css('display','none');
        $('.products_selected').css('display','block');

    })
});