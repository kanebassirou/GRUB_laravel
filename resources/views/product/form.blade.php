<div class="form-floting mb-3">
    <input
     required ="text" class="form-control"
     name="title" id="title" placeholder="Titre du produit" >
     <label for="title">
        titre du produit
     </label>
</div>
<div class="form-floting mb-3">

    <input
    type="number"
      class="form-control"
     name="price" id="price" placeholder="prix du produit" >
     <label for="price">
        PRIX du 

     </label>
</div>
<div class="form-floting mb-3">

    <input
    type="text"
     class="form-control"
     name="description" id="description" placeholder="description du produit" >
     <label for="description">
        Description du produit
     </label>
</div>
<div class="form-floting mb-3">

    <input
    type="text"
     class="form-control"
     name="image" id="image" placeholder="votre image" >
     <label for="image">
        Description du produit
     </label>
  </div>
<div class="form-floting mb-3">
    <input
    type="text"
     class="form-control"
     name="image" id="image" placeholder="votre image" >
     <label for="image">
        Description du produit
     </label>
  </div>
<div class="form-floting mb-3">
   <select class="form-select" name="catagory_id" id="catagory_id">
         @foreach ($catagory as $catagories)
            <option value="{{ $catagories->id }}">{{ $catagories->name }}</option>
         @endforeach
   </select>
  </div>
  <div class="for-check">
      <input class="form-check-input" type="checkbox" name="status" id="status" value="1">
      <label class="form-check-label" for="status">Status</label>
  </div>
  </