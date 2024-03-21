<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test</title>
    <link rel="stylesheet" type="text/css" href="./vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./vendor/table-php/table-creator/src/style.css">

</head>
<body>
    <div class="row p-2">
        <div class="col-7">
            <h2>Bootstrap table</h2>
            <?php
            require 'vendor/autoload.php';

            use YdcTableCreator\CreateTableBasic;
            use YdcTableCreator\CreateTableBootstrap;
            use YdcTableCreator\TableCreator;
            use YdcTableCreator\TableData;

            $tableDataOne = new TableData(['Name', 'Age', 'Country'], [
                ['John', 25, 'USA'],
                ['Anna', 30, 'Ukraine'],
                ['Mark', 22, 'UK'],
            ], 1);

            $creator = new TableCreator(new CreateTableBootstrap);
            $creator->create($tableDataOne);

            ?>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-7">
            <h2>Basic table</h2>
            <?php
            require 'vendor/autoload.php';


            $tableDataSecond = new TableData(['Name', 'Age', 'Country', 'Testing', 'Age', 'Country', 'Testing'], [
                ['John', 25, 'USA', 'Test', 25, 'USA', 'Test'],
                ['Anna', 30, '', 'Data', 25, 'USA', 'Test'],
                ['Mark', 22, 'UK', '', 25, 'USA', 'Test'],
            ], 1);
            $creatorBasic = new TableCreator(new CreateTableBasic);
            $creatorBasic->create($tableDataSecond);
            ?>
        </div>
    </div>

    <script src="vendor/table-php"></script>
</body>
</html>

