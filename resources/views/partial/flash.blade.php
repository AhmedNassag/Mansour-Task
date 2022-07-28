@if (session('message'))
    <div class="text-center alert alert-dismissible alert-{{ session('alert-type') }} alert-styled-left alert-arrow-left" id="session-alert">
        <!-- <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button> -->
        {!! session('message') !!}
    </div>
@endif
