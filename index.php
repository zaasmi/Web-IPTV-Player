<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="TeLaSe">
      <title>WebTV IPTV Player</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
	  	<script type="text/javascript">
	  	<script src="dist/rtmp.min.js"></script>
	    <script src="dist/clappr.js"></script>
	    <script src="dist/clappr.js.map"></script>	 		
        <script src="dist/clappr.min.js"></script>
		<script src="dist/clappr.min.js.map"></script>
	    <script src="dist/clappr-chromecast-plugin.js"></script>
        <script src="dist/clappr-chromecast-plugin.min.js"></script>
        <script src="dist/clappr-chromecast-plugin.min.js.map"></script>		
        <script src="dist/level-selector.min.js"></script>
        <script src="dist/hlsjs-playback.min.js"></script>	
        <script src="dist/playback.min.js"></script>	
        <script src="dist/dash-shaka-playback.js"></script>	
        <script src="dist/clappr_dash.js"></script>	
        <script src="dist/dash-shaka-playback.js"></script>	
        <script src="dist/content.js"></script>	
        <script src="dist/event.js"></script>
        <script src="dist/player.js"></script>			
		<script src="js/custom.js"></script> 
        <script src="js/player.1.0.165.js"></script>		
        <script src="js/jquery.js"></script>	 
        <script src="js/jqueryui.js"></script>	 
        <script src="js/cycle.js"></script>	 
        <script src="js/swiper.js"></script>	 
        <script src="js/nette.js"></script>	 
        <script src="js/slick.min.js"></script>	 
        <script src="js/player-error.js"></script>
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <!--<a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" src="img/logo.png"></a>-->
          <!--Navbar Search -->
         <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control search" onkeyup="bait(this)" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light sort" type="button">
                  <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item mx-1">
               <a class="nav-link" href="http://iptvde.mypressonline.com/">
               <i class="fas fa-plus-circle fa-fw"></i>
               </a>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
          <div id="lists">
         <!-- Sidebar -->
         <ul id="list" class="sidebar navbar-nav list">
		    <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trt1.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trt2.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtavaz.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Avaz</a>
            </li>
			<li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtcocuk.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Cocuk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trthaber.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Haber</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtkurdi.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Kurdi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtmuzik.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Muzik</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtturk.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Türk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtworld.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT World</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtspor1.live.trt.com.tr/master.m3u8;" href="javascript:void(0);">TRT Spor</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtspor2.live.trt.com.tr/master.m3u8;" href="javascript:void(0);">TRT Spor 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://lb.streaming.sk/fashiontv/stream/playlist.m3u8" href="javascript:void(0);">FashionTV Czech&Slovak</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://136.243.177.164/CINEMAX/playlist.m3u8" href="javascript:void(0);">CINEMAX</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://176.9.31.213:7080/live/live_channel/e71sq94uo8/49.m3u8" href="javascript:void(0);">IP1</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://portal.simiptv.co.uk:8080/live/alipajiuk/oRGQpcPAkZ/1175.m3u8" href="javascript:void(0);">xXx 1</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://portal.simiptv.co.uk:8080/live/alipajiuk/oRGQpcPAkZ/290.m3u8" href="javascript:void(0);">XXX 2</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/101.m3u8" href="javascript:void(0);">IP4</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/102.m3u8" href="javascript:void(0);">IP5</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/103.m3u8" href="javascript:void(0);">IP6</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/104.m3u8" href="javascript:void(0);">IP7</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/105.m3u8" href="javascript:void(0);">IP8</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/106.m3u8" href="javascript:void(0);">IP9</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/107.m3u8" href="javascript:void(0);">IP10</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/108.m3u8" href="javascript:void(0);">IP11</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/109.m3u8" href="javascript:void(0);">IP12</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/110.m3u8" href="javascript:void(0);">IP13</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/111.m3u8" href="javascript:void(0);">IP14</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/112.m3u8" href="javascript:void(0);">IP15</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/113.m3u8" href="javascript:void(0);">IP16</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/114.m3u8" href="javascript:void(0);">IP17</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/115.m3u8" href="javascript:void(0);">IP18</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/116.m3u8" href="javascript:void(0);">IP19</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/117.m3u8" href="javascript:void(0);">IP20</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/118.m3u8" href="javascript:void(0);">IP21</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/119.m3u8" href="javascript:void(0);">IP22</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/120.m3u8" href="javascript:void(0);">IP23</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/121.m3u8" href="javascript:void(0);">IP24</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/122.m3u8" href="javascript:void(0);">IP25</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/123.m3u8" href="javascript:void(0);">IP26</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/124.m3u8" href="javascript:void(0);">IP27</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/125.m3u8" href="javascript:void(0);">IP28</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/126.m3u8" href="javascript:void(0);">IP29</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/127.m3u8" href="javascript:void(0);">IP30</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/128.m3u8" href="javascript:void(0);">IP31</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/129.m3u8" href="javascript:void(0);">IP32</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/130.m3u8" href="javascript:void(0);">IP33</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/131.m3u8" href="javascript:void(0);">IP34</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/132.m3u8" href="javascript:void(0);">IP35</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/133.m3u8" href="javascript:void(0);">IP36</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/134.m3u8" href="javascript:void(0);">IP37</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/135.m3u8" href="javascript:void(0);">IP38</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/136.m3u8" href="javascript:void(0);">IP39</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/137.m3u8" href="javascript:void(0);">IP40</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/138.m3u8" href="javascript:void(0);">IP41</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/139.m3u8" href="javascript:void(0);">IP42</a>
            </li>
            <li class="nav-item">
