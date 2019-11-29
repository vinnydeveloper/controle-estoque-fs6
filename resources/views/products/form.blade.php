@extends('layouts.app');

@section('content')

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastro de Produto</h1>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class="form-control" type="text" name="nameProduct" id="nameProduct">
            </div>
            <div class="form-group">
                <label for="descriptionProduct">Descrição</label>
                <textarea id="descriptionProduct" name="descriptionProduct" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="quantityProduct">Quantidade do Produto</label>
                <input class="form-control" type="number" name="quantityProduct" id="quantityProduct">
            </div>
            <div class="form-group">
                <label for="priceProduct">Preço do Produto</label>
                <input class="form-control" type="number" name="priceProduct" id="priceProduct">
            </div>
            <div class="form-group">
                <label for="imgProduct">Imagem do Produto</label>
                <input class="form-control" type="file" name="imgProduct" id="imgProduct">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
            </div>
            
        </form>
    
    </section>
@endsection