<div class="container">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="text-center" scope="col">User</a></th>
        <th class="text-center" scope="col">Time</a></th>
        <th class="text-center" scope="col">Descrpition</a></th>
      </tr>
    </thead>
    
    <tbody>
          <?php foreach($result as $row) {?>
          <tr>
            <td class="text-center"><?php echo $row->id; ?></td>
            <td class="text-center"><?php echo $row->timestamp; ?></td>
            <td class="text-center"><?php echo $row->request_uri; ?></td>
          </tr>
          <tr>
          <?php }?>
    </tbody>
    
  </table>
</div> 