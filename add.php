

<?php
    $action = "";
    if (!empty($_POST["action"])) $action = $_POST["action"];
    $editId = "";
    if ($action == "edit")
    {


    $editId = $_POST["editId"];
            $fileName = "filename.txt";
            $readData = file("filename.txt", FILE_IGNORE_NEW_LINES);    


    list($name, $phone, $address, $gender) = array_pad(explode("|---|", $readData[$editId], 3), 3, null);  
            $action = "edit";
        $submit = "Update";
        $formTitle = "Edit Record";
    }

    else
    {   
        $name = "";
        $phone = "";
        $email = "";
        $address = "";
        $gender = "";
        $action = "add";
        $submit = "Add";
        $formTitle = "RECORD PATIENTS";

}
?>

<html>
    <head>
           <title> Patient Records</title>
    </head>
    <body>

    <div>  </div>
        <center>
            <form action="display.php" method="post" name="recordForm" id="recordForm">
            <label><?=$formTitle?></label>
                <table style="border:5px solid black;S" width="360"> 

                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="username" id="username" size="21" style="font-family:Verdana; 
                          font-size:16px;" value="<?=$name?>"/></td>
                    </tr>

                    <tr>
                        <td>Phone:</td>  
                        <td><input type="text" name="userphone" id="userphone" size="21" style="font-family:Verdana; 
                       font-size:16px;" value="<?=$phone?>"/></td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="useraddress" id="useraddress" size="21" style="font-family:Verdana; 
                          font-size:16px;" value="<?=$address?>"/></td>
                    </tr>

                    <tr>
                        <td>Gender:</td>
                        <td><input type="text" name="usergender" id="usergender" size="21" style="font-family:Verdana; 
                          font-size:16px;" value="<?=$gender?>"/></td>
                    </tr>


                    <tr>
                        <td>&nbsp;</td>                         
                        <td>
                            <input type="hidden" id="editId" name="editId" value="<?=$editId?>"/>
                            <input type="submit" id="btnSubmit" name="btnSubmit" value="<?=$submit?>"/>
                            <input type="hidden" name="action" id="action" value="<?=$action?>"/> 
                        </td>
                    </tr>
                </table>
            </form> 
        </center>
    </body>
</html>