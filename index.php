<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background-color: powderblue;
    width: 100%;
    height: 600px;
    display:flex;
    flex-direction:column;
    align-content:center;
    justify-content:space-between;
       
}

h1{
    color:red;

}
</style>

</head>
<body>

    <?php 
    $lorem="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit provident eius nostrum rem libero quam distinctio autem officiis vero deserunt minima quidem, facilis laborum ipsa quisquam est alias. Praesentium, numquam?"
    ?>


    <h1>
        <?php 
        echo $lorem
        ?>
        (
            <?php
        echo strlen($lorem)
        ?> 
        characters)
    </h1>

    <?php 
    $badword=$_GET["badword"]
        ?>

    <?php 
    $loremrep=str_replace($badword, "***", $lorem)
    ?>

    <h1>
        <?php echo $loremrep
        ?>
        (
            <?php
        echo strlen($loremrep)
        ?>
        characters)</h1>
</body>
</html>