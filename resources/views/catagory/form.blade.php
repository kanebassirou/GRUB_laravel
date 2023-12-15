<div class="form-floting mb-3">
    <input
    value="{{ old('name', $catagory->name ?? null) }}"
     required ="text" class="form-control"
     name="name" id="name" placeholder="ex : Cosmétique" >
     <label for="name">
        Nom de la catégorie
     </label>
</div>