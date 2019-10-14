<div id="alert_container">
    @if(Session::has("success"))
    <div class="alert alert-success" id="alert_success">
        {{ Session::get('success') }}
        @if(Session::has("undo_url"))
        <a href="{{ Session::get('undo_url')}}" class="btn btn-link font-weight-bold">UNDO</a>
        @endif
    </div>
    @elseif(Session::has("error"))
    <div class="alert alert-danger" id="alert_error">
        {{ Session::get('error') }}
    </div>
    @endif
</div>
