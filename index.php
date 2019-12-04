<?php
$x = $_GET["x"];
$y = $_GET["y"];
?>
<html>
<body>
<table>
    <?php for ($u = 0; $u < 11; $u++) { ?>

        <tr>
            <?php for ($i = 0; $i < 11; $i++) { ?>
                <td>
                    <a href="index.php?x=<?php echo $u ?>&y=<?php echo $i ?>">
                        <?php if ($u == $x && $i == $y): ?>
                            <img src="Unbenannt.PNG" style="width: 50px; height: 50px;">
                        <?php else: ?>
                            <?php if ($u == $x + 1 && $i == $y + 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x - 1 && $i == $y + 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x - 1 && $i == $y - 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x + 1 && $i == $y - 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x - 1 && $i == $y): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x + 1 && $i == $y): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x && $i == $y - 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php elseif ($u == $x && $i == $y + 1): ?>
                                <img src="Grüne.png" style="width: 50px; height: 50px;">
                            <?php else: ?>
                                <img src="Download.png" style="width: 50px; height: 50px;">
                            <?php endif ?>
                        <?php endif ?>
                    </a>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

</body>
</html>