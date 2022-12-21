<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>FirstName</th>
			<th>LastName</th>
			<th colspan="2">Role</th>
            <th>Title</th>
            <th>Post</th>


		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Update</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form>
    