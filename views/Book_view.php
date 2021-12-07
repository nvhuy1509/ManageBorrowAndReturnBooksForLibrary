<html>
<head>
	<meta charset="utf-8">
</head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

<body>
	<form method="POST" action="Book_view.php">
	<fieldset style = "width: 50% ;">
        <div  style = "margin-top: 3%;" align="center">
			<label style="background-color: #5b9bd5; ">Thể loại</label>
			<input  style="width:50%; " type="select" id="search" name="search">
		</div>
        <div style = "margin-top: 3%;" align="center">
			<label style="background-color: #5b9bd5; ">Từ khóa</label>
			<input  style="width:50%; " type="text" id="search" name="search">
		</div>
        <div style = "margin-top: 3%;" align="center">
            <input  type="submit" name="btn_submit" style="background-color: #5b9bd5" value="Tìm kiếm"></input >
        </div>

        <div style = "margin-top: 3%;  margin-left: 1%">
        <?php echo 'Số quyển sách tìm thấy: XXX' ?>   
        </div>
		<table  style = "width: 100% ; margin-top: 3%;">  
			<tr style = "border: 1px solid #000000">
				<td  style="background-color: #bdd6ee; "> No</td>
				<td  style="background-color: #bdd6ee; "> Tên sách</td>
				<td  style="background-color: #bdd6ee; " > Thể loại</td>
				<td  style="background-color: #bdd6ee; " > Mô tả chi tiết</td>
				<td  style="background-color: #bdd6ee; " > Action</td>
			</tr>
            <tr>
                <td><?php echo '1' ?></td>
                <td><?php echo '2' ?></td>
                <td><?php echo '3' ?></td>
                <td><?php echo '4' ?></td>
                <td><?php echo '5' ?></td>
            </tr>	
		</table>

		</fieldset>
	</form>
		
</body>
</html>
