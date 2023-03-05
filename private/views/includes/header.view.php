<!DOCTYPE html>
<html lang="en">
    <?php 
    $URL = $_SERVER['REQUEST_URI'];
    $URL = explode('/', $URL);
    $projCat = new Projectcategory();
    $project = new Project();

    if(!empty($URL[1]) && empty($URL[2]) && empty($URL[3]))
    {
        $title = strtolower($URL[1]);
        $description = "The web 3.0 is a free download project";
    }
    else if(!empty($URL[1]) && !empty($URL[2]) && empty($URL[3]))
    {
        $title = strtolower($URL[2]);
        switch($title){
            case "source":
                $description = "Download projects";
            break;
            case "comming":
                $description = "Comming soon!";
            break;
            default:
                $description = "Tech website";
            break;
         }
    }
    else if(!empty($URL[1]) && !empty($URL[2]) && !empty($URL[3]))
    {
        $title = strtolower($URL[3]);
        $page =  strtolower($URL[2]);
        switch($page){
            case "source":
                $data = $projCat->where('projectcategorys_id',$title);
                $description = $data[0]->meta_description;
            break;
            case "code":
                $data = $project->where('projects_id',$title);
                $description = $data[0]->meta_description;
            break;
            default:
                $description = "Download free source code";
            break;
         }

        }

 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description; ?>">
    <title><?=$title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?= ASSETS ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/global.css">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style.css">
</head>
<body>

    
