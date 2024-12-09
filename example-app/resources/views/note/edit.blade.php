<h1>Nota berria sortu</h1>
<form action="{{route('note.update')}}" method="POST">
    @csrf
  <input hidden type="number" id="id" name="id" value="{{nota->id}}"><br>
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value="{{nota->title}}"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description" value="{{nota->description}}"><br><br>
  <input type="submit" value="Actualizar registro">
</form> 
<a href="{{route('note.index')}}"><button>Atras</button></a>
