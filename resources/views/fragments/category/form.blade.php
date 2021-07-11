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
        <label for="formFileLg" class="form-label">Imagen</label>
        <br>
        <input 
            class="form-control @error('image_path') is-invalid @enderror" 
            type="file" 
            name="image_path" 
            id="image_path"
        >
        {{-- {{ $category->image_path }}  --}} 
        @if(isset($category->image_path))       
        <img class="img-thumbnail img-fluid mx-auto d-block" src="{{ asset('storage').'/'.$category->image_path }}" width="200"  alt="">
        @endif
    </div>
                           
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">{{ $modo }}</button>
        <a href="{{ url('category/')}}" class="btn btn-secondary">Regresar</a>
    </div>
                    
            