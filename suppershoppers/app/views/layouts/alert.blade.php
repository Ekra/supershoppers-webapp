@if (Session::has('errors'))
             <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            <?php foreach ($errors->all() as $error): ?>
            <li>{{$error}}</li>
             <?php endforeach?>
            </div>
        @endif
        @if (Session::has('alert'))
            <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </div>
            {{Session::get('alert')}}
            @endif