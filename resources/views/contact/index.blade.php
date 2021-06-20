@extends('layouts.app')
@section('title','contactez-nous Fondation225')
@section('content')

    <div class="container-fluid">
        <div class="container contact-form mt-5">
            <form method="post" class="border-0">
                <h3 class="text-center">Contactez Nous</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="nom" class="mt-3" placeholder="Nom " value=""
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="mt-3" placeholder="Email " value=""
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="objet" class="mt-3" placeholder="Objet " value=""
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn bg-orange" value="Send Message"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control mt-3" placeholder="Message "
                                      style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection