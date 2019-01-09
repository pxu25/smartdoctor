<div id="sql-lipid">
  <?php
    $sql = "select CholesterolTotal,Triglyceride, HDL, LDL from lipid where patient_id = $id ";

    $stmt = $db->prepare($sql);
        
    $stmt ->execute();
    $results = $stmt->fetchAll();
    $stmt->closeCursor();
  ?> 
</div>

<div class="content">
<table class="list" align="center">
  <span class="report"><H4>Lipid Panel</H4></span>
    <tr>
      <th title="Result Component" scope="col" id="components50_col0">Component</th>
      <th title="Value of Component Result" scope="col" id="components50_col1">Your Value</th>
      <th title="Range of Normal Values" scope="col" id="components50_col2">Standard Range</th>

    </tr>
    <?php foreach($results as $row){?>
      <tr>
      <td>Cholesterol Total</td>
      <td ><?php echo $row['CholesterolTotal']?><span class="unit">mg/dL</span></td>
      <td><span class="unit">0 - 199 mg/dL</span></td>
    </tr>

    <tr>
      <td>Triglyceride level</td>
      <td ><?php echo $row['Triglyceride']?><span class="unit">mg/dL</span></td>
      <td><span class="unit">&lt;149 mg/dL</span></td>
    </tr>

    <tr>
      <td>HDL Cholesterol</td>
      <td ><?php echo $row['HDL']?><span class="unit">mg/dL</span></td>
      <td><span class="unit">&gt;40 mg/dL</span></td>
    </tr>

    <tr>
      <td>LDL Cholesterol</td>
      <td ><?php echo $row['LDL']?><span class="unit">mg/dL</span></td>
      <td><span class="unit">0 - 129 mg/dL</span></td>
    </tr>
    <?php } ?> 
</table>
</div>