<a class="channel nav-link" data-value="http://202.57.43.60:8443/live/5748aabe4c9d661afbd7f4068248f664/140.m3u8" href="javascript:void(0);">IP43</a>
            </li>
               <a class="channel nav-link" data-value="https://edge-stream-07.otv.co.th/livestream/DVB.stream/playlist.m3u8" href="javascript:void(0);">DVB</a>
            </li>
         </ul>
         </div>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="top-mobile-search">
                  <div class="row">
                     <div class="col-md-12">
                        <form class="mobile-search">
                           <div class="input-group">
                             <input type="text" placeholder="Search for..." class="form-control">
                               <div class="input-group-append">
                                 <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                               </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                            <div id="TeLaSe"></div>
                            <script type="text/javascript">
                                var playerElement = document.getElementById("TeLaSe");
                                var player = new Clappr.Player({
									parentId: '#player',
                                    source: "https://tv-trt1.live.trt.com.tr/master.m3u8",
									poster: 'http://clappr.io/poster.png',
									mimeType: 'ChromecastPlugin.Movie',
                                    mimeType: 'application/x-mpegURL',
									mimeType: "application/vnd.apple.mpegURL",
									mimeType: 'application/octet-stream',
									mimeType: 'application/x-www-form-urlencoded',
									mimeType: 'video/mp4',
                                    mimeType: 'video/m3u',
									mimeType: "video/m3u8",
									mimeType: 'video/mp2t',
									mimeType: 'video/hls',
                                    width: '100%',
                                    height: 'calc(100vh - 100px)',
									playInline: true,
                                    crossOrigin: true,
                                    autoPlay: true,
									flushLiveURLCache: false,
                                    disableVideoTagContextMenu: true,
                                    watermark: "",
                                    watermarkLink: "",
                                    position: 'bottom-right',
                                    mediacontrol: {seekbar: "#00FF00", buttons: "#FFFFFF"},
                                    mute: false,
                                    gaAccount: "UA-69771681-1",
                                    disableErrorScreen: false, // Disable the internal error screen plugin
                                    plugins: [ChromecastPlugin,ErrorPlugin,LevelSelector,HlsjsPlayback,DashShakaPlayback,Clappr.FlasHLS],
                                 //plugins: {playback: [YoutubePlayback]},
                                 //plugins: [DashShakaPlayback,YoutubePlayback],
                                    chromecast: {
                                        appId: "9DFB77C0",
										contentType: "application/x-mpegURL",
										contentType: "application/vnd.apple.mpegUR",
                                        contentType: "application/octet-stream",
										contentType: "application/x-www-form-urlencoded",
										contentType: "ChromecastPlugin.Movie",	
										contentType: "video/mp4",
										contentType: "video/m3u",
                                        contentType: "video/m3u8",
										contentType: "video/mp2t",
										contentType: "video/hls",								
                                        media: {
                                            type: ChromecastPlugin.Movie,
                                            title: "IPTV",
                                            subtitle: "IPTV Streaming Service"
                                        }
                                    },
                                    errorPlugin: {
                                        onRetry: function(e) {
                                        }
                                      },
                                    disableVideoTagContextMenu: true,
                                    playbackNotSupportedMessage: 'Your browser is not supported.'
                                });
                                player.attachTo(playerElement);
                            </script>
                     </div>
                  </div>
               </div>
               <hr class="mt-0">
            </div>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <script src="libs/list.min.js"></script>
      <!-- Custom scripts for all pages-->
	  	<script type="text/javascript"> 
		<script src="dist/rtmp.min.js"></script>
	    <script src="dist/clappr.js"></script>
	    <script src="dist/clappr.js.map"></script>	 		
        <script src="dist/clappr.min.js"></script>
		<script src="dist/clappr-chromecast-plugin.js"></script>
        <script src="dist/clappr-chromecast-plugin.min.js"></script>
        <script src="dist/clappr-chromecast-plugin.min.js.map"></script>		
        <script src="dist/level-selector.min.js"></script>
        <script src="dist/hlsjs-playback.min.js"></script>	
        <script src="dist/playback.min.js"></script>
        <script src="dist/dash-shaka-playback.js"></script>	
        <script src="dist/content.js"></script>	
        <script src="dist/event.js"></script>
        <script src="dist/player.js"></script>			
		<script src="js/custom.js"></script> 
        <script src="js/player.1.0.165.js"></script>		
        <script src="js/jquery.js"></script>	 
        <script src="js/jqueryui.js"></script>	 
        <script src="js/cycle.js"></script>	 
        <script src="js/swiper.js"></script>	 
        <script src="js/nette.js"></script>	 
        <script src="js/slick.min.js"></script>	 
        <script src="js/player-error.js"></script>
   </body>
</html>
