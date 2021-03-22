<?php 
require 'database.php';
$pdo = Database::connect();

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT count(remark) as painted,
        (SELECT count(targetcolor) FROM customer WHERE targetcolor='red' AND remark='Done') as red,
        (SELECT count(targetcolor) FROM customer WHERE targetcolor='green' AND remark='Done') as green,
        (SELECT count(targetcolor) FROM customer WHERE targetcolor='blue'AND remark='Done')  as blue
        FROM customer WHERE remark='Done'";
$q = $pdo->prepare($sql);
$q->execute(array());
$shop = $q->fetch(PDO::FETCH_ASSOC);
// print_r($shop);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM customer WHERE remark='Queue'";
$count=1;



?>

<div class="container">
    <div class="title">
        Paint Jobs
    </div>
</div>


<div class="container">
<h5>Paint Jobs in Progress</h5>
    <div class="row">
        <div class="col-sm-8">
        <table class="table table-bordered">
        <thead style="background-color: #dddddd; color: black;">
            <tr>
            <th>Plate number</th>
            <th>Current Color</th>
            <th>Target Color</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($pdo->query($sql) as $row){
                if($count<=5){
                    $count++;
        ?>

            <tr>
            <td><?php echo $row['platenum']; ?></td>
            <td><?php echo $row['currentcolor']; ?></td>
            <td><?php echo $row['targetcolor']; ?></td>
            <td><a href="api.php?complete=<?php echo $row['id']?>" 
                style="text-decoration: none; color: #ea6a5b;">
                Mark as Completed</a></td>
            </tr>
        <?php } }?>   
        </tbody>
        </table>
        
        <br/>
        <h5>Paint Queue</h5>
            <table class="table table-bordered">
            <thead style="background-color: #dddddd; color: black;">
                <tr>
                <th>Plate number</th>
                <th>Current Color</th>
                <th>Target Color</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $count=1; 
                foreach($pdo->query($sql) as $row){
                    if($count>5){
                        
            ?>

                <tr>
                <td><?php echo $row['platenum']; ?></td>
                <td><?php echo $row['currentcolor']; ?></td>
                <td><?php echo $row['targetcolor']; ?></td>
                </tr>
            <?php } $count++;} ?>   
            </tbody>
            </table>


        </div>
        <div class="col-sm-4">
            <table class="table" style="border-color:white;">
                <thead style="border-color:white; background-color: #ea6a5b; color:white;">
                    <tr>
                    <th colspan="2">SHOP PERFORMANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Total Cars Painted: </td>
                    <td><b><?php echo $shop['painted']; ?></b></td>
                    </tr>
                    <tr>
                    <td>Breakdown:</td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>  &nbsp&nbsp&nbspBlue:</td>
                    <td><b><?php echo $shop['blue']; ?></b></td>
                    </tr>
                    <tr>
                    <td>   &nbsp&nbsp&nbspRed:</td>
                    <td><b><?php echo $shop['red']; ?></b></td>
                    </tr>
                    <tr>
                    <td>   &nbsp&nbsp&nbspGreen:</td>
                    <td><b><?php echo $shop['green']; ?></b></td>
                    </tr>
                </tbody>
                </table>
        </div>
    </div>    
</div>