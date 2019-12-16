<form method="POST" action="{{route('frontend.user.extend.update', $data->id)}}" enctype="multipart/form-data"
      id="form">
    @csrf
    <div class="row col-md-12 mb-5">
        <label>Jenis</label>
        <select onchange="getSelect(this)" name="type" class="custom-select" id="type">
            <option value="DS54">DS54</option>
            <option value="VK7">VK7</option>
        </select>

    </div>
    {{ form_submit(__('labels.frontend.contact.button')) }}  <a href="?page=1" class="btn btn-link">Next</a>
</form>
