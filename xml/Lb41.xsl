<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
<xsl:template match="pu">
<html>
<head>
<title>table of INFORMATION</title>
</head>
<body bgcolor="blue">
<center>
<h1>student infooo</h1>
<table border="1">
<tr>
<td>NAME</td>
<td>AGE</td>
<td>CLASS</td>
</tr>
<xsl:for-each select="stu">
<tr>
<td><xsl:value-of select="name" /></td>
<td><xsl:value-of select="age" /></td>
<td><xsl:value-of select="class" /></td>
</tr>
</xsl:for-each>
</table>
</center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>