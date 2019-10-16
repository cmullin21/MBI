<body>
  <div class="container">
    <form method="post" action="<?php echo site_url('manager/ManagerJournalController/update')?>/<?php echo $row->id; ?>">
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" required>
          <option>Accepted</option>
          <option>Rejected</option>
        </select>
      </div>
      <div class="form-group">
        <label for="statusDesc">Reason for Status</label>
        <input type="text" class="form-control" name="statusDesc" required placeholder="Enter Description of Status Choice">
      </div>
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
</form>
