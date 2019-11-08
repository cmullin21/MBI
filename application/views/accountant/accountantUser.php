<h3 class="text-center">Users</h3>
    <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th class="text-center" scope="col">Last Name</th>
            <th class="text-center"scope="col">First Name</th>
            <th class="text-center" scope="col">Username</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Address</th>
            <th class="text-center" scope="col">Birthday</th>
            <th class="text-center" scope="col">Job Level</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $row) {?>
          <tr>
            <td class="text-center"><?php echo $row->lastname; ?></td>
            <td class="text-center"><?php echo $row->firstname; ?></td>
            <td class="text-center"><?php echo $row->username; ?></td>
            <td class="text-center"><?php echo $row->email; ?></td>
            <td class="text-center"><?php echo $row->address; ?></td>
            <td class="text-center"><?php echo $row->birthday; ?></td>
            <td class="text-center"><?php echo $row->level; ?></td>
          </tr>
          <tr>
          <?php }?>
        </tbody>
      </table>
