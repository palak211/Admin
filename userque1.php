<?php include '../db.php';include 'header.php';?>

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Question</h4>
              </div>
              <div class="card-body">

             



<div class="row">
<div class="col-md-12">
    
            
            
           <table class="table table-striped table-bordered table-hover">
<tr>
    <th>Topic</th>
    <th>Question</th>
    <th>Date</th>
    <th>Reply</th>
    

    
</tr>    
    <?php
    $sql= "select * from user_que q,video v where q.topicid=v.Video_id and q.reply!='pending' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
$qid=$row['queid'];
    echo"<tr>";

    echo"<td>".$row['Title']."</td>";
    echo"<td>".$row['question']."</td>";
    echo"<td>".$row['ask_date']."</td>";
   echo"<td>".$row['reply']."</td>";
   
    
        
        echo"</tr>";
    }
    

    ?>
    
</table>
                </div></div></div>
            <?php include 'footer.php'; ?>