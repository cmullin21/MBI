<body>
  <div class="container">
  <form method="post" action="<?php echo site_url('manager/ManagerJournalController/update');?>/<?php echo $row->id;?>">
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" required>
          <option>Approved</option>
          <option>Reject</option>
        </select>
      </div>
      <div class="container">
        <div class="form-group">
          <label for="statusDesc">Reason for Status</label>
          <input type="text" class="form-control" name="statusDesc" required placeholder="Enter Description of Status Choice">
        </div>
      </div>
      <div class="container">
        <button type="submit" class="btn btn-primary" value="save">Submit</button>
      </div>
</form>
</div>

