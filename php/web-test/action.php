<h1>
    あなたは
    <?php
    echo htmlspecialchars($_POST['name']);
    ?>
</h1>
<p>
    あなたの年齢は
    <?php
    echo (int) $_POST['age'];
    ?>
</p>