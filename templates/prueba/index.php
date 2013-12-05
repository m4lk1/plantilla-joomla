<?php
	defined( '_JEXEC') or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<? php echo $this->language; ?>"

<head>
	<link rel="stylesheet" type="text/css" href="/templates/prueba/style.css" />
	<script src="/media/jui/js/bootstrap.min.js" type"=text/javascript"> </script>
	<jdoc:include type="head" />
	
</head>

<body>

<div id="global">

	<div id="globalmenu">
	
		<div id="logo">
			<jdoc:include type="modules" name="logo" style="xhtml" />
		</div>
	
		<div id="menu">
			<jdoc:include type="modules" name="menu" style="xhtml" />
		</div>
		
	
	</div>
	
	<div id="slide">
		<jdoc:include type="modules" name="slide" style="xhtml" />
	</div>
	
	<div id="globalcontenido">
	
		<div id="med1">
			<jdoc:include type="component" />
		</div>
		
		<div id="med2">
			<jdoc:include type="component" />
		</div>
		
		<div id="med3">
			<jdoc:include type="component" />
		</div>
		
		<div id="med4">
			<jdoc:include type="component" />
		</div>
		
		<div id="med5">
			<jdoc:include type="component" />
		</div>
		
		<div id="med6">
			<jdoc:include type="component" />
		</div>
		
	</div>
	
	<div id="globalbarra"
	
		<div id="bar1">
			<jdoc:include type="modules" name="bar1" style="xhtml" />
		</div>
		
		<div id="bar2">
			<jdoc:include type="modules" name="bar2" style="xhtml" />
		</div>
		
		<div id="bar3">
			<jdoc:include type="modules" name="bar3" style="xhtml" />
		</div>
		
		<div id="bar4">
			<jdoc:include type="modules" name="bar4" style="xhtml" />
		</div>
		
		<div id="bar5">
			<jdoc:include type="modules" name="bar5" style="xhtml" />
		</div>
		
	</div>
	
	<div id="pie">
		<jdoc:include type="modules" name="pie" style="xhtml" />
	</div>
	
	
</div>	
</body>
</html>
