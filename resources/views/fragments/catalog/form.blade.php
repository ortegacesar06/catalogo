    <div class="form-floating mb-3">
        <label for="firstname_input">Nombre</label>
        <input 
            type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name_input"
            placeholder="Nombre"
            value="{{ isset($catalog->name)?$catalog->name:old('name') }}"
        >
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="form-group mb-3">
        <label for="image_path" class="form-label">Imagen</label>
        <br>
        <input 
            class="form-control @error('image_path') is-invalid @enderror" 
            type="file" 
            name="image_path" 
            id="image_path"
        >
    </div>
    {{-- {{ $catalog->image_path }}  --}} 
    @if(isset($catalog->image_path))       
    <img class="img-thumbnail img-fluid mx-auto d-block mb-4" src="{{ asset('storage').'/'.$catalog->image_path }}" width="200"  alt="">
    @endif

    <button class="btn btn-primary btn-block" type="submit">{{ $modo }}</button>
              