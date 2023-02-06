<div class="search justify-content-center fixed-top">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false">DEFINITIONS
                    </button>
                    {{--<div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>--}}
                </div>

                <input type="text" name="word" class="form-control" placeholder="" aria-label=""
                       aria-describedby="button-addon2" id="word">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="searchForTheWord"><i
                            class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@push('scripts')
    <script type="application/javascript">

        var launch = document.getElementById('searchForTheWord');
        var inputData = document.getElementById('word');
        launch.onclick = function () {
            window.location.href = "{{config('app_url')}}/" + inputData.value + "/meaning";

        };

    </script>


@endpush
