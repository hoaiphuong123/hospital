<?php
    include './header.php';
?>
<table class="table table-ronsponsive">
    <thead>
        <tr>
            <th scope="col">mã bệnh nhân</th>
            <th scope="col">tên</th>
            <th scope="col">họ</th>
            <th scope="col">ngày sinh</th>
            <th scope="col">giới tính</th>
            <th scope="col">SĐT</th>
            <th scope="col">email</th>
            <th scope="col">chiều cao</th>
            <th scope="col">cân nặng</th>
            <th scope="col">nhóm máu</th>
            <th scope="col">ngày lập sổ</th>
            <th scope="col">ngày cập nhật</th>
            <th class='col' scope="col">chức năng</th>
        </tr>
    </thead>
    <tbody>
        <!-- xuất dữ kiệu theo cơ sở dữ kiệu -->
        <?php
        //b1 mở kết nối
         include './config.php';
         //b2truy vấn
         $sql= "SELECT * FROM patient";
         //lưu kết quả trả về $result
        $result=mysqli_query($conn,$sql);
        //b3 phan tích và sử lý kết quả
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo '<th scopy = "row">'.$row['patientid'].'</th>';
                echo '<td>' . $row['firstname'] . '</td>';
                echo '<td>' . $row['lastname'] . '</td>';
                echo '<td>' . $row['dateofbirth'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['mobile'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['height'] . '</td>';
                echo '<td>' . $row['weight'] . '</td>';
                echo '<td>' . $row['blood_type'] . '</td>';
                echo '<td>' . $row['created_on'] . '</td>';
                echo '<td>' . $row['modified_on'] . '</td>';
                echo '<td> 
                <a href="./detail.php?id=' . $row['patientid'] . '" class="btn btn-primary">Chi tiết</a>
                <a href="process/edit.php?id=' . $row['patientid'] . '" class="btn btn-success">Sửa</a>
                <a href="process/delete.php?id=' . $row['patientid'] . '" class="btn btn-danger mt-1">Xoá</a>
                </td>';
                echo "</tr>";
            }
        }
         //* B4: đóng kết nối
         mysqli_close($conn);
        ?>
    </tbody>
</table>
<?php include './footer.php' ?>