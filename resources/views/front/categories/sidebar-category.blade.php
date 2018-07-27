<ul class="nav sidebar-menu">
    @foreach($categories as $category)
        @if($category->children()->count() > 0)
            <li>@include('layouts.front.category-sidebar-sub', ['subs' => $category->children])</li>
        @else
            <li @if(request()->segment(2) == $category->slug) class="active" @endif><a href="{{ route('front.category.slug', $category->slug) }}"><p>{{ $category->name }}</p></a></li>
        @endif
    @endforeach
    <li>
        <button class="btn" style="background-color: #FF6905; color:white; width:100%; margin: 1.25rem 0"><strong>Request Custom Order</strong></button>
    </li>
    <li>
        <button class="btn btn-default" style="width:100%; margin-bottom: 1.50rem;">Contact Support</button>
    </li>
    <li>
        <div style="border-bottom: 1px solid lightgray; border-top: 1px solid lightgray; padding:1.25rem 0;">
            <p>1324 Sales</p>
            <p>527 Admirers</p>
        </div>
        <div style="padding:1.25rem 0;">
            <p>Report</p>
        </div>
    </li>
</ul>