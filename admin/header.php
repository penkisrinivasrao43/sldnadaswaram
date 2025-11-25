<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Add Gallery </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../media/images/images/SLD-LOGO.png" id="fav-icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="icons/mdi-font/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
        {};
        var themeName = themeSettings.themeName || '';
        if (themeName)
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        }
        else
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
        }
    </script>
</head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <?php include "topbar.php"; ?>
                <?php include "sidebar.php"; ?>