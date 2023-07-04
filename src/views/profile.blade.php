
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(isset($userList) && !empty($userList))
                        @foreach($userList as $list)
                           {{$list['name']}}
                        @endforeach
                    @endif

                    {{ __(' hey how are you!') }}
                </div>
            </div>
        </div>
    </div>
</div>

