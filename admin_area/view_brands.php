<h3 class="text-center text-success">All Brands</h3>
<table class="table-bordered mt-5 w-100">
    <thead class="bg-info text-center">
        <tr>
            <th>SIno</th>
            <th>Brands title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $select_cat="Select * from `brands`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $brand_id=$row['brand_id'];
            $brand_title=$row['brand_title'];
            $number++;  
       ?>
        <tr class="text-center">
            <td><?php  echo $number; ?></td>
            <td><?php  echo $brand_title; ?></td>
            <td><a href='index.php?edit_brands=<?php  echo $brand_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
        <?php
}
?>
    </tbody>
</table>