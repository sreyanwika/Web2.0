<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
<xsl:template match="pu">
<html>
 <head>
    <title>creating table for the xml contentttt</title> 
</head>
<body bgcolor="grey">
<center>
<h1>The PU student infoooo..</h1>
<table border="1">
<tr>
<td>ROLLNo</td>
<td>NAME</td>
<td>COLLEGE</td>
<td>BRANCH</td>
<td>YEAR</td>
<td>EMAIL</td>
</tr>

<xsl:for-each select="student">
<tr><td><xsl:value-of select="RNo"/></td>
<td><xsl:value-of select="Name"/></td>
<td><xsl:value-of select="college" /></td>
<td><xsl:value-of select="branch" /></td>
<td><xsl:value-of select="year" /></td>
<td><xsl:value-of select="email" /></td></tr>
</xsl:for-each>

</table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
