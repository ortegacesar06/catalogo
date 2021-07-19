
    <div class="form-floating mb-3">
        <label for="firstname_input">Nombre</label>
        <input 
            type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror" 
            id="name_input"
            placeholder="Nombre"
            value="{{ isset($product->name)?$product->name:old('name') }}"
        >
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <label for="description_input">Descripción</label>
        <input 
            type="text" 
            name="description" 
            class="form-control @error('description') is-invalid @enderror" 
            id="description_input"
            placeholder="Descripción"
            value="{{ isset($product->description)?$product->description:old('description') }}"
        >
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <label for="stock_input">Stock</label>
        <input 
            type="text" 
            name="stock" 
            class="form-control @error('stock') is-invalid @enderror" 
            id="stock_input"
            placeholder="Stock"
            value="{{ isset($product->stock)?$product->stock:old('stock') }}"
        >
        @error('stock')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-floating mb-3">
        <label for="price_input">Precio</label>
        <input 
            type="text" 
            name="price" 
            class="form-control @error('price') is-invalid @enderror" 
            id="price_input"
            placeholder="Precio"
            value="{{ isset($product->price)?$product->price:old('price') }}"
        >
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
       
    </div>
    <div class="form-group mb-3">
        <label for="formFileLg" class="form-label">Imagen</label>
        <br>
        <input 
            class="form-control" 
            type="file" 
            name="image_path" 
            id="image_input"
            value="{{ isset($product->imagen_path)?$product->imagen_path:old('stock') }}" />
        
    </div>
    <div class="form-group mb-3">
        <label for="category_input">Categoria</label>
        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
            <option value="">Selecciona una categoría</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id_category }}" {{ isset($product) ? ($category->id_category === $product->category_id ? 'selected':''):'' }}>{{ $category->name }} - {{ $category->catalog->name }}</option>
            @endforeach
        </select>
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button class="btn btn-primary btn-block" type="submit">Guardar datos</button>
