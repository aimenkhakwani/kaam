<?php
    /**
     * @file
     * Default simple view template to display a list of rows.
     *
     * @ingroup views_templates
     */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
    <div class="col-md-3">
        <div class="kaamEachItem">
            <?php print $row; ?>
        </div>
    </div>
<?php endforeach; ?>
