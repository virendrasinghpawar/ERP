<?php

    // configuration
    require("../includes/functions.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $Email=$BAN=$Religion=$MbNo=$DOB=$Blood="";
        $Email = test_input($_POST["Email"]);
        $BAN = test_input($_POST["BAN"]);
        $Religion = test_input($_POST["Religion"]);
        $MbNo= test_input($_POST["MbNo"]);
        $DOB = test_input($_POST["DOB"]);
        $Blood = test_input($_POST["Blood"]);
        $Hostler = test_input($_POST["Hostler"]);
        $Category = test_input($_POST["Category"]);
        $Drop = test_input($_POST["Drop"]);
        $Nationality = test_input($_POST["Nationality"]);
        $Gender = test_input($_POST["Gender"]);
        $Transport = test_input($_POST["Transport"]);


            if(empty($Email)||empty($Religion)||empty($MbNo)||empty($DOB)||empty($Hostler)||empty($Nationality)||empty($Gender)||empty($Drop)||empty($Category))
{
            echo "<b>* fields are compulsory to be filled</b>";
}

        else{

    
   echo $BAN,$Blood,$Category,$DOB,$Drop,$Email,$Gender,$Hostler,$Nationality,$Religion,$MbNo,$Transport ;


query("INSERT INTO pinfo (bank,bgroup,category,dob,email,gender,hreq,nationality,smbno,treq,religion,Gap)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)",$BAN,$Blood,$Category,$DOB,$Email,$Gender,$Hostler,$Nationality,$MbNo,$Transport,$Religion,$Drop);

}

       }
    else
    {
        // else render form
        //render("../templates/Step1.php", ["title" => "Reg-Step1"]);
    }

?>