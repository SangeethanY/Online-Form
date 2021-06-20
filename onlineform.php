<?php
$con=new mysqli("localhost","root","","admin01");
if($con->connect_errno)
{
    echo $con->connect_error;
}
else
{
    echo "data connect";
}
?>


<html>
<head>
<title>online banking system</title>
</head>
<style type="text/css">
h2
{
font-variant:Small-Caps;
}
h1
{
font-family:Monotype Corsiva;
font-size:12pt
}
</style>
<script type="text/javascript">
function fun(he)
{
alert("your select "+he.value);
}
</script>
<body bgcolor="khaki">
<center>
<h2>ON-LINE REGISTRATION FORM</h2>
</center>
<form action="onlineform.php" method="post">
<table>
<tr><td><b><h1>Name:</h1></b></td><td><input type="text" name="user"></td></tr>
<tr><td><b><h1>Password:</h1></b></td><td><input type="password" name="paswd"><td/></tr>
<tr><td><b><h1>Sex:</h1></b></td><td><input type="radio" name="sex" value="Male" onclick=fun(this)>Male</td>
<td><input type="radio"name="sex" value="Female" onclick=fun(this) >Female</td></tr>
<tr><td><b><h1>Account Type:</h1></b></td><td><select name="MyMenu"><option value="Savings Account">Savings Account</option>
<option value="Current Account">Current Account</option>
</select>
</td>
</tr>
<tr><td><b><h1>Account Number:</h1></b></td><td><input type="text" name="AccNo"></tr>
<tr><td><b><h1>Facilities</h1></b></td><td><input type="checkbox" name="option1" value="ATM card">ATM card</td></tr>
<tr><td></td><h1><td><input type="checkbox" name="option2" value="Cheque book"></h1>Cheque book</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
</table>
</form>
<?php
$user=$_POST["user"];
$paswd=$_POST["paswd"];
$sex=$_POST["sex"];
$MyMenu=$_POST["MyMenu"];
$AccNo=$_POST["AccNo"];
$option2=$_POST["option1"];
$option2=$_POST["option1"];
$sql="INSERT INTO details(username,password,sex,mymenu,accno,option1,option2) VALUES('$user','$paswd','$sex','$MyMenu','$AccNo','$option2','$option2')";
if(isset($_POST["submit"]))
{
    if($result=$con->query($sql))
    {
        echo "data store";
         
        while($run=$result->fetch_object())
        {
            echo $run;
        }
        
        
    }
    else
    {
        echo "data faild";
    }

}
else
{
    echo "please enter datas";
}
?>
</body>
</html>
