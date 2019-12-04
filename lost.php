<html>
<body>

<?php
public function Game(){
    <img src="player.PNG" style="width: 50px; height: 50px;">
            <?php else: ?>
            <a href="index.php?x=<?php echo $u ?>&y=<?php echo $i ?>">
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
            </a>
            <img src="gray.png" style="width: 50px; height: 50px;">
        <?php endif ?>
        <?php endif ?>
}
?>
</body>
</html>
