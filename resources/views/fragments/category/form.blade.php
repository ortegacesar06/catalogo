    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name_input"
            placeholder="Nombre"
            value="{{ isset($category->name)?$category->name:old('name') }}"
        >
        <label for="firstname_input">Nombre</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" id="catalog_select" name="catalog_id" >
            <option selected>Catálogo</option>
            @foreach( $catalogs as $catalog )
            <option value=" {{$catalog->id_catalog}} ">{{$catalog->name}}</option>
            
            @endforeach
        </select>
        
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    

                           
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">{{ $modo }}</button>
        <a href="{{ url('category/')}}" class="btn btn-secondary">Regresar</a>
    </div>
                    
            