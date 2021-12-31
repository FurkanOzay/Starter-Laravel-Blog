@isset($categories)
<div class="col-md-4">
    <div class="card">
        <div class="card-header">Kategoriler</div>
    </div>
    <div class="list-group">
        @foreach($categories as $category)
            <a @if(Request::segment(2)!=$category->slug) href="{{route('category',$category->slug)}}" @endif
            class="list-group-item
            @if(Request::segment(2)==$category->slug) active @endif">
                {{$category->name}}
                <span class="badge text-success">{{ $category->articleCount() }}</span>
            </a>
        @endforeach
    </div>
</div>
@endif
