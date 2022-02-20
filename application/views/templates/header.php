<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMITHY | <?=$title ?? ''?></title>
    <!-- <link rel="stylesheet" href=<?//=base_url('assets/css/web.css')?> > -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url("assets/images/logo.png")?>" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?=base_url()?>products/swords">Swords</a></li>
                            <li><a class="dropdown-item" href="<?=base_url()?>products/shields">Sheilds</a></li>
                            <li><a class="dropdown-item" href="<?=base_url()?>products/armor">Armor</a></li>
                        </ul>
                    </li>
                        <a class="nav-link" href="<?=base_url()?>about">About Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">


  <!-- <img src="assets/images/logo.png" alt="" style="width: 500;"> -->

  