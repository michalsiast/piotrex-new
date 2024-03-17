<section class="page-title" style="background-image: url({{asset('images/page-title-bg.png')}})">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{!! $pageName !!}</h1>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">
                                <i class="bi bi-house-door me-1"></i>Strona główna </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{!! $pageName !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
