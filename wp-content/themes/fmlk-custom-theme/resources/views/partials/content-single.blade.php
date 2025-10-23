<article @php(post_class('h-entry'))>

  <div class="e-content my-20">
    @php(the_content())
  </div>

  @if ($pagination())
    <div>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </div>
  @endif

</article>
