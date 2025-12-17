<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?? 'Dashboard'; ?></title>

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <?= $this->include('partials/sidebar'); ?> <!-- Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?= $this->include('partials/topbar'); ?> <!-- Topbar -->
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>

                </div>

            </div>
        </div>

    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>