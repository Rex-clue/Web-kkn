<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .breadcrumb {
      padding: 16px 0px;
      list-style: none;
      background-color: #eee;
      margin-top: 100px;
    }

    .breadcrumb li {
      display: inline;
      font-family: "Open Sans", Sans-serif;
      font-size: 14px;
      letter-spacing: 2px;
      font-weight: bold;
      margin-left: 30px;
    }

    .breadcrumb li+li:before {
      padding: 8px;
      color: black;
      content: "|\00a0";
    }

    .breadcrumb li a {
      color: orange;
      font-family: "Open Sans", Sans-serif;
      letter-spacing: 2px;
      text-decoration: none;
    }

    .breadcrumb li a:hover {
      color: orange;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="bread-crumbs">
    <ul class="breadcrumb">
      <li><a href="../index.php">Home</a></li>
      <li><a href="profil2.php">Profile</a></li>
      <li>Sejarah Desa</li>
    </ul>
  </div>
</body>

</html>