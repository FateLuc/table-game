<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<p>Click on each td element to alert its position in the table row.</p>

<table>
    <tr>
        <td onclick="myFunction(this)">Click to show cellIndex</td>
        <td onclick="myFunction(this)">Click to show cellIndex</td>
        <td onclick="myFunction(this)">Click to show cellIndex</td>
        <td onclick="myFunction(this)">Click to show cellIndex</td>
    </tr>
</table>

<script>
    function myFunction(x) {
        <?php $koordinate = x.cellIndex ?>
        alert("Cell index is: " + $koordinate);

    }
</script>

</body>
</html>
