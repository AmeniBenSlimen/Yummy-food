@extends('layouts.NavBarAdmin')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<div class="container">
<br><br><br><br><br>

<form method="POST" action="{{route('UpdateProduitBD')}}">
    @csrf 
    <input type="hidden" name="id" value="{{$produit->id}}" />
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" value="{{$produit->nom}}" class="form-control" id="inputEmail4" name="nom" placeholder="Nom Produit...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="text" class="form-control" value="{{$produit->description}}" id="inputPassword4" name="description" placeholder="Description...">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="number" class="form-control" value="{{$produit->prix}}" id="inputAddress" name="prix" placeholder="Prix en DT...">
  </div>
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="file" class="form-control" value="{{$produit->image}}" id="inputAddress" name="image">
  </div>

  <button type="submit" class="btn btn-success">Valider la modification</button>
</form>
</div>
<br><br><br><br><br>
@extends('layouts.footer')