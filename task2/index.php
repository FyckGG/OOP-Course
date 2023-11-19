<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        Photo calculator
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        Photo calculator 
    </h1> 
      
    <h4> 
        Choose the service parameters
    </h4> 
  
    <form method="post"> 
        <label for="size">
            Photo size
            <select id='size' name='size'>
                <option value="10x15">10x15</option>
                <option value="11x15">11x15</option>
                <option value="13x13">13x13</option>
                <option value="13x18">13x18</option>
                <option value="15x15">15x15</option>
                <option value="15x15">15x20</option>
                <option value="15x21">15x21</option>
                <option value="15x22">15x22</option>
                <option value="20x30">20x30</option>
            </select>
        <label for="count">
            Photo count
            <input type="number" name="count" min="1"/>
        </label>
        <input type="checkbox" id="is_color" name="is_color" value="is_color">
        <label for="is_color">Color</label>
        <input type="submit" name="button1"
                class="button" value="Get price" /> 
          
    </form> 
    <br/>
    <?php
        require_once ('PhotoService.php');
        require_once('Photo.php');

        if(array_key_exists('button1', $_POST)) {

            $photo = new Photo($_POST['size'], isset($_POST['is_color']) ? true : false);

           echo 'The price of your order: ' . getPrice($photo, $_POST['count'] ? $_POST['count'] : 1); 
        } 
        function getPrice(Photo $photo, int $count) :float
        {
            $photoService = new PhotoService();

            return $photoService->calculateServicePrice($photo, $count);
        }
    ?> 

</body> 
  
</html>