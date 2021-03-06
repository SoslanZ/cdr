<?php

include 'dialog-queue.php';

?>

<div class="filters clear_fix">
    <div class="clear_fix bigblock of_h" style="width: 800px">
        <div class="fl_l" style="padding-right: 15px;">
            Всего: <?php echo @count($this->dataQueues); ?>
        </div>
        <div class="fl_r"><a onclick="$('#dialog-queue-add').dialog('open');" class="icon icon-add">добавить</a></div>
        <div class="pg-pages fl_r">  </div>
    </div>
</div>



<div id="operator_list" class="clear clear_fix">
    <table class="grid" style="width: 800px;">
        <thead>
            <tr>
                <td class="head"  style="width: 150px;">Имя очереди</td>
                <td class="head"  style="width: 150px;">Интерфейс</td>
                <td class="head"  style="width: 70px;" >Пенальти</td>
                <td class="head"  >uniqueid</td>
                <td class="head"  style="width: 70px;" >Paused</td>
                <td class="head"  style="width: 70px;">Изменить</td>
                <td class="head"  style="width: 70px;">Удалить</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->dataQueues as $queue) { ?>
            <tr>
                <td><?php echo html($queue['queue_name']); ?></td>
                <td><?php echo html($queue['interface']); ?></td>
                <td align="center"><?php echo html($queue['penalty']); ?></td>
                <td ><?php echo html($queue['uniqueid']); ?></td>
                <td align="center"><?php echo $queue['paused']; ?></td>
                <td class="image-link"><a href="?section=queue&uniqueid=<?php echo html($queue['uniqueid']); ?>" class="icon icon-edit"></a></td>
                <td class="image-link"><a  onclick="showQueueDelete('<?php echo html($queue['uniqueid']); ?>');" class="icon icon-delete"></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>