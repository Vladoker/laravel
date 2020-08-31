<ul>
    @foreach($items as $menu_item)
        <li class="menu-item menu-item-has-children">
            <a href="{{ asset( $menu_item->link() ) }}">
                {{ $menu_item->title }}
                @foreach($menu_item->children as $child)
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ asset( $child->link() ) }}">
                                {{ $child->title }}
                            </a>
                        </li>
                    </ul>
                @endforeach
            </a>
        </li>
    @endforeach
</ul>

{{--<ul class="mega-menu">--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-3">--}}
{{--            <li class="mega-item">--}}
{{--                <a href="#">Trending Posts</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="index-2.html">Home 01</a></li>--}}
{{--                    <li><a href="index_2.html">Home 02</a></li>--}}
{{--                    <li><a href="index_3.html">Home 03</a></li>--}}
{{--                    <li><a href="index_4.html">Home 04</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3">--}}
{{--            <li class="mega-item">--}}
{{--                <a href="#">Latest Recipes</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="index-2.html">Home 01</a></li>--}}
{{--                    <li><a href="index_2.html">Home 02</a></li>--}}
{{--                    <li><a href="index_3.html">Home 03</a></li>--}}
{{--                    <li><a href="index_4.html">Home 04</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3">--}}
{{--            <li class="mega-item">--}}
{{--                <a href="#">Trending Posts</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="index-2.html">Home 01</a></li>--}}
{{--                    <li><a href="index_2.html">Home 02</a></li>--}}
{{--                    <li><a href="index_3.html">Home 03</a></li>--}}
{{--                    <li><a href="index_4.html">Home 04</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3">--}}
{{--            <li class="mega-item">--}}
{{--                <a href="#">Latest Recipes</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="index-2.html">Home 01</a></li>--}}
{{--                    <li><a href="index_2.html">Home 02</a></li>--}}
{{--                    <li><a href="index_3.html">Home 03</a></li>--}}
{{--                    <li><a href="index_4.html">Home 04</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</ul>--}}
