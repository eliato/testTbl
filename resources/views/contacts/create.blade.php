<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row">
    
    
    <div class="col-6">
      <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">New Contact</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('home') }}" class="btn btn-sm btn-default">Cancelar</a>
        </div>
      </div>
    </div>
    <div class="card-body"> 
       
      <form action="{{ url('contacts') }}" method="POST" >
       @csrf
      <div class="form-group focused">
        <label class="form-control-label" for="input-username">Frist Name</label>
        <input type="text" name="fristname" id="fristname" class="form-control form-control-alternative" placeholder="Frist Name"  value="" required="required">
      </div>
      <div class="form-group focused">
        <label class="form-control-label" for="input-username">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control form-control-alternative" placeholder="Last Name"  value="" required="required">
      </div>
      <div class="form-group focused">
        <label class="form-control-label" for="input-username">Email</label>
        <input type="email" name="email" id="email" class="form-control form-control-alternative" placeholder="Email"  value="" required="required">
      </div>
      <div class="form-group focused">
        <label class="form-control-label" for="input-username">Phone</label>
        <input type="number" name="phone" id="phone" class="form-control form-control-alternative" placeholder="Phone"  value="" required="required">
      </div>

     
     <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    </div>
    
  </div>
</div>
    
</body>
</html>