<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
	    header("Location: ../../logreg/index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="mobile-web-app-capable" content="yes" />
		<style type="text/css" title="Default">
			/* fullscreen */
			html {
				height:100%;
			}
			body {
				height:100%;
				margin: 0px;
				overflow:hidden; /* disable scrollbars */
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* remove highlight on tab for iOS/Android */
			}
			/* fix for scroll bars on webkit & >=Mac OS X Lion */ 
			::-webkit-scrollbar {
				background-color: rgba(0,0,0,0.5);
				width: 0.75em;
			}
			::-webkit-scrollbar-thumb {
    			background-color:  rgba(255,255,255,0.5);
			}
		</style>	
	</head>
	<body>
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
		<script type="text/javascript" src="pano2vr_player.js">
		</script>
		<script type="text/javascript" src="skin.js">
		</script>
		<script src="webxr/three.min.js"></script>
		<script src="webxr/webxr-polyfill.min.js"></script>
		<div id="container" style="width:100%;height:100%;overflow:hidden;">
		<br>Loading...<br><br>
		</div>
		<script type="text/javascript">
	
			// create the panorama player with the container
			pano=new pano2vrPlayer("container");
			// add the skin object
			skin=new pano2vrSkin(pano);
			// load the configuration
		
			window.addEventListener("load", function() {
				pano.readConfigUrlAsync("pano.xml");
			});
			if (window.navigator.userAgent.match(/AppleWebKit/i)) {
				// fix for white borders, rotation on iPhone
				function iosHfix(e) {
					window.scrollTo(0, 1);
					var container=document.getElementById("container");
					var oh=container.offsetHeight;
					document.documentElement.style.setProperty('height', '100vh');
					if (oh!=container.offsetHeight) {
						container.style.setProperty('height',"100%");
					} else {
						container.style.setProperty('height',window.innerHeight+"px");
					}
					window.scrollTo(0, 0);
					pano.setViewerSize(container.offsetWidth, container.offsetHeight);
				};
				setTimeout(iosHfix,0);	
				setTimeout(iosHfix,100);	
				window.addEventListener("resize", function() {
					setTimeout(iosHfix,0);
					// hide toolbar on iPad happens with a delay
					setTimeout(iosHfix,500);
					setTimeout(iosHfix,1000);
					setTimeout(iosHfix,2000);
				});
			}
		</script>
		<noscript>
			<p><b>Please enable Javascript!</b></p>
		</noscript>
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - --> 
	</body>
</html>
