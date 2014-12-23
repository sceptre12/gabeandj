function AlbumCtrl($scope){
	$scope.images=[
	{image : 'img/Augustin001.jpg', thumbnail : 'img/Augustin001.jpg', description : 'Image 01 description'},
	{image : 'img/Augustin002.jpg', thumbnail : 'img/Augustin002.jpg', description : 'Image 02 description'},
	{image : 'img/Augustin003.jpg', thumbnail : 'img/Augustin003.jpg', description : 'Image 03 description'},
	{image : 'img/Augustin004.jpg', thumbnail : 'img/Augustin004.jpg', description : 'Image 04 description'},
	{image : 'img/Augustin005.jpg', thumbnail : 'img/Augustin005.jpg', description : 'Image 05 description'},
	{image : 'img/Augustin006.jpg', thumbnail : 'img/Augustin006.jpg', description : 'Image 06 description'},
	{image : 'img/Augustin007.jpg', thumbnail : 'img/Augustin007.jpg', description : 'Image 07 description'},
	{image : 'img/Augustin008.jpg', thumbnail : 'img/Augustin008.jpg', description : 'Image 08 description'},
	{image : 'img/Augustin009.jpg', thumbnail : 'img/Augustin009.jpg', description : 'Image 09 description'},
	{image : 'img/Augustin010.jpg', thumbnail : 'img/Augustin010.jpg', description : 'Image 10 description'}
	];

	$scope.currentImage = _.first($scope.images);

	$scope.setCurrentImage = function(image){
		$scope.currentImage = image;
	}
}

