<?php include ("User.php"); ?>
<html>

<head>
</head>
<body>
    <form method="post" action="msg.php">
        <table>
            <tr>
                <td>
        Username 
</td>
    <td>
        Email 
</td>
</tr>
    <tr>
        <td>
        <input type="text" name="username" size="50">
        
        </td>

        <td>
        <input type="email" name="email" size="50">
</td>
<tr>
                <td>
       Phone
</td>
    <td>
        Subject
</td>
</tr>
    <tr>
        <td>
        <input type="text" name="phone" size="50">
        
        </td>

        <td>
        <input type="text" name="Subject" size="50">
</td>

<tr>
                <td>
        Messsage 
</td>

</tr>
    <tr >
        <td colspan ="2">
             
        <textarea name="Message" rows="10" col="100"  placeholder="Message"></textarea>
</td>

</tr>
<tr>
    <td>
<input type="submit" name="submit" value="Click here">
<td>
</tr>
</table>

</form>

<?php

$s= new User();

session_start();
$serializeuser=serialize($s); //serialize object before sending
$_SESSION['user']=$serializeuser;

?>

</body>
    </html>
