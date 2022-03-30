<div class="search justify-content-center fixed-top">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('search')}}" method="post">
                @csrf
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
                           aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
