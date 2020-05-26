<form action="{{ route('add-row') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <input name="first" type="text" class="form-control" placeholder="First field">
        </div>
        <div class="form-group col-md-6">
            <input name="second" type="text" class="form-control" placeholder="Second field">
        </div>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-outline-secondary">Add</button>
    </div>
</form>
