<section class="reviews" id="reviews" data-role="anchor-section">
    <div class="container">
        <div class="reviews__area">
            <div class="reviews__box">
                <h2 class="reviews__title title">Отзывы</h2>
                <div class="reviews__image">
                    <svg class="image">
                        <use xlink:href="#yandex-mark"></use>
                    </svg>
                </div>
                <a href="//yandex.ru/maps/org/1510312821/reviews?utm_source=badge&utm_medium=rating&utm_campaign=v1" class="reviews__rate-link" target="_blank">
                    <img src="<?php echo $GLOBALS["STATIC_IMG_PATH"]?>/reviews/reviews-rate.png" alt="" class="reviews__rate">
                </a>
            </div>
            <div class="reviews__wrap">
                <div class="reviews__slider">
                    <?php $reviews_list = get_posts( array( 'category_name' => 'reviews', 'numberposts' => 10, ) ); ?>
                    <?php foreach ($reviews_list as $key => $item): ?>
                        <?php $review = get_field('review', $item->ID) ?>
                        <?php $video = $review['video'] ?>
                        <div class="reviews__slide <?php echo $video ? 'reviews__slide_video' : 'reviews__slide_text'?>">
                            <div class="reviews__count">
                                <span class="reviews__count-current"><?php echo $key + 1 ?></span> из
                                <span class="reviews__count-all" data-element="reviews__count-all"></span>
                            </div>
                            <?php if ($video): ?>
                                <div class="reviews__inner">
                                    <div class="reviews__video-box">
                                        <a href="#modal-video-<?php echo $key?>" class="reviews__video-container" data-fancybox data-element="review-video-container">
                                            <img src="<?php echo $review['video_placeholder'] ?>" class="reviews__video">
                                        </a>
                                        <div class="reviews__span reviews__span_name"><?php echo $review['author'] ?></div>
                                        <div class="reviews__span reviews__span_grey"><?php echo $review['note'] ?></div>
                                    </div>
                                    <p class="reviews__text">
                                        <?php echo $review['text'] ?>
                                    </p>
                                </div>
                                <div class="modal-video" id="modal-video-<?php echo $key?>">
                                    <iframe class="modal-video__video" src="<?php echo $review['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <p class="reviews__text">
                                    <?php echo $review['text'] ?>
                                </p>
                                <div class="reviews__author">
                                    <img src="<?php echo $review['avatar'] ?>" alt="" class="reviews__author-image">
                                    <div class="reviews__span reviews__span_name"><?php echo $review['author'] ?></div>
                                    <div class="reviews__span reviews__span_grey"><?php echo $review['note'] ?></div>
                                </div>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="reviews__nav slick-nav">
                    <div class="reviews__nav-btn reviews__nav-btn_left slick-nav-btn slick-nav-btn_left">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.5H28M28 15.5L15.1053 2M28 15.5L15.1053 29" stroke="#111519" stroke-width="3" />
                        </svg>
                    </div>
                    <div class="reviews__nav-btn reviews__nav-btn_right slick-nav-btn slick-nav-btn_right">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.5H28M28 15.5L15.1053 2M28 15.5L15.1053 29" stroke="#111519" stroke-width="3" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>