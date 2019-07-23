function zoomImage() {
	var 
		image = document.getElementById("zoomImage");
		bannerHeight = 82;
		toolbarHeight = window.outerHeight-window.innerHeight;
		imageHeight = screen.availHeight-toolbarHeight-bannerHeight;
	if(toolbarHeight<0){
		imageHeight = screen.height - bannerHeight;
	}
	image.style.paddingBottom = imageHeight+"px";
}
window.onresize=function(){  
    zoomImage();
}
zoomImage();