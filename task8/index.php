<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        Matrix generator
    </title> 
</head> 
  
<style>
table {
    margin-left: auto;
    margin-right: auto;
}

table, th, td {
  border:1px solid black;
}
</style>

<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        Matrix generator 
    </h1> 
  
    <form method="post"> 
        
    <label for="method">
            Method
            <select id='method' name='method'>
                <option value="diagonal">Diagonal</option>
                <option value="empty_diagonal">Empty diagonal</option>
                <option value="identity">Identity</option>
                <option value="random">Random</option>
                <option value="zero">Zero</option>
            </select>
            <input type="submit" name="button1"
                class="button" value="Generate" /> 
    </form> 
    <br/>
    <?php
        require_once ('MatrixService.php');

        if(array_key_exists('button1', $_POST)) {

            $matrixServie = new MatrixService();

            $matrixServie->generateMatrix($_POST['method']);
        }
    ?> 

</body> 
  
</html> 
