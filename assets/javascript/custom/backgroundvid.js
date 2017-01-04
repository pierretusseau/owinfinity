const backgroundVideo = new BackgroundVideo('.bv-video', {
  src: [
	'../wp-content/themes/overwatch-theme/assets/videos/oasis.mp4',
	// '../wp-content/themes/overwatch-theme/assets/videos/noel_2.mp4',
	// '../wp-content/themes/overwatch-theme/assets/videos/xmas_background.webm',
  ],
  onReady: function () {
	// Use onReady() to prevent flickers or force loading state
	const vidParent = document.querySelector(`.${this.bvVideoWrapClass}`);
	vidParent.classList.add('bv-video-wrap--ready');
  	var videoCache = document.getElementsByClassName("bv-video-wrap");
  	setTimeout(function(){
  		$(videoCache).css('opacity','1');
  	},1000);
  },
});
