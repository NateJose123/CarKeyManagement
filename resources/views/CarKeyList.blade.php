
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Car Key Number</th>
      <th scope="col">Car Model</th>
      <th scope="col">Car Year</th>
      <th scope="col">Additional Info</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($CarKey as $CarKeys)
      <tr>
        <td>{{$CarKeys->CarKeyNumber}}</td>
        <td>{{$CarKeys->CarModel}}</td>
        <td>{{$CarKeys->CarYear}}</td>
        <td>{{$CarKeys->AdditionalInfo}}</td>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
          <a href="/edit/{{$CarKeys->CarKeyNumber}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
