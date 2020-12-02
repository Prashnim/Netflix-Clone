<?xml version = "1.0" encoding = "UTF-8"?> 
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match = "/"> 
<html>
<head> 
<title>Welcome to Sparkle</title>
<style>
    body{
        background-image: url('stars.jpg');
        background-size:100% 100%;
        background-repeat: no-repeat;
    }
</style>   
</head> 
<body>
<iframe src="sparkleLogo.png" width="100%" height="77" style="border:1px solid white; background-color:white;">

</iframe>
<h1 style="color:yellow;"> <center> Sparkle Membership Options </center></h1> <h2 style="color:yellow;"><center>Details</center></h2> 
<table border = "1" align="center" style="border-color:#0753ff;"> 
<tr bgcolor = "pink"> <th>ID</th> <th>Payment Type</th> <th>Price (Rs)</th> <th>Duration</th></tr>
<xsl:for-each select = "class/product"> 
<xsl:sort select = "@prodID"/> 
<tr> 
<td bgcolor = "#a3b9f7"><xsl:value-of select = "@prodID"/></td> 
<td bgcolor = "#a3b9f7"><xsl:value-of select = "paymentType"/></td> 
<td bgcolor = "#a3b9f7"><xsl:value-of select = "price"/></td> 
<td bgcolor = "#a3b9f7"><xsl:value-of select = "duration"/></td> 
</tr> 
</xsl:for-each> 
</table> 

   <style>
            .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 30%;
            height:7%;
            background-color: blue;
            color: white;
            text-align: center;
            }
            </style>

            <div class="footer">
            <p style="color:white;">Contact:sparkle@gmail.com</p>
            </div>
</body> </html> 
</xsl:template> 
</xsl:stylesheet>