<table class="table table-bordered table-stripped">
    <tbody>
        <?php foreach ($req as $re):?>
        <tr>
            <td><?php echo $re['id'] ?></td>
            <td><?php echo $re['description'] ?></td>
            <td><?php echo $re['post_id'] ?></td>
            <td><?php echo $re['created_at'] ?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>