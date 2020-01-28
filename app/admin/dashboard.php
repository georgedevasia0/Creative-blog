<?php 
    include("../../path.php");
    include(ROOT_PATH . "/app/controllers/categories.php");
    include(ROOT_PATH . "/app/controllers/checkUsers.php");
    adminOnly();
    $posts = getPublishedUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet" />
    <link href="../../assets/dashboard.css" rel="stylesheet" />
    <title>Creative Blog - Dashboard</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/components/navbar_dashboard.php") ?>
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 style="font-weight: bold">Dashboard</h1>
                </div>
                <?php include(ROOT_PATH . "/app/components/message_handler.php") ?>
                <div class="d-flex mb-5 mt-5">
                    <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1532153955177-f59af40d6472?ixlib=rb-1.2.1&auto=format&fit=crop&w=1234&q=80); height: 255px; width: 25%; border-radius: 10px">
                        <div class="p-4">
                            <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[0]["name"]; ?></h1>
                        </div>
                    </div>
                    <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: center">
                        <div class="p-4">
                            <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[1]["name"]; ?></h1>
                        </div>
                    </div>
                    <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: center">
                        <div class="p-4">
                            <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[2]["name"]; ?></h1>
                        </div>
                    </div>
                    <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: left">
                        <div class="p-4">
                            <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[3]["name"]; ?></h1>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 105px">
                    <h3 style="color: #010116; font-weight: bold"><u style="text-decoration-color: #3941FF">Recent articles</u></h3>
                    <?php foreach ($posts as $post): ?>
                    <a href="article.php?id=<?php echo $post["id"]; ?>" style="text-decoration: none">
                        <div class="d-flex whiteCard hoverCard mt-3 mb-3 align-items-center">
                            <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?>" style="height: 180px; border-radius: 6px" />
                            <div>
                            </div>
                            <div class="ml-3">
                                <h5 style="font-weight: bold; color: #010116"><?php echo $post["title"]; ?></h5>
                                <span style="color: #8887B7"><?php echo mb_substr($post["body"], 0, 150) . "..."; ?></span><br />
                                <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $post["user_name"]; ?> - <?php echo date("F j, Y", strtotime($post["created_at"])); ?></p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</body>

</html>