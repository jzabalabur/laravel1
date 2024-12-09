<h1>Nota berria sortu</h1>
<form action="{{route('note.store')}}" method="POST">
    @csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Crear registro">
</form> 
<a href="{{route('note.index')}}"><button>Atras</button></a>
