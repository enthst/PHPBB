<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enthst &middot; Create a Signature</title>
<link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" /> 
<link rel="stylesheet" type="text/css" href="css/styles.css" /> 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41192329-1', 'enthst.com');
  ga('send', 'pageview');

</script>
</head>

<body>

    <div id="header">
        <div class="wrapper">
			<a href="/board" id="logo" title="Enthst"><img src="/board/styles/metro_blue/imageset/site_logo.png" width="227" height="47" alt="" title=""></a>
			<a href="/signature" id="create-logo">Create a Signature</a>
		</div><!-- wrapper -->
    </div><!-- header -->
    
    <div id="body">
        <div class="wrapper">
            <div id="uploader">
                <div id="big_uploader">
                    <form name="upload_big" id="upload_big"  method="post" enctype="multipart/form-data" action="upload.php?act=upload" target="upload_target">
                    <h2>1. Upload an Image</h2>
	                    <div class="uploady"><input name="photo" id="file" size="27" type="file" /></div>
                  <!-- Height: <input type="text" name="height" value="450" size="5"/>
                   Width: <input type="text" name="width" value="450" size="5" />     -->         
						<div class="uploadit"><input type="submit" name="action" value="Upload" class="upload-button" /></div>
                    </form>
                </div><!-- big_uploader -->
                <div id="notice">Digesting.. nom nom</div>
				<div id="uploaded">
					<h2>2. Move the cropped area to set desired signature</h2>
					<div id="div_upload_big"></div>
					<form name="upload_thumb" id="upload_thumb" method="post" action="upload.php?act=thumb" target="upload_target">
						<input type="hidden" name="img_src" id="img_src" class="img_src" /> 
						<input type="hidden" name="height" value="0" id="height" class="height" />
						<input type="hidden" name="width" value="0" id="width" class="width" />
                            <input type="hidden" id="y1" class="y1" name="y" />
                            <input type="hidden" id="x1" class="x1" name="x" />
                            <input type="hidden" id="y2" class="y2" name="y1" />
                            <input type="hidden" id="x2" class="x2" name="x1" />                         
                            <input type="submit" value="Create Thumbnail" class="create-thumbnail" />
                        </form>
                    </div><!-- uploaded-->
                    <div id="thumbnail">    
                        <h2>3. Thumbnail</h2>
                        <div id="div_upload_thumb"></div>
                        <h2>4. Copy and Paste the code below to your <a href="/board/ucp.php?i=profile&mode=signature" target="_blank">User Control Panel</a></h2>
                        <code></code>
                    </div><!-- thumbnail -->
                </div><!-- content -->
                <iframe id="upload_target" name="upload_target" src="" style="width:100%;height:400px;border:1px solid #ccc; display:none"></iframe>
            </div><!-- uploader -->
        </div><!-- wrap -->
    </div><!-- body-->
</body>
</html>