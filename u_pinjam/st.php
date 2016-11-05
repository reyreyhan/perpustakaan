<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "go.php";
?>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bot/strap.css" rel="stylesheet">
    <style type="text/css">
        .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

    </style>
    <script src="jq/jq1.js"></script>
    <script src="jq/jq2.js"></script>
</head>
<body>
<div class="container">
     <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Silahkan Datang ke Admin Untuk Konfirmasi</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter" ><span></span> Cari</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
						<th><input type="text" class="form-control" placeholder="Nama Peminjam" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Judul Buku" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tanggal Pinjam" disabled></th>
                    </tr>
                </thead>
                <tbody>
							<?php
								//$ndelok = "SELECT * FROM data_buku ORDER BY CODE ASC";

								$ndelok = "
								SELECT anggota.NAMA, konfirmasi.JUDUL, konfirmasi.TGL
								FROM konfirmasi
								INNER JOIN anggota
								ON konfirmasi.NIS=anggota.NIS
								";
								$queryndelok = mysql_query($ndelok);					
								while($dadi = mysql_fetch_array($queryndelok))
								
							//	$F = $_GET['CODE'];
							//	$ndelok = "SELECT * FROM data_buku WHERE `pinjam` . `CODE` = '$F'";
							//	$queryndelok = mysql_query($ndelok);
							//	while($dadi = mysql_fetch_array($queryndelok))
														
								{
							?>
                    <tr>
                        <td><?php echo $dadi['NAMA']; ?></td>
                        <td><?php echo $dadi['JUDUL']; ?></td>
                        <td><?php echo $dadi['TGL']; ?></td>
                    </tr>
							<?php
								}
							?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
</body>
</html>
