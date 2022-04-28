<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Drukarki</title>
    <!-- add one of the jQWidgets styles -->
    <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="jqwidgets/styles/jqx.classic.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var theme = 'classic';
            var source =
            {
                datatype: "json",
                datafields: [
					 { name: 'id' },
					 { name: 'rodzaj' },
					 { name: 'Model' },
					 { name: 'uwagi' },
					 { name: 'WiFi' },
					 { name: 'LAN' },
					 { name: 'FAX' },
					 { name: 'NFC' },
					 { name: 'ADF' },
					 { name: 'duplex' },
					 { name: 'Skan_Dwustr' },
					 { name: 'A3' },
					 { name: 'cena_drukarki' }
                ],
                cache: false,
                url: 'data.php',
                sort: function () {
                    // update the grid and send a request to the server.
                    $("#jqxgrid").jqxGrid('updatebounddata', 'sort');
                }
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                source: dataAdapter,
                theme: theme,
                sortable: true,
                sorttogglestates: 1,
                columns: [
                      { text: 'id', datafield: 'id', cellsformat: 'd', width: 200 },
                      { text: 'rodzaj', datafield: 'rodzaj', width: 200 },
                      { text: 'Model', datafield: 'Model', width: 180 },
                      { text: 'uwagi', datafield: 'uwagi', width: 100 },
                      { text: 'WiFi', datafield: 'WiFi', width: 140 },
					  { text: 'LAN', datafield: 'LAN', width: 140 },
					  { text: 'FAX', datafield: 'FAX', width: 140 },
					  { text: 'NFC', datafield: 'NFC', width: 140 },
					  { text: 'ADF', datafield: 'ADF', width: 140 },
					  { text: 'duplex', datafield: 'duplex', width: 140 },
					  { text: 'Skan_Dwustr', datafield: 'Skan_Dwustr', width: 140 },
					  { text: 'A3', datafield: 'A3', width: 140 },
					  { text: 'cena_drukarki', datafield: 'cena_drukarki', width: 140 }
                ]
            });
        });
    </script>
</head>
<body class='default'>
    <div id="jqxgrid"></div>
</body>
</html>