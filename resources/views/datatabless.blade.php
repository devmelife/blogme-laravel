@extends('layouts.appdata')

@section('content2')

    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
               <th>Action</th>
               
            </tr>
        </thead>
    </table>
    <button onclick="myFunction()">Click me</button>
    <script>
        function myFunction() {
            swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
 
}

        
     $('#Yourbutton').click(function() {
        $.ajax({
            url: "YourUrl",
            type: 'POST',
            success: function(){
                alert("success");
            }
        });
    });
    
    
    
    </script>

@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'Action' }
           
        ]
    });
});
</script>
@endpush


