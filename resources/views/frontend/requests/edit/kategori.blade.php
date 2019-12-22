<div class="row col-md-12 mb-5">
    <label>Jenis</label>
    <select name="type" class="custom-select">
        <option value="DS54" {{($data->type == "DS54") ? 'selected': ''}}>DS54</option>
        <option value="VK7" {{($data->type != "DS54") ? 'selected': ''}}>VK7</option>
    </select>
</div><!-- row -->
