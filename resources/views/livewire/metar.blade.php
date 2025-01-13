<div>
    <form action="" method="GET">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="icao">ICAO</label>
                <input type="text" id="icao" name="icao" class="form-control" />
            </div>
            <div class="col-md-1 mb-3">
                <label for=""></label>
                <input type="submit" value="Get" class="btn btn-primary form-control col-md-6 mb-3" />
            </div>
        </div>
    </form>
</div>
