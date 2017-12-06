<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
<script type="text/javascript" src="libs/FileSaver.js/FileSaver.js"></script>
<script type="text/javascript" src="js/jspdf.js"></script>

</head>
<script type="text/javascript">
	function CreaPDF(){
		var doc = new jsPDF();
		doc.text(20, 20, 'Hello world!');
		doc.text(20, 30, 'This is client-side Javascript, pumping out a PDF.');
		doc.addPage();
		doc.text(20, 20, 'Do you like that?');
		doc.save('Test.pdf');
	}

</script>
<body>
<input type="button" value="Generar" onclick="CreaPDF()">
</body>
</html>