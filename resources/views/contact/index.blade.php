@extends('layouts.app')
@section('title','contactez-nous')
@section('content')

<div class="container-fluid">
    <div class="container contact-form mt-5" style="width: 70%;">
        <form method="post" class="border-0" style="padding: 12%">
            <h3 class="text-center" style="margin-bottom: 8%;margin-top: -16%;color: #000">Contactez Nous</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control mt-3" placeholder="Nom " value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email " value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="objet" class="form-control mt-3" placeholder="Objet " value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact mt-3 border-0 w-100" style="padding: 1.5%;border-radius: 1rem;background: #fabe14;color: #000;font-weight: 600;cursor: pointer;" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="msg" class="form-control mt-3" placeholder="Message " style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection