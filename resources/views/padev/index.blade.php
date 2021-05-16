@extends('layouts.app')
@section('title','padev')
@section('content')
<style>
.bg{
    height: 70vh;
    background-size: cover;

}
.tt{
    color: white;
    font-size: 65px


}
.titre{
    width: 80%;
}
.bg-image {
  /* The image used */
  background-image: url("images/padev/bg.jpg");

  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  /* background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); Black  */
  color: white;
  font-weight: bold;
  /* border: 3px solid #f1f1f1; */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

</style>
<div class="container-fluid  mb-5">

    <div class="bg " style="background-image: url('')">
        <div class="bg-image"></div>

        <div class="bg-text">
          <h1>PADEV est une initiative de la fondation 225</h1>
        </div>
        {{-- <div class="text-center titre">
            <h1 class="pt-5 tt">PADEV est une initiative de la fondation 225</h1>
        </div> --}}
    </div>
</div>


@endsection