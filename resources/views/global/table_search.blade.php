<form method="GET" action="{{ $action }}">
    <div class="m-input-icon m-input-icon--left">
        <input type="text" name="search" class="form-control m-input m-input--solid"
               placeholder="Cari ..." id="generalSearch"
               value="{{ $search }}">
        <span class="m-input-icon__icon m-input-icon__icon--left">
            <span><i class="la la-search"></i></span>
        </span>
    </div>
</form>