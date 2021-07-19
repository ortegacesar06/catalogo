    <div class="form-floating mb-3">
        <label for="firstname_input">Nombre</label>
        <input 
            type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name_input"
            placeholder="Nombre"
            value="{{ isset($category->name)?$category->name:old('name') }}"
        >
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <label for="firstname_input">Catálogo</label>
        <select class="form-control" id="catalog_select" name="catalog_id" >
            <option value="">Catálogo</option>
            @foreach( $catalogs as $catalog )
                <option value="{{ $catalog->id_catalog }}" {{ isset($category->catalog_id) ? ($category->catalog_id === $catalog->id_catalog ? 'selected':''):'' }}>{{$catalog->name}}</option>            
            @endforeach
        </select>
        
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <button class="btn btn-primary btn-block" type="submit">{{ $modo }}</button>
                    
            