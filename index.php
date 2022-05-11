<?php
	include("import.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="JavaScript Grid with rich support for Data Filtering, Paging, Editing, Sorting and Grouping" />
    <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxdata.js"></script> 
    <script type="text/javascript" src="jqwidgets/a/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.sort.js"></script> 
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.edit.js"></script> 
    <script type="text/javascript" src="scripts/demos.js"></script>
    <script type="text/javascript" src="jqwidgets/a/jqxgrid.filter.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var source =
            {
                datatype: "json",
                cache: false,
                datafields: [
					 { name: 'id' },
					 { name: 'rodzaj' },
					 { name: 'model' },
					 { name: 'uwagi' },
					 { name: 'wifi' },
					 { name: 'lan' },
					 { name: 'fax' },
					 { name: 'nfc' },
					 { name: 'adf' },
					 { name: 'duplex' },
					 { name: 'skan_dwustr' },
					 { name: 'a3' },
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
                width: 1490,
                height: 750,
                altrows: true,
                enabletooltips: true,
                editable: true,
                source: dataAdapter,
                theme: theme,
				sortable: true,
				sorttogglestates: 1,
				filterable: true,
                columns: [
                      { int: 'ID', datafield: 'id', cellsformat: 'd', width: 40 },
                      { text: 'Rodzaj', datafield: 'rodzaj', width: 200 },
                      { text: 'Model', datafield: 'model', width: 400 },
                      { text: 'Uwagi', datafield: 'uwagi', width: 200 },
                      { boolean: 'WiFi', datafield: 'wifi', width: 50 },
					  { boolean: 'LAN', datafield: 'lan', width: 50 },
					  { boolean: 'FAX', datafield: 'fax', width: 50 },
					  { boolean: 'NFC', datafield: 'nfc', width: 50 },
					  { boolean: 'ADF', datafield: 'adf', width: 50 },
					  { boolean: 'Duplex', datafield: 'duplex', width: 80 },
					  { boolean: 'Skan Dwustr', datafield: 'skan_dwustr', width: 100 },
					  { boolean: 'A3', datafield: 'a3', width: 80 },
					  { float: 'Cena drukarki', datafield: 'cena_drukarki', width: 120 }
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