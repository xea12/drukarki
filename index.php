<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Drukarki</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.classic.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var data = {};
            var theme = 'classic';
            var firstNames = ["Nancy", "Andrew", "Janet", "Margaret", "Steven", "Michael", "Robert", "Laura", "Anne"];
            var lastNames = ["Davolio", "Fuller", "Leverling", "Peacock", "Buchanan", "Suyama", "King", "Callahan", "Dodsworth"];
            var titles = ["Sales Representative", "Vice President, Sales", "Sales Representative", "Sales Representative", "Sales Manager", "Sales Representative", "Sales Representative", "Inside Sales Coordinator", "Sales Representative"];
            var address = ["507 - 20th Ave. E. Apt. 2A", "908 W. Capital Way", "722 Moss Bay Blvd.", "4110 Old Redmond Rd.", "14 Garrett Hill", "Coventry House", "Miner Rd.", "Edgeham Hollow", "Winchester Way", "4726 - 11th Ave. N.E.", "7 Houndstooth Rd."];
            var city = ["Seattle", "Tacoma", "Kirkland", "Redmond", "London", "London", "London", "Seattle", "London"];
            var country = ["USA", "USA", "USA", "USA", "UK", "UK", "UK", "USA", "UK"];
            var generaterow = function (id) {
                var row = {};
                var firtnameindex = Math.floor(Math.random() * firstNames.length);
                var lastnameindex = Math.floor(Math.random() * lastNames.length);
                var k = firtnameindex;
                row["id"] = id;
                row["rodzaj"] = firstNames[firtnameindex];
                row["Model"] = lastNames[lastnameindex];
                row["uwagi"] = titles[k];
                row["WiFi"] = address[k];
                row["LAN"] = city[k];
                row["FAX"] = country[k];
                row["NFC"] = row["FirstName"] + ' Washington';
				row["ADF"] = country[k];
				row["duplex"] = country[k];
				row["Skan_Dwustr"] = country[k];
				row["A3"] = country[k];
				row["cena_drukarki"] = country[k];
                return row;
            }
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
                ],
                id: 'id',
                url: 'data.php',
                addrow: function (rowid, rowdata, position, commit) {
                    // synchronize with the server - send insert command
                    var data = "insert=true&" + $.param(rowdata);
                    $.ajax({
                        dataType: 'json',
                        url: 'data.php',
                        data: data,
                        cache: false,
                        success: function (data, status, xhr) {
                            // insert command is executed.
                            commit(true);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            commit(false);
                        }
                    });
                },
                deleterow: function (rowid, commit) {
                    // synchronize with the server - send delete command
                    var data = "delete=true&" + $.param({ EmployeeID: rowid });
                    $.ajax({
                        dataType: 'json',
                        url: 'data.php',
                        cache: false,
                        data: data,
                        success: function (data, status, xhr) {
                            // delete command is executed.
                            commit(true);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            commit(false);
                        }
                    });
                },
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
                width: 500,
                height: 350,
                source: dataAdapter,
                theme: theme,
                columns: [
                      { text: 'id', datafield: 'id', cellsformat: 'd', width: 15 },
                      { text: 'rodzaj', datafield: 'rodzaj', width: 200 },
                      { text: 'Model', datafield: 'Model', width: 180 },
                      { text: 'uwagi', datafield: 'uwagi', width: 100 },
                      { text: 'WiFi', datafield: 'WiFi', width: 50 },
					  { text: 'LAN', datafield: 'LAN', width: 50 },
					  { text: 'FAX', datafield: 'FAX', width: 50 },
					  { text: 'NFC', datafield: 'NFC', width: 50 },
					  { text: 'ADF', datafield: 'ADF', width: 50 },
					  { text: 'duplex', datafield: 'duplex', width: 50 },
					  { text: 'Skan_Dwustr', datafield: 'Skan_Dwustr', width: 50 },
					  { text: 'A3', datafield: 'A3', width: 50 },
					  { text: 'cena_drukarki', datafield: 'cena_drukarki', width: 80 }
                  ]
            });
            $("#addrowbutton").jqxButton({ theme: theme });
            $("#deleterowbutton").jqxButton({ theme: theme });
            $("#updaterowbutton").jqxButton({ theme: theme });
            // update row.
            $("#updaterowbutton").bind('click', function () {
                var datarow = generaterow();
                var selectedrowindex = $("#jqxgrid").jqxGrid('getselectedrowindex');
                var rowscount = $("#jqxgrid").jqxGrid('getdatainformation').rowscount;
                if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                    var id = $("#jqxgrid").jqxGrid('getrowid', selectedrowindex);
                    $("#jqxgrid").jqxGrid('updaterow', id, datarow);
                }
            });
            // create new row.
            $("#addrowbutton").bind('click', function () {
                var rowscount = $("#jqxgrid").jqxGrid('getdatainformation').rowscount;
                var datarow = generaterow(rowscount + 1);
                $("#jqxgrid").jqxGrid('addrow', null, datarow);
            });
            // delete row.
            $("#deleterowbutton").bind('click', function () {
                var selectedrowindex = $("#jqxgrid").jqxGrid('getselectedrowindex');
                var rowscount = $("#jqxgrid").jqxGrid('getdatainformation').rowscount;
                if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                    var id = $("#jqxgrid").jqxGrid('getrowid', selectedrowindex);
                    $("#jqxgrid").jqxGrid('deleterow', id);
                }
            });
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
        <div style="float: left;" id="jqxgrid">
        </div>
        <div style="margin-left: 30px; float: left;">
            <div>
                <input id="addrowbutton" type="button" value="Add New Row" />
            </div>
            <div style="margin-top: 10px;">
                <input id="deleterowbutton" type="button" value="Delete Selected Row" />
            </div>
            <div style="margin-top: 10px;">
                <input id="updaterowbutton" type="button" value="Update Selected Row" />
            </div>
        </div>
    </div>
</body>
</html>