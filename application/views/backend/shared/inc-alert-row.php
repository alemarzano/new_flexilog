<?php if(!empty(${UI_MESSAGE})) : ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="alert <?= ${UI_MESSAGE_TYPE} ?>">
                <?= ${UI_MESSAGE} ?>
            </div>
        </div>
    </div>
<?php endif; ?>
