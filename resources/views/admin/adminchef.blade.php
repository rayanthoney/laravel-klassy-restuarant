<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body> 

    <div class="container-scroller">
      @include("admin.navbar")

      <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data">

        @csrf
        
        <div>
          <label for="">Name</label>
          <input style="color:blue;" type="text" name="name" required placeholder="Enter Name">
        </div>
        <div>
          <label for="">Speciality</label>
          <input style="color:blue;" type="text" name="speciality" placeholder="Enter Speciality" required>
        </div>
        <div>
            <input type="file" name="image" required>
        </div>
        <div>
          <input style="color:blue;" type="submit" value="Save" id="">
        </div>
      </form>
    

    @include("admin.adminscript")
  </body>
</html>