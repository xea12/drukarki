<!DOCTYPE html>
<html lang="en">
<head>
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8, IE=edge, chrome=1">
    <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="jqwidgets/styles/jqx.light.css" type="text/css" />
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
    <script type="text/javascript" src="jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxnumberinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="jqwidgets/globalization/jquery.global.js"></script>
    <script type="text/javascript" src="scripts/gettheme.js"></script>
	<script type="text/javascript" src="jqwidgets/jqx-all.js "></script>
    <script type="text/javascript" src="generatedata.js"></script>
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
                id: 'id_drukarki',
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
                width: 1500,
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
                      { int: 'id', datafield: 'id', width: 40 },
                      { text: 'rodzaj',columntype: 'textbox', datafield: 'rodzaj', width: 200, 
							validation: function (cell, value) {
								if (value.length > 50) {
									return { result: false, message: "Maksymalna ilość znaków to: 50" }
								};
								return true;
							}						  
					  },
                      { text: 'model', columntype: 'textbox', datafield: 'model', width: 400, 
							validation: function (cell, value) {
								if (value.length > 80) {
									return { result: false, message: "Maksymalna ilość znaków to: 80" }
								};
								return true;
							}					  
					  },
                      { text: 'uwagi', columntype: 'textbox', datafield: 'uwagi', width: 210,
							validation: function (cell, value) {
								if (value.length > 100) {
									return { result: false, message: "Maksymalna ilość znaków to: 100" }
								};
								return true;
							}
					  },
                      { boolean: 'wifi', datafield: 'wifi', width: 50, columntype: 'dropdownlist', editable: true},
					  { boolean: 'lan', datafield: 'lan', width: 50, columntype: 'dropdownlist', editable: true },
					  { boolean: 'fax', datafield: 'fax', width: 50, columntype: 'dropdownlist', editable: true },
					  { boolean: 'nfc', datafield: 'nfc', width: 50, columntype: 'dropdownlist', editable: true },
					  { boolean: 'adf', datafield: 'adf', width: 50, columntype: 'dropdownlist', editable: true },
					  { boolean: 'duplex', datafield: 'duplex', width: 80, columntype: 'dropdownlist', editable: true },
					  { boolean: 'skan_dwustr', datafield: 'skan_dwustr', width: 100, columntype: 'dropdownlist', editable: true },
					  { boolean: 'a3', datafield: 'a3', width: 80, columntype: 'dropdownlist', editable: true },
					  { float: 'cena drukarki', datafield: 'cena_drukarki', width: 120, cellsalign: 'right', cellsformat: 'f2',
						  validation: function (cell, value) {
							  	  if (value < 0 || value > 9999) {
								  return { result: false, message: "Maksymalna cena to 9999 PLN" };
							  }
						  return true;
						 },						  

					  }
					  
                  ]
            });

        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div style="float: left;" id="jqxgrid"></div>
    </div>
	<form method="post" action="import4.php">
    <div style="margin-top: 10px;">
        <input type="submit" value="Zbuduj i załduj bazę" />
    </div>
	</form>
</body>
</html>