<section class="olima_instagram instagram_v1">
    <div class="container-full">
        <div class="instagram_wrap">
            <div class="instagram_slide_v1">
               @foreach($footerImages as $image)
                <div class="gird_item">
                    <div class="post_img">

                            <img src="{{ Voyager::image($image->image) }}" class="img-fluid" alt="">

                    </div>
                </div>
                @endforeach

            </div>
            <div class="insta_wrap_box">
                <div class="insta_content">
                    <h4>{{ setting('footer.slider_title') }}</h4>
                    <a href="{{ setting('footer.slider_link') }}" target="_blank">{{ setting('footer.link_title') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
