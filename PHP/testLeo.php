<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>jQuery plugin for FileAPI</title>

	<meta name="keywords" content="jQuery, Plugin, FileAPI, html5, upload, multiupload, dragndrop, chunk, chunked, file, image, crop, resize, rotate, html5, rubaxa"/>
	<meta name="description" content="jQuery.fn.fileapi — the best plugin for jQuery (it is true)"/>

	<link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css"/>
	<link href="http://rubaxa.github.io/jquery.fileapi/statics/main.css" rel="stylesheet" type="text/css"/>
	<link href="http://rubaxa.github.io/jquery.fileapi/jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css"/>

	<script>
		var examples = [];
	</script>

</head>
<body>
	<div>
		<div class="body__top"></div>
		<div class="logo logo_small" style="position: absolute; left: 18px; top: 20px;"></div>
		<a class="view-on-github" href="https://github.com/RubaXa/jquery.fileapi/"></a>

		<div style="height: 30px;"></div>


		<div class="content">
			<div class="content__head"></div>

				<div id="dnd" class="b-upload b-upload_dnd">
					<div class="row">
						<div class="dropzone drag-and-drop span22">
							<div class="text-center">
								<i class="icon-plus"></i><br>
								<span>Glissez déposez vous fichier ici - ou cliquez moi dessus</span>
							</div>
							<input type="file" name="files[]" multiple id="selectFile">
						</div>
						<div class="dropzone no-drag-and-drop span22">
							<div class="text-center">
								<i class="icon-plus"></i><br>
								<span>Cliquez ici pour selectionner les fichiers à envoyer</span>
							</div>
							<input type="file" name="files[]" multiple id="selectFile">
						</div>
					</div>
					<div class="row span22" style="margin-bottom: 20px;">
						<div class="ctrl-upload button button-green pull-right">Upload</div>
					</div>
					 <div class="row js-files">
				         <div class="js-file-tpl span3 img-polaroid" data-id="<%=uid%>" title="<%-name%>, <%-sizeText%>">
				            <div class="b-thumb__preview pull-left">
				               <div class="b-thumb__preview__pic"></div>
				            </div>

				            <div data-fileapi="remove" class="pull-right"><i class="icon-trash" title="Supprimer le fichier"></i></div>
				            <% if( /^image/.test(type) ){ %>
				               <br><div data-fileapi="rotate.cw" class="pull-right"><i class="icon-repeat" title="Faire pivoter l'image"></i></div>
				            <% } %>
				            <div class="b-thumb__name"><%-name%></div>
				            <div class="b-thumb__progress progress progress-striped active"><div class="bar"></div></div>
				            <div class="transfert-ok" style="display: none;">Transfert effectué</div>

				         </div>
				      </div>
				</div>
		</div>

	</div>


	<div id="popup" class="popup" style="display: none;">
		<div class="popup__body"><div class="js-img"></div></div>
		<div style="margin: 0 0 5px; text-align: center;">
			<div class="js-upload btn btn_browse btn_browse_small">Upload</div>
		</div>
	</div>

	<script src="//code.jquery.com/jquery-1.8.2.min.js"></script>
	<script>!window.jQuery && document.write('<script src="/js/jquery.dev.js"><'+'/script>');</script>



	<script>
		var FileAPI = {
			  debug: true
			, staticPath: './FileAPI/'
		};
	</script>
	<script src="http://rubaxa.github.io/jquery.fileapi/FileAPI/FileAPI.min.js"></script>
	<script src="http://rubaxa.github.io/jquery.fileapi/FileAPI/FileAPI.exif.js"></script>
	<script src="http://rubaxa.github.io/jquery.fileapi/jquery.fileapi.js"></script>
	<script src="http://rubaxa.github.io/jquery.fileapi/jcrop/jquery.Jcrop.min.js"></script>
	<script src="http://rubaxa.github.io/jquery.fileapi/statics/jquery.modal.js"></script>


	<script>
		jQuery(function ($){

			// Init examples
			FileAPI.each(examples, function (fn){
				fn();
			});
			
					$('#dnd').fileapi({
					   url: "http://rubaxa.org/FileAPI/server/ctrl.php",
					   data: { 'session-id': 123 }, // data with GET
					   paramName: 'filedata',
					   multiple: true,
					   chunkSize: 2 * FileAPI.MB,
					   elements: {
					      ctrl: { upload: '.ctrl-upload',abort: '.ctrl-abort' },
					      emptyQueue: { hide: '.ctrl-upload' },
					      list: '.js-files',
					      file: {
					         tpl: '.js-file-tpl',
					         preview: {
					            el: '.b-thumb__preview',
					            width: 98,
					            height: 98
					         },
							upload: { show: '.progress', hide: '.b-thumb__rotate' },
							complete: { hide: '.progress' },
							progress: '.progress .bar'
					      },
					      dnd: {
					         el: '.dropzone.drag-and-drop',
					         hover: 'in',
					         fallback: '.dropzone.no-drag-and-drop'
					      }
					   }
					})
		});
	</script>
</body>
</html>
