<div class="logs">
    <?php foreach ($logs as $log):?>
        <div class="log <?php echo $log->scope;?> <?php echo $log->type;?>"><?php echo $log->message;?></div>
    <?php endforeach;?>
</div>