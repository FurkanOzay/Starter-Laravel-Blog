@if(count($articles)>0)
@foreach($articles as $article)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="{{route('single', [$article->getCategory->slug,$article->slug]  )}}">
            <h2 class="post-title">{{ $article->title }}</h2>
        </a>
        <img class="img-fluid" src="{{ $article->image }}" alt="Resim">
        <p class="post-subtitle">{{ Str::words($article->content, 10) }}</p>
        <p class="post-meta">
            Kategori: <a href="#!">{{ $article->getCategory->name }}</a>
            <span class="float-end">{{ $article->created_at->diffForHumans() }}</span>
        </p>
    </div>
    @if(!$loop->last)
        <hr class="my-4"/>
    @endif
@endforeach
{{ $articles->links() }}
@else
    <div class="alert alert-danger">
        <h2>Bu kategoriye ait yazı bulunamadı...</h2>
    </div>
@endif

