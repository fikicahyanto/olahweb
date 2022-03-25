<?php 
foreach($record as $data):?>
<tr id="kolom<?=$data->id?>" onclick="action('<?=$data->id?>')" class="">
	<td><?=$data->about_us?></td>
    <td><?=$data->address?></td>
    <td><?=$data->phone?></td>
    <td><?=$data->email?></td>
    <td><?=$data->linkedin?></td>
</tr>
<?php endforeach;?>
