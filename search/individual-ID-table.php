<div class="content">
<span class="report"><H4>Basic Information</H4></span>
      <table class="list" align="center">
        <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Sex</th>
          <th>DOB</th>
          <th>City</th>
          <th>State</th>
          <th>Zipcode</th>
          <th>Homephone</th>
          <th>Email</th>
        </tr>

        <?php foreach($results as $row){ ?>
          <tr>
            <td><?php echo $row['patient_id']; ?></td>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName'];?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['DOB'];?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['zipcode'];?></td>
            <td><?php echo $row['homePhone'];?></td>
            <td><?php echo $row['email'];?></td>
          </tr>
        <?php } ?>
        </table>
        </div>
