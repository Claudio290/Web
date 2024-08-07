<div class="col-12 col-md-6 col-lg-4 align-items-stretch">
    <div class="card">
        <div class="card-body flex-column justify-content-between">
            <h5 class="card-title">{{ $titulo }}</h5>
            <p>{{ $descripcion }}</p>
            <div class="d-grid gap-2">
                <a href="{{ route($url) }}" class="btn btn-sm btn-secondary">{{ $textoBoton }}</a>
            </div>
        </div>
    </div>
</div>
