<div id="sql-heart">
  <?php
    $sql = "select patient_id,age,sex,cp,trestbps,chol,fbs,restecg,thalach,exang,oldpeak,slope,ca,thal from heart where patient_id = $id ";
    /*prepared statment*/
    $stmt = $db->prepare($sql);
        
    $stmt ->execute();
    $results = $stmt->fetchAll();
    $stmt->closeCursor();
  ?> 

<div class="content">
<span class="report"><H4>Heart</H4></span>
      <table class="list" align="center">
        <tr>
          <th>Id</th>
          <th>age</th>
          <th>sex</th>
          <th>cp</th>
          <th>trestbps</th>
          <th>chol</th>
          <th>fbs</th>
          <th>restecg</th>
          <th>thalach</th>
          <th>exang</th>
          <th>oldpeak</th>
          <th>slope</th>
          <th>ca</th>
          <th>thal</th>
        </tr>
        <?php foreach($results as $row){ ?>
          <tr>
            <td><?php echo $row['patient_id']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['sex'];?></td>
            <td><?php echo $row['cp']; ?></td>
            <td><?php echo $row['trestbps'];?></td>
            <td><?php echo $row['chol']; ?></td>
            <td><?php echo $row['fbs']; ?></td>
            <td><?php echo $row['restecg'];?></td>
            <td><?php echo $row['thalach'];?></td>
            <td><?php echo $row['exang'];?></td>
            <td><?php echo $row['oldpeak'];?></td>
            <td><?php echo $row['slope'];?></td>
            <td><?php echo $row['ca'];?></td>
            <td><?php echo $row['thal'];?></td>
          </tr>
        <?php } ?>
        </table>
        <ul>
          <li>sex:1 = male; 0 = female</li>
          <li>cp:chest pain type</li>
          <li>trestbps:resting blood pressure</li>
          <li>chol:serum cholestoral in mg/dl</li>
          <li>fbs:fasting blood sugar > 120 mg/dl</li>
          <li>restecg:resting electrocardiographic results</li>
          <li>thalach:maximum heart rate achieved</li>
          <li>exang:exercise induced angina</li>
          <li>oldpeak:ST depression induced by exercise relative to rest</li>
          <li>slope:the slope of the peak exercise ST segment</li>
          <li>ca:number of major vessels (0-3) colored by flourosopy</li>
          <li>thal:3=normal; 6=fixed defect; 7=reversable defect</li>
        </ul>
        <h4>Heart Disease Prediction<H4>
        <?php  $id = $row['patient_id'];?>

        <form action="../prediction/heart-input.php" method="post">
        <input type="hidden" id="id" name="id" value=<?php echo $id?>>
        <input type="submit" value="Input"></form>
      

        <a href="../prediction/model.php">Results</a>
        
      </div>






