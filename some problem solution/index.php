<html>
<?php
    
    include "company.php";

    $cdb = new employeeClass;
    //echo "<table border=\"1\"><tr><th>Employee Name</th><th>Salary</th><th>Car Name</th><th>Company</th></tr>";
    //$cdb->selectEmployeesCar(1,1);
    //$cdb->selectEmployeesCar(2,2);
    //$cdb->selectEmployeesCar(3,3);
    //echo "</table>";


?>
     <div class="panel-body">
        <form method="post" action="contacts.php">
            Name:
            <input type="text" name="name">
            <br>
            Designation:
            <input type="text" name="designation">
            <br>
            Salary:
            <input type="text" name="country">
            <br>
            Car Name:
            <select name="car">
                <?php
                    echo $cdb->dropDown();
                ?>       
            </select>
            <br>
            <button type="submit" name="submit1">Submit</button>
        </form>
    </div>
    

<?php
    $cdb->close();
?>
   
</html>