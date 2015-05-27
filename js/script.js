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