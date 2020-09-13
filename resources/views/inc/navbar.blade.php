<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{url('/images/logo_nubtk.png')}}" width="300px" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Admission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admission Process</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Admin Panel</a>
                </li>
            </ul>
        </div>
    </div>
</nav> 