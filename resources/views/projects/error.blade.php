<div class="container">
    <small  class="text-danger">
        @if ($errors->has('newtask'))
            <span style="font-size: 16px">{{ $errors->first('newtask') }}</span>
        @endif
    </small>
</div>
