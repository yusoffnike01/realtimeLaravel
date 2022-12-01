@extends('layouts.app')
@push('styles')
<style type="text/css">
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Game') }}</div>

                <div class="card-body">
            <div class="text-center">
              <img id="circle" class="" src="{{{{asset('img/circle.png')}}}}" height="250" width="250"
               alt="">
          <p id='winner' class="display-1 d-none text-primary"></p>
              </div>
              <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>

 
</script>
<script>
    
 
</script>
@endpush