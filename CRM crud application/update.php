
<?php




include("function.php");


$updateClient = new Clients();


if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){

    $editId = $_GET['edit_id'];
    $clientInformation = $updateClient -> getRecordById($editId);

    echo "edit id is " . $_GET['edit_id'];
}else{

    echo " we do not have edit id";
};


if (isset(($_POST['update']))){

     $data = $updateClient -> updateClient($_POST);

}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<div class="container">
        <header>
            <h2>CRM</h2>
        </header>
         
        <main>

            <div class="section">
                <h1>Update contact informtaion</h1>
                
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label for="business_name" >Business name</label>
                        <input type="text" class="form-control" name="business_name" id="business_name" value= "<?php echo $clientInformation['business_name']; ?>" placeholder="Enter your business name">
                    </div> 

                    <div class="form-group">
                        <label for="contact_name">Full Name</label>
                        <input type="text" class="form-control" name="contact_name" id="contact_name" value= "<?php echo $clientInformation['contact_name']; ?>" placeholder="Enter your name">
                    </div>  
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value= "<?php echo $clientInformation['email']; ?>" placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Address</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" value= "<?php echo $clientInformation['phone']; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="enquiry">Enquiry</label>
                        <input type="text" class="form-control" name="enquiry" id="enquiry" placeholder="Enter message" value= "<?php echo $clientInformation['enquiry']; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="products">Products</label>
                        <input type="text" class="form-control" name="products" id="products" placeholder="Enter products" value= "<?php echo $clientInformation['products']; ?>" >
                    </div>

                    <input type="hidden" name="id" value = "<?php echo $clientInformation['ID']; ?> ">

                  
                    <input type="submit" style="margin:20px;" name="update" value="Update Information" class="btn btn-primary">

                    <!-- <i class="fas fa-file"></i> -->
            
                </form>
        
        

                


</div>
    
</body>
</html>