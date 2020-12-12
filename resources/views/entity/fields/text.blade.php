    
    @error($column_name) @enderror
    <input class="column text-left col btn btn-dark my_col" 
    type="text" name="{{ $column_name }}" value="{{ $entity->$column_name}}">

</div>

@error($column_name)

    <div class="font-weight-normal text-lowercase row alert alert-danger">{{ $message }}</div>

@enderror