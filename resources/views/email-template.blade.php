<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            
                        </div>
                    @endif
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
</div>