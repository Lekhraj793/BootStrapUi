<html>
<head>
<title>Data Table</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.min.js" ></script>

  <!--Data table cdn links-->
    <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <script>$(document).ready(function() {
                  $('#example').DataTable();
              } );</script>

</head>
<body>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>SKU</th>
                <th>Variant Count</th>
                <th>Inventory Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

          <?php foreach ($value as $val) {?>
            <tr>
                <td><?php echo htmlentities($val['id']);?></td>
                <td><?php echo htmlentities($val['sku']);?></td>
                <td><?php echo htmlentities($val['variant_id']);?></td>
                <td><?php echo htmlentities($val['inventory_quantity']);?></td>
                <td><a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          <?php } ?>

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
            </tr>
        </tfoot>
    </table>
</body>
<html>
