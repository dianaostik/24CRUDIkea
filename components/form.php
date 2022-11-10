<form action="" method="post" class="col-10 border border-primary rounded">

                <div class="form-group">
                    <label for="f1">Prekės pavadinimas:</label>
                    <input type="text"  style="background-color: #F9FBFC" name="name" id="f1" class="form-control" value="<?= ($edit)? $item->name : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f2">Kategorija:</label>
                    <input type="text" style="background-color: #F9FBFC" name="category" id="f2" class="form-control"  value="<?= ($edit)? $item->category : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f3">Kaina:</label>
                    <input type="number" step=".01" style="background-color: #F9FBFC" name="price" id="f3" class="form-control"  value="<?= ($edit)? $item->price : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f4">Prekės aprašymas:</label>
                    <textarea name="about" cols="40" rows="3" id="f4" class="form-control" > <?= ($edit)? $item->about : "" ?> </textarea>
                </div>
                <?php if($edit){ ?>
                    <input type="hidden" name="id" value="<?=$item->id?>">
                    <button type="submit" name="update" class="btn btn-outline-success mt-3 mb-3">Atnaujinti</button>
                <?php } else { ?>
                    <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">Išsaugoti</button>
                <?php } ?>
            </form>