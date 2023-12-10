<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        Customer creator
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        Customer creator 
    </h1> 
      
    <h4> 
        Set customer data
    </h4> 
  
    <form method="post"> 
        
        <label for="first_name">
            First name
            <input type="text" id="first_name" name="first_name">
        </label>
        <label for="last_name">
            Last name
            <input type="text" id="last_name" name="last_name">
        </label>
        <label for="age">
            Age
            <input type="number" name="age" min="0"/>
        </label>
        <input type="submit" name="button1"
                class="button" value="create" /> 
          
    </form> 
    <br/>
    <?php
        require_once ('CustomerService.php');

        if(array_key_exists('button1', $_POST)) {

            try {

                if (!isset($_POST['first_name'])) {
                    throw new \Exception('The fistname cannot be blank.');
                }

                if (!isset($_POST['last_name'])) {
                    throw new \Exception('The lastname cannot be blank.');
                }

                if (!isset($_POST['age'])) {
                    throw new \Exception('The age cannot be blank.');
                }

                if (!is_numeric($_POST['age']))
                {
                    throw new \Exception('The age must be numeric.');
                }

                echo (new CustomerService())->createCustomer(
                    $_POST['first_name'],
                    $_POST['last_name'],
                    $_POST['age']);

            } catch (\Exception $e) {
                echo $e->getMessage();
            }



        }
    ?> 

</body> 
  
</html> 
