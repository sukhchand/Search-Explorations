var app = angular.module("serachPOC", []);


app.controller("search", function($scope,searchService) {

	$scope.searchRes = {};
	$scope.resLen = 0;
	var retFn = function(response){
		$scope.searchRes = response;
		$scope.resLen = Object.keys(response.data).length;
	}

	$scope.searchF = function(){
		if($scope.serachTxt.length > 1)
    		searchService.getSearchResult($scope.serachTxt,retFn);
	};
});

app.service('searchService',function($http){
	this.getSearchResult = function(param,success){
		//$http.get('http://api.backcountry.com/v1/suggestions?q='+param+'&site=bcs')
		$http.get('http://localhost/Search/search.php?q='+param+'&site=bcs')
    	.success(success);
	};	
});

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
        $(".search_popup").slideToggle();
    });
    $('.popular_searches li a').on('click', function(){
        $('.products').css('display','none');
        $('.categories').css('display','none');
        $('.products_selected').css('display','block');

    })
});