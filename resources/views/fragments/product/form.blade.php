<form action="{{ route('save_products') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name_input"
            placeholder="Nombre"
            value="{{ old('name') }}"
        >
        <label for="firstname_input">Nombre</label>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="description" 
            class="form-control @error('description') is-invalid @enderror" 
            id="description_input"
            placeholder="Descripción"
            value="{{ old('description') }}"
        >
        <label for="description_input">Descripción</label>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="type" 
            class="form-control @error('type') is-invalid @enderror" 
            id="type_input"
            placeholder="Tipo"
            value="{{ old('description') }}"
        >
        <label for="type_input">Tipo</label>
        @error('type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="price" 
            class="form-control @error('price') is-invalid @enderror" 
            id="price_input"
            placeholder="Precio"
            value="{{ old('price') }}"
        >
        <label for="price_input">Precio</label>
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <label for="formFileLg" class="form-label">Imagen</label>
        <br>
        <input 
            class="form-control" 
            type="file" 
            name="imagenProducto" 
            id="image_input"
            value="{{ old('image_path') }}">
        
        <img class="img-thumbnail" src="" alt="">
    </div>
</div>
<div class="form-floating mb-3">
    <input 
        type="text" 
        name="account" 
        class="form-control @error('price') is-invalid @enderror" 
        id="account_input"
        placeholder="Account"
        value="{{ old('price') }}"
    >
    <label for="account_input">Cuenta</label>
    @error('account')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror</div>
    <div class="form-floating mb-3">
        <input 
            type="text" 
            name="category" 
            class="form-control @error('category') is-invalid @enderror" 
            id="category_input"
            placeholder="category"
            value="{{ old('price') }}"
        >
        <label for="category_input">Categoria</label>
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Registrar</button>
        <a href="{{ url('product/create')}}" class="btn btn-secondary">Regresar</a>
    </div>
</form>