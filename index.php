<!DOCTYPE html>
<html lang="pl">
<head>
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="JavaScript Grid with rich support for Data Filtering, Paging, Editing, Sorting and Grouping" />
    <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgrid.sort.js"></script> 
    <script type="text/javascript" src="jqwidgets/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="jqwidgets/jqxgrid.edit.js"></script> 
    <script type="text/javascript" src="scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var source =
            {
                datatype: "json",
                cache: false,
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
                id: 'id',
                url: 'data.php',
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
                    var data = "update=true&" + $.param(rowdata);
                    $.ajax({
                        dataType: 'json',
                        url: 'data.php',
                        cache: false,
                        data: data,
                        success: function (data, status, xhr) {
                            // update command is executed.
                            commit(true);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            commit(false);
                        }
                    });
                }
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 1460,
                height: 750,
                altrows: true,
                enabletooltips: true,
                editable: true,
                source: dataAdapter,
                theme: theme,
                columns: [
                      { text: 'id', datafield: 'id', cellsformat: 'd', width: 40 },
                      { text: 'rodzaj', datafield: 'rodzaj', width: 200 },
                      { text: 'Model', datafield: 'Model', width: 400 },
                      { text: 'uwagi', datafield: 'uwagi', width: 200 },
                      { text: 'WiFi', datafield: 'WiFi', width: 50 },
					  { text: 'LAN', datafield: 'LAN', width: 50 },
					  { text: 'FAX', datafield: 'FAX', width: 50 },
					  { text: 'NFC', datafield: 'NFC', width: 50 },
					  { text: 'ADF', datafield: 'ADF', width: 50 },
					  { text: 'duplex', datafield: 'duplex', width: 50 },
					  { text: 'Skan_Dwustr', datafield: 'Skan_Dwustr', width: 100 },
					  { text: 'A3', datafield: 'A3', width: 80 },
					  { text: 'cena_drukarki', datafield: 'cena_drukarki', width: 120 }
                  ]
            });

        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div style="float: left;" id="jqxgrid"></div>
    </div>
</body>
</html>