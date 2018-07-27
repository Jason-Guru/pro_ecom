<div class="row" style="border-top:1px solid lightgrey; border-bottom: 1px solid lightgrey; margin-bottom: 10px;">
<ul class="list-unstyled list-inline nav navbar-nav pl-65">
        @foreach($categories as $category)
            <li style="margin: 0px 30px 0px 30px; font-size:20px;">
                {{-- @if($category->children()->count() > 0)
                    @include('layouts.front.category-sub', ['subs' => $category->children])
                @else --}}
                    <a @if(request()->segment(2) == $category->slug) class="active" @endif href="{{route('front.category.slug', $category->slug)}}">{{$category->name}}</a>
                {{-- @endif --}}
            </li>
        @endforeach
    </ul>
</div>