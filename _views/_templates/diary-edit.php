<?php $event = $this->data['event']; ?>

<div class="diary-edit-wrap">
  <form action='<?= "http://localhost/~jm/group_project/20150001/diary/add"; ?>' method='post'>
    <!-- <span class="diary-edit-title">Edit</span> -->
    <span class="diary-edit-exit">&times;</span>
    <span class="diary-input-wrap">
      <span class="diary-field-wrap">
        <label for="title" class="diary-label">Title:</label>
        <input name="title" id="title" type="text" class="diary-text" value='<?= $event->getTitle(); ?>'>
      </span>
      <span class="diary-field-wrap">
        <label for="details" class="diary-label">Details:</label>
        <textarea cols="10" rows="3" id="details" name="details" class="diary-textarea">
         <?= $event->getDescription(); ?>
        </textarea>
      </span>
      <span class="diary-field-wrap">
        <label for="start-date" class="diary-label">Start:</label>
        <span class='diary-date-time-wrap'>
          <input name="start-date" id="start-date" type="text" class="diary-text" placeholder='Date' value='<?= $event->getDate('d/m/Y'); ?>'>
          <input name="start-time" id="start-time" type="text" class="diary-text" placeholder='Time' value='<?= $event->getStartTime('H:i'); ?>'>
        </span>
      </span>
      <span class="diary-field-wrap">
        <label for="finish" class="diary-label">Finish:</label>
        <span class='diary-date-time-wrap'>
          <input name="finish-date" id="finish-date" type="text" class="diary-text" placeholder='Date' value='<?= $event->getDate('d/m/Y'); ?>'>
          <input name="finish-time" id="finish-time" type="text" class="diary-text" placeholder='Time' value='<?= $event->getEndTime('H:i'); ?>'>
        </span>
      </span>
    <!-- <input type="submit"> -->
      <button class="action-btn diary-edit-confirm">Confirm</button>
      <button class="action-btn diary-edit-delete">Delete</button>
    </span>
  </form>
</div>