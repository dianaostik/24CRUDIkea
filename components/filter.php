<form action="" method="get" class="row mt-5" >
            <div class="col-2"></div>
            <div class="col-8 ">
                <div class="row ps-5">
                    <div class="col-5">
                        <div class="input-group mb-3 ps-5">
                        <button class="btn btn-outline-primary dropdown-toggle" name = "filter" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
                        <ul class="dropdown-menu">
                        <?php foreach ($params as $key => $param) { ?>
                                <li><a class="dropdown-item" value="<?= $param ?>"><?= $param ?></a></li>

                        <?php } ?>
                        </ul>

                        <input type="text" class="form-control" name="from">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group mb-3 ps-5">
                            <input type="text" class="form-control" name="to">

                            <button class="btn btn-outline-primary dropdown-toggle" name = "sort" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sort</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" value="1">Price 0-9</a></li>
                                <li><a class="dropdown-item" value="2">Price 9-0</a></li>
                                <li><a class="dropdown-item" value="3">Title A-Z</a></li>
                                <li><a class="dropdown-item" value="4">Title Z-A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="filter" class="btn btn-outline-primary">Ieškoti</button>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </form>