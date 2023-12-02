<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>

    <form method="POST" action="{{ $route }}" enctype="multipart/form-data">
        @csrf

        @isset($update)
            @method('PUT')
        @endisset

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="nombreproducto"
                    value="{{ old('nombreproducto') ?? $producto->nombreproducto }}" placeholder="Nombre de producto">
            </div>

            <div class="form-group">
                <label for="exampleInputDescripcion">Descripción</label>
                <input type="text" value="{{ old('descripcion') ?? $producto->descripcion }}" name="descripcion"
                    id="descripcion" class="form-control" placeholder="Descripción de producto">
            </div>

            <div class="form-group">
                <label for="exampleInputDescripcion">Precio</label>
                <input type="text" value="{{ old('precio') ?? $producto->precio }}" name="precio"
                    id="precio" class="form-control" placeholder="Precio del producto">
            </div>

            {{-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ $textButton }}</button>
        </div>
    </form>
</div>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>