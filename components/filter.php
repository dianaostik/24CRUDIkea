<form action="" method="get" class="row mt-5" >
<div class="col-2"></div>
<div class="col-8 ">
    <div class="row ps-5">
        <div class="col-2">
            <select class="form-select" name="filter">
                <option value=""> Visi </option>
            <?php foreach ($params as $key => $param) { ?>
                 <option value="<?= $param ?>"><?= $param ?></option>
            <?php } ?>
            </select>
        </div>     
                      
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="from" placeholder="Price from">
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 ps-5">
                        <input type="text" class="form-control" name="to" placeholder="Price to">
                    </div>
                </div>
            </div>
        </div>
                        
        <div class="col-2">
                <select class="form-select" name = "sort">
                    <option selected value="0"> Sort </option>
                    <option value="1">Price 0-9</option>
                    <option value="2">Price 9-0</option>
                    <option value="3">Title A-Z</option>
                    <option value="4">Title Z-A</option>
                </select>
        </div>
                    
                    
        <div class="col-2">
            <button type="submit" class="btn btn-outline-primary">Ieškoti</button>
        </div>
    </div>
    
<div class="col-2"></div>
</div>
</form>