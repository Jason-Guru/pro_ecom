@foreach($subs as $sub)
    <a href="{{ route('front.category.slug', $category->slug) }}"><p>{{ $category->name }}</p></a>
    <ul class="list-unstyled sidebar-category-sub">
        <li @if(request()->segment(2) == $sub->slug) class="active" @endif ><a href="{{ route('front.category.slug', $sub->slug) }}"><p>{{ $sub->name }}</p></a></li>
    </ul>
@endforeach