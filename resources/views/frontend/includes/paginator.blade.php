@if ($paginator->hasPages())
    {{-- <ul class="pager">
       
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul> --}}
    <div class="col-lg-8">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if ($paginator->onFirstPage())
                <li class="page-item"><a class="page-link" href="#"><i class="arrow_carrot-left"></i> Previous</a></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="arrow_carrot-left"></i> Previous</a></li>
                @endif

                @foreach ($elements as $element)
           
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif


                
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active my-active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">21</a></li> --}}
                @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next <i class="arrow_carrot-right"></i></a></li>
                @else
                <li class="page-item"><a class="page-link" href="#">Next <i class="arrow_carrot-right"></i></a></li>
                @endif
            </ul>
        </nav>
    </div>
@endif 