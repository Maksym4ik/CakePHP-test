<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->Html->css(['normalize.min', 'cake']) ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Admin panel</title>
    <style>
        .row div{
            overflow: hidden;
        }
        .users button{
            width: 200px;
            height: 40px;
            background-color: white;
            border:1px solid green;
            outline: none;
            border-radius: 10px;
            margin-top: 10px;
        }
        .form-user input{
            text-align: center;
            margin-top: 5px;
            width: 200px;
            display: block;
            border:1px solid gray;
            outline: none;
        }
        .form-user .submit input, .form-user a{
            color: #292929;
            text-align: center;
            text-decoration: none;
            width: 200px;
            height: 30px;
            background-color: white;
            border:1px solid green;
            outline: none;
            border-radius: 10px;
            margin-top: 10px;

        }
        .form-user label{
            width: 200px;
            text-align: center;
            color: gray;
            margin: 0;
        }
        .Active{
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #63d34d;
        }
        .Offline{
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #d35442;
        }

    </style>
</head>
<body>

<?=$this->element('header')?>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

</body>
</html>

