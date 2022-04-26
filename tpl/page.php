<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">

<div class="bread-crumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{header}}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="company" data-wb-role="tree" data-wb-from="content"  data-wb-hide="wb">
    <div class="container">
        <div class="title-30 company__title">
            {{name}}
        </div>
        <div class="row">
            <div class="col-12">
                <div class="company__content">
					{{data.text}}
                </div>
            </div>
        </div>
    </div>
</div>



<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
</body>
</html>
