<?php
    include("../../../path.php");
    include(ROOT_PATH . "/app/controllers/users.php");
    include(ROOT_PATH . "/app/controllers/checkUsers.php");
    adminOnly();
    // displayContent($admin_users)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet" />
    <link href="../../../assets/dashboard.css" rel="stylesheet" />
    <title>Creative Blog - Users section</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/components/navbar_dashboard.php") ?>
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 style="font-weight: bold">Users section</h1>
                </div>
                <a href="<?php echo BASE_URL . "app/admin/users/create_users.php" ?>" style="text-decoration: none">
                    <button class="btn mr-2"
                        style="background-color: #006cff; color: white; padding: 15px; font-weight: bold; margin-top: 15px; border-radius: 5px">
                        <i class='uil uil-user-plus' style="font-weight: bold"></i> Create administrator user
                    </button>
                </a>
                <a href="<?php echo BASE_URL . "app/admin/users/users.php" ?>" style="text-decoration: none">
                    <button class="btn"
                        style="background-color: white; color: black; padding: 15px; font-weight: bold; margin-top: 15px">
                        See all the administrator users
                    </button>
                </a>
                <a href="<?php echo BASE_URL . "app/admin/users/normal_users.php" ?>" style="text-decoration: none">
                    <button class="btn"
                        style="background-color: white; color: black; padding: 15px; font-weight: bold; margin-top: 15px">
                        See all the users
                    </button>
                </a>
                <?php include(ROOT_PATH . "/app/components/message_handler.php") ?>
                <div class="mt-5 align-items-center">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($admin_users as $key => $user): ?>
                            <?php if ($user["admin"] == 0): ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1; ?></th>
                                <td><?php echo $user["user_name"] ?></td>
                                <td><?php echo $user["email"] ?></td>
                                <td>
                                    <a href="edit_users.php?id=<?php echo $user["id"] ?>" style="text-decoration: none">
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                            data-placement="top" title="Edit">
                                            <i class="uil uil-edit"
                                                style="font-size: 25px; cursor: pointer; color: #4caf50"></i>
                                        </button>
                                    </a>
                                    <a href="users.php?delete_id=<?php echo $user["id"] ?>"
                                        style="text-decoration: none">
                                        <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                            data-placement="top" title="Delete">
                                            <i class="uil uil-trash-alt"
                                                style="font-size: 25px; cursor: pointer; color: #e53935"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
</body>

</html>
