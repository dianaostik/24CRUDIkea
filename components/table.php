<table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>About</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                <tr>
                        <td> <?=$item->id?> </td>
                        <td> <?=$item->name?> </td>
                        <td> <?=$item->category?> </td>
                        <td> <?=$item->price . "€"?> </td>
                        <td> <?=$item->about?> </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="edit" class="btn btn-outline-primary">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="destroy" class="btn btn-outline-danger">delete</button>
                            </form>
                        </td>

                </tr>
                <?php  } ?>
            </tbody>
        </table>