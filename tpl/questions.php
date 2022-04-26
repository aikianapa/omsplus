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

<div class="faq">
    <div class="container" data-wb-role="tree" data-wb-from="content" data-wb-branch="faq" data-wb-children="false" data-wb-hide="wb">
        <div class="faq__title title-30">
            {{name}}
        </div>
        <div class="faq__row row">
            <div class="col-lg-8">
                <div class="faq__accordion accordion" id="accordion-faq"  data-wb-role="foreach" data-wb-from="children">
                    <div class="card">
                        <div class="card-header" id="heading-faq-{{_idx}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-faq-{{_idx}}" aria-expanded="true" aria-controls="collapse-faq-{{_idx}}">
                                    {{name}}
                                </button>
                            </h5>
                        </div>
						<!--meta data-wb-role="variable" var="show" data-wb-if='_ndx="1"' value="show" else=""-->
                        <div id="collapse-faq-{{_idx}}" class="collapse {{_var.show}}" aria-labelledby="heading-faq-{{_idx}}" data-parent="#accordion-faq">
                            <div class="card-body">
                                {{data.text}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-4">
                <div class="faq__bg"></div>
            </div>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">

</body>
</html>
