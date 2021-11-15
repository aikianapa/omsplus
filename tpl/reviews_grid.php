<!doctype html>
<html lang="en">
<head>
<meta data-wb-role="include" src="template" data-wb-name="head.inc.php">
</head>
<body>

<meta data-wb-role="include" src="template" data-wb-name="header.inc.php">
<meta data-wb-selector="title" data-wb-html="Отзывы пациентов">
<div class="bread-crumbs">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Отзывы пациентов</li>
            </ol>
        </nav>
    </div>
</div>

<div class="reviews">
    <div class="container">
        <div class="reviews__title title-30">
            Отзывы наших пациентов
        </div>
        <div class="review-form">
            <div class="review-form__btn-wrap">
                <button class="button button--red" type="button" data-toggle="collapse" data-target="#review-form"
                        aria-expanded="false" aria-controls="review-form">
                    Оставить отзыв
                </button>
            </div>

            <div class="review-form__collapse collapse" id="review-form">
                <div data-wb-where='"{{_sess.user_role}}"="user"' data-wb-hide="*">
                <div class="review-form__title">Оставить отзыв</div>
                <form class="review-form__form form-white form-white--gray" id="addReview" data-wb-form="comments" data-wb-item="{{_env.new_id}}">
                    <div class="form-body">
                    <input type="hidden" name="active" value="">
                    <input type="hidden" name="user_id" value="{{_sess.user_id}}">
                    <input type="hidden" name="email" value="{{_sess.user.email}}">

                    <div class="row">    
                        <div class="col-sm-3">
                            <label for="radioMale">
                                <input type="radio" name="gender" id="radioMale" value="male" checked>
                                <img src="build/img/avamale.png" width="40" height="40">
                            </label>
                            <label for="radioFemale">
                                <input type="radio" name="gender" id="radioFemale" value="female" >
                                <img src="build/img/avafemale.png" width="40" height="40">
                            </label>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-form__rating">
                                <div class="comments-rating">
                                    <input type="hidden" class="rating" name="rating" data-fractions="2">
                                </div>
                                <div class="review-form__rating-title">Ваша оценка</div>
                            </div>
                        </div>
                    </div>
                    <div class="input form-white__input">
                        <input class="input__field" type="text" name="name" id="review-title" value="{{_sess.user.fullname}}" readonly />
                        <label class="input__label" for="review-title">
                            <span class="input__label-content">Ваше имя</span>
                        </label>
                    </div>
                    <div class="input form-white__input">
                        <textarea class="input__field" id="review-text" name="text" cols="30" rows="auto"></textarea>
                        <label class="input__label" for="review-text">
                            <span class="input__label-content1">Текст отзыва</span>
                        </label>
                    </div>
                    <div class="text-right mt-4 pt-1">
                        <span class="button button--outline button-mobile-block" data-wb-formsave="#addReview">Опубликовать</span>
                    </div>
                    </div>
                    <div class="form-success d-none alert alert-success">
                        Ваш отзыв был упешно добавлен и будет опубликован после проверки модератором.
                    </div>
                </form>
                </div>
                <div data-wb-where='"{{_sess.user_role}}"!="user"' data-wb-hide="wb" class="alert alert-info">
                    <p>
                        <br><i class="fa fa-info"></i> Чтобы оставить отзыв о нашем сервисе, необходимо войти в <a href="/lk/" data-toggle="modal" data-target="#modal-login" rel="nofollow">Личный кабинет</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="reviews__wrap" data-wb-role="foreach" data-wb-table="comments" data-wb-size="10" data-wb-sort="date:d" data-wb-where='active = "on"'>
            <div class="reviews__item">
                <div class="review">
                    <div class="review__head">
                            <img data-wb-role="formdata" src='{{ commentsInfo("avatar", {{id}} ) }}' class="review__photo">
                            <div class="review__name">
                                {{name}}
                            </div>
                            <div class="review__rating rating-block">
                                <div data-rating="{{rating}}" class="star-only rating-block__stars rating-star"></div>
                            </div>
                    </div>
                    <div class="review__body">
                        <!--div class="review__title"></div-->
                        <p class="review__text">
                            {{text}}
                        </p>
                    </div>
                    <div class="row">
                        <div class="review__left col-auto">
                            <div class="review__icon review__date">
                                {{date("M d. Y",strtotime({{date}}))}}
                            </div>
                        </div>
                        <div class="review__right col">
							<!--
                            <div class="review__icon review__like">
                                30
                            </div>
                            <div class="review__icon review__dislike">
                                0
                            </div>
                            -->
                            <div class="review__icon review__comm-link" data-toggle="collapse" data-target="#review-comments-1"
                                 aria-expanded="false" aria-controls="review-comments-1" data-wb-where='reply > ""'>
                                1 ответ
                            </div>
                            <div class="review__icon review__comm-link"
                                 aria-expanded="false" aria-controls="review-comments-1" data-wb-where='reply = ""'>
                                0 ответов
                            </div>
                        </div>
                    </div>
                    <div class="review__comments">
                        <div class="collapse" id="review-comments-1">
                            <div class="review__comment-item review">
                                <div class="review__head">
                                    <img src="build/img/jpg/review-face.jpg" class="review__photo">
                                    <div class="review__name">
                                        ОМС Плюс
                                    </div>
                                    <div class="review__rating rating-block"></div>
                                </div>
                                <div class="review__body">
                                    <!--div class="review__title"></div-->
                                    <p class="review__text">
                                        {{reply}}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="review__left col-auto">
                                        <div class="review__icon review__date">
                                            {{date("M d. Y",strtotime({{date}}))}}
                                        </div>
                                    </div>
                                    <!--div class="review__right col">
                                        <div class="review__icon review__like">
                                            30
                                        </div>
                                        <div class="review__icon review__dislike">
                                            0
                                        </div>
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<meta data-wb-role="include" src="template" data-wb-name="footer.inc.php">
    <style>
        

.review-form__form [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
.review-form__form [type=radio] + img {
  opacity: 0.5;
  cursor: pointer;
}

.review-form__form [type=radio]:checked + img {
  opacity: 1;
  border: 2px solid #ec231a;
  border-radius: 50%;
}
        
    </style>
    
</body>
</html>
