<html dir="rtl" lang="fa"><head><title>���Ԑ�� �������� ������ </title>

<meta http-equiv="Content-Type" content="text/html; Arabic(Windows)">
<html>
<body onload="if (document.all||document.layers) {regenerate2();update()}">


<script type="text/javascript">
<!--
function openwindow(){
	window.open ("clock.php","Setting","toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,left=300,top=200,width=400,height=300");
}
//-->
</SCRIPT>

<!-- header //-->
<DIV align=center>
<TABLE cellSpacing=0 width=950 border=0>
  <TBODY>
  <TR>
    <TD 
    style="PADDING-RIGHT: 4px; PADDING-LEFT: 4px; PADDING-BOTTOM: 1px; PADDING-TOP: 1px" 
    width=442><IMG height=74 
      src="files/jj6.jpg" width=260 border=0></TD>
    <TD 
    style="PADDING-RIGHT: 4px; PADDING-LEFT: 4px; PADDING-BOTTOM: 1px; PADDING-TOP: 1px" 
    vAlign=bottom width=504>
      <P align=right><IMG height=54 
      src="files//jj33.jpg" width=412 
    border=0></P></TD></TR></TBODY></TABLE></DIV>


<DIV align=center>
<TABLE height=1 cellSpacing=0 width=56 border=0>
  <TBODY>
  <TR>
    <TD width=56 height=4></TD></TR></TBODY></TABLE>

<DIV align=center>
<TABLE height=1 cellSpacing=0 width=56 border=0>
  <TBODY>
  <TR>
    <TD width=56 height=4></TD></TR></TBODY></TABLE>
<TABLE height=23 cellSpacing=0 width=950 border=0>
  <TBODY>
  <TR>
    <TD align=middle width=898 colSpan=4 height=2></TD></TR>
  <TR>
    <TD align=middle width=14 
    background="files\a4(1).jpg" 
    height=27>&nbsp; </TD>
    <TD align=middle width=234 
    background="files\a3(1).jpg" 
    height=2></TD>
    <TD align=middle width=676 
    background="files\a3(1).jpg" 
    height=27></td>
      <P align=right><FONT style="FONT-SIZE: 9pt" face=Tahoma 
      color=#333333><SPAN lang=en-us>&nbsp;</SPAN><A 
      style="TEXT-DECORATION: none" 
      href="index.php"><FONT color=#000000>
���� ����</FONT></A><SPAN lang=fa> </SPAN></FONT><FONT style="FONT-SIZE: 9pt" 
      face=Tahoma color=#9e2021>|</FONT><FONT style="FONT-SIZE: 9pt" face=Tahoma 
      color=#333333><SPAN lang=en-us>&nbsp;</SPAN><A 
      style="TEXT-DECORATION: none" 
      href="admin.php"><FONT color=#000000>
��� �������</FONT></A><SPAN lang=fa> </SPAN></FONT><FONT 
      style="FONT-SIZE: 9pt" face=Tahoma color=#9e2021>|</FONT><FONT style="FONT-SIZE: 9pt" face=Tahoma 
      color=#333333><SPAN lang=en-us>&nbsp;</SPAN><A 
      style="TEXT-DECORATION: none" 
      href="info.html"><FONT color=#000000>
������� ����</FONT></A><SPAN lang=fa> </SPAN></FONT><FONT 
      style="FONT-SIZE: 9pt" face=Tahoma color=#9e2021>|</FONT><FONT style="FONT-SIZE: 9pt" face=Tahoma 
      color=#333333><SPAN lang=en-us>&nbsp;</SPAN><A 
      style="TEXT-DECORATION: none" 
      href="links.html"><FONT color=#000000>
����� ��</FONT></A><SPAN lang=fa> </SPAN></FONT><FONT style="FONT-SIZE: 9pt" 
      face=Tahoma color=#9e2021>|</FONT><FONT style="FONT-SIZE: 9pt" face=Tahoma 
      color=#333333><SPAN lang=en-us>&nbsp;</SPAN><A 
      style="TEXT-DECORATION: none" 
      href="clock.php"><FONT color=#000000>
���� �� ��</FONT></A><SPAN lang=fa> </SPAN></FONT></P></TD>

    <TD align=middle width=18 
    background="files\a2(1).jpg" 
    height=27>&nbsp;</TD></TR></TBODY></TABLE>
 


<hr width=100%></hr>
<!-- header_eof //-->
</body>
</html>
<!--------------------------------------------------------------------------------------------------------------------
<?php

$chkusername=$_POST['txtuser'];
$chkpassword=$_POST['txtpass'];

$welcome="��� �����";
$chkfound=0;	
	
	function checkuser($chkusername,$chkpassword){
	
		$link=mysql_connect("localhost","root","");
  		mysql_select_db("frooshgah",$link);
  	
		$sql="SELECT *  FROM members WHERE username= '$chkusername'";
  		$result1 = mysql_query($sql,$link);
  	
  		if ($row = mysql_fetch_array($result1))  return 1;
	}  	
	
	function funcuser($usernow,$chkfound){
	  
	  
		if ($chkfound==0) {
			echo'
			<table border="1" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" width="100%" height="80%"  > 
		    <tr><td> 		   
		   	 <center><font face="tahoma" size="2" color="#000000"> </center>
			    <p align="right">
				 <form method="POST" action="index.php" enctype="application/x-www-form-urlencoded" name="frmlogin" lang="English" dir="LTR">
<center><font face="tahoma" size="2" color="#5500FF"><b> <a href="index.php">���� ����</a><br></br><a href="mailto:tavangarimiras@gmail.com">��� ����������</a><br><br/><a href="http://www.arshiv.com">�����</a>  </b></a>
<br><br></br>
				 
					
			</form> </p></td></tr></table>';
		}else { echo '
		<table border="1" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" width="100%" height="40"  > 
		    <tr><td>
		       <center><font face="tahoma" size="2" color="#000000"> <br /></center>
			    <p align="right">
				 <form method="POST" action="index.php" enctype="application/x-www-form-urlencoded" name="frmlogin" lang="English" dir="LTR">
					<center><font face="tahoma" size="2" color="#000000"> ��� �����
					<br /><br />
					<center><b><font face="tahoma" size="2" color="#000000">',$usernow,'</b>
					<br /><br />
					<center><input type="image" src="files/button_exit.gif" name="imgexit" title="����" />
					<br /> 
				              <p align=left><font face=homa color=red><a href=ff.php><strong>���� ���� ����</strong></a></p>
				</form> </p></td></tr></table>';
		}		
				 
	}
	

echo '
<br />
<table border="0" align="center" width="100%" bgcolor="#FFFFFF">
<tbody><tr>   
		<td  width="20%"  height="50" valign="top" bgcolor="#FFFFFF">
			<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" align="center"><tbody><tr> <td> <table border="0" cellpadding="0" cellspacing="0"><tr><td ><img src="files/corner_left.gif"></td><td background="files/corner_center.gif" width="100%"><font face="tahoma" size="2" color="#FFFFFF"><b>������� ������</b></font></td><td><img src="files/corner_right.gif"></td></tr></table></tr></tbody></table>		
			<table border="1" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" width="100%" align="center"><tr><td><font face="tahoma" size="2" color="#0055FF">���� ������� <br /><hr width="100%">������<br /><hr width="100%">����� <br/><hr width=100%>���� ������ ��<br/><hr width=100%>���� ����<br/><hr width=100%>ǁ� �����  </br><hr width=100%>3��� ����</br><hr width=100%>������� ������ <br><hr width=100%>���� ��� ���� <br><hr width=100%>����<br><hr width=100%>�� �� ���<br><hr width=100%>�� �� <br><hr width=100%>�������� <br><hr width=100%> Ǎ �� �� <br><hr width=100%> �� ���</td></tr></table>
			<table border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" align="center"><tr><td><center><font face="tahoma" size="2" color="#0055FF"><br /><b>������ ���</b><br /><FORM method=GET action="http://www.google.com/search"><A HREF="http://www.google.com/"><IMG SRC="/files/Logo_google.gif"></A>	<INPUT TYPE=text name=q size=31 maxlength=255 value="">	<INPUT TYPE=hidden name=hl value="en"><INPUT type=submit name=btnG VALUE="Google Search"></FORM></center></td></tr></table>
			<table border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" align="center"><tr><td><center><font face="tahoma" size="2" color="#0055FF"><br /><b><a href="http://www.downloadha.com">������ ��� �����</a></b><br></br><a href="http://www.karimi.com">������ ��� ����� ������</a><br></br><font color="BLACK">����� �� ��� ����</font><br>	<INPUT TYPE=text name=q size=15 maxlength=100 value="��� ���"><br><INPUT TYPE=text name=q size=15 maxlength=100 value="����� ���"><br><input type=radio>�����  <input type=radio>��� �����	</center></td></tr></table>
			<table border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" align="center"><tr><td><center><font face="tahoma" size="2" color="#0055FF"><IMG SRC="/files/rr.gif"><br>user not specified.</br>	</center></td></tr></table>
			<table border="1" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" width="100%" align="center"><tr><td></td></tr></table>	
		</td> 
		<td  width="60%" align="center" valign="top" bgcolor="#FFFFFF"> 
			 <table border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF" width="100%" height="30"><tbody><tr><td align="center"><b><font face="tahoma" size="3" color="#FFAA55"></style><div id="msgline"><div id="msgtext" class="msgtextfont">Welcome To Iran Kala...</div></div></b></td></tr></table>
			 <table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" align="center"><tbody><tr> <td> <table border="0" cellpadding="0" cellspacing="0"><tr><td ><img src="files/corner_left.gif"></td><td background="files/corner_center.gif" width="100%"><font face="tahoma" size="2" color="#FFFFFF"><b>���� ���� ������ </b></font></td><td><img src="files/corner_right.gif"></td></tr></table></tr></tbody></table>
			 <table border="1" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF" width="100%" >
			 <tbody><tr>
			 	 	<td width="20%" align="center"><br /><img src="files/ss.jpg"><br /><p align="center">������ ǁ� iPhone 4G <br>1,5000 �����</p></td>	
			 	 	<td width="20%" align="center"><br /><img src="files/ss1.jpg"><br /><p align="center">������ ���� 8800<br>1,585,000 �����</p></td>
			 	 	<td width="20%" align="center"><br /><img src="files/ss8.jpg"><br /><p align="center">ǁ� iPhone 4G 16Gb<br>1,85000 �����</p></td></td>
			  		</tr> <tr>
			  		<td width="20%" align="center"><br /><img src="files/ss3.jpg"><br /><p align="center">������ I9000 GALAXY S<br>85000 �����</p></td>	
			 	 	<td width="20%" align="center"><br /><img src="files/ss4.jpg"><br /><p align="center">Ǎ �� �� Desire HD<br>95000 �����</p></td>
			 	 	<td width="20%" align="center"><br /><img src="files/ss5.jpg"><br /><p align="center">Ǎ �� �� Desire HD2<br>105000 �����</p></td></td>

			  		</tr><tr>
			  		<td width="20%" align="center"><br /><img src="files/ss6.jpg"><br /><p align="center">������ ��� 119<br>100000 �����</p></td>	
			 	 	<td width="20%" align="center"><br /><img src="files/ss7.jpg"><br /><p align="center">����� ��� ��550<br>1045000 �����</p></td>
			 	 	<td width="20%" align="center"><br /><img src="files/ss9.jpg"><br /><p align="center">���� ��� �� 2500<br>1005000 �����</p></td>
			  		</tr><tr>
			  		<td width="20%" align="center"><br /><img src="files/ss15.jpg"><br /><p align="center">Ǎ �� �� Desire HD3<br>105000 �����</p></td>	
			 	 	<td width="20%" align="center"><br /><img src="files/ss21.jpg"><br /><p align="center">ǁ� ��� k50<br>1225000 �����</p></td>
			 	 	<td width="20%" align="center"><br /><img src="files/ss23.jpg"><br /><p align="center">�� �� ��� 2500<br>1050000 �����</p></td>
			 </tbody></table>
<p align=right ><font color=red>��� ����� �����</font></p>		
<p align=rtl>�ј� ����� ������ �� ��� ������ �� ���� ���� �� ������ ������� ���. ��� ���� �� ������ �� ���� ��� �ǁ�� ����� ��塐��� ������ ���� ���Ԙ����...</p>
		<p align=rtl>�� ����� ���� �� ��� �� �����ҡ ������ ���� ����� �� ���� ����� �� ��� ��� ����� ��� �� ������� �� ���� ����� ��� ������ � ����� ���� �� ���� �� ������ ���� ������ ���� </p>
		
<p align=rtl>�� ����� �� �� �� ���� �� ��� �� SlashPhone������ ������ ������ ��� ������ ��������� ���� �� ����� 28 �����ѡ �� ���� 1906 ��� ������ ���� ��������� </p>
</td>'; 
echo'	<td width="60%" align="center" valign="top" bgcolor="#FFFFFF"> 
 			
		 <table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="30%" >
		   <tbody><tr> <td> <table border="0" cellpadding="0" cellspacing="0"><tr><td ><img src="files/corner_left.gif"></td><td background="files/corner_center.gif" width="100%"><font face="tahoma" size="2" color="#FFFFFF"><b>������</b></font></td><td><img src="files/corner_right.gif"></td></tr></tbody></table>';

			 	$chkfound=checkuser($chkusername,$chkpassword);
				funcuser($chkusername,$chkfound);

    	  echo'
			<table border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" width="100%" >
			   <tr><td> 
			     <table border="0" cellpadding="0" cellspacing="0"><tr><td ><img src="files/corner_left.gif"></td><td background="files/corner_center.gif" width="100%"><font face="tahoma" size="2" color="#FFFFFF"><b>�������</b></font></td><td><img src="files/corner_right.gif"></td></tr></tbody></table>
				  <center> <br/> <img src="files/hh.jpg" width=130 ><br /><hr width="90%"><br />
				  
				

<a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/60.gif" border="0" height="130" width="100"></a></br><hr width="90%"><a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/80.gif" border="0" height="130" width="100"></a>
<br>
<a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/60.gif" border="0" height="130" width="100"></a></br><hr width="90%"><a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/ff.gif" border="0" height="130" width="100"></a>	
<br>
<a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/60.gif" border="0" height="130" width="100"></a></br><hr width="90%"><a target="_blank" href="http://www.javakhafan.7p.com/"> <img src="files/hhh.gif" border="0" height="130" width="100"></a>			  
		       </td></tr></table>
		   </td></tr></table>
		   </td></tr></tbody></table>
		
		 </td>';
			

echo '</tr></tbody></table>';



?>
<p align=center><font face=tahoma size=1 color=blue><a href="http://www.facebook.com>">facebook</a>-<a href="http://www.twitter.com">twitter</a>-<a href="http://www.google+.com">google</a>-<a href="http://www.yahoo.com">yahoo</a></font></p>
<p align=center><font color=red>.................................................................................................................................................</font></p>
<p align=center bgcolor="#cccccc"><a href="http://www.shm.com">����� ����� ���� � ����:��� ���� ������ - �ј� ��� ������ �� Ǎ �� ���� ����� �� 1389</a></p>
<html>




<script language="JavaScript1.2">

var speed=6000
var news=new Array()
news[0]="�� �� ���� ���Ԑ�� ������ �����  ��� �����"
news[1]="���� ���ϐ�� : ������� ������"
news[2]="����� ������ : ����� ������"
news[3]="���� ��� ������ ����� ����� �� �� "

i=0
if (document.all)
tickerobject=document.all.msgtext.style
else
tickerobject=document.msgline.document
function regenerate(){
window.location.reload()
}
function regenerate2(){
if (document.layers)
setTimeout("window.onresize=regenerate",850)
}

function update(){
 BgFade(0xff,0xff,0xff, 0x00,0x00,0x00,10);
if (document.layers){
document.msgline.document.msgtext.document.write('<span class="msgtextfont">'+news[i]+'</span>')
document.msgline.document.msgtext.document.close()
}
else 
document.all.msgtext.innerHTML=news[i]

if (i<news.length-1)
i++
else
i=0
setTimeout("update()",speed)
}

 function BgFade(red1, grn1, blu1, red2,
 grn2, blu2, steps) {
 sred = red1; sgrn = grn1; sblu = blu1; 
 ered = red2; egrn = grn2; eblu = blu2; 
 inc = steps; 
 step = 0; 
 MsgDither();
 }
 function MsgDither() {
 var epct = step/inc; 
 var spct = 1 - epct; 
 if (document.layers)
 tickerobject.bgColor =
 Math.floor(sred * spct + ered *
 epct)*256*256 +
 Math.floor(sgrn * spct + egrn * epct)*256 +
 Math.floor(sblu * spct + eblu * epct); 
 else
 tickerobject.backgroundColor=
 Math.floor(sred * spct + ered *
 epct)*256*256 +
 Math.floor(sgrn * spct + egrn * epct)*256 +
 Math.floor(sblu * spct + eblu * epct); 
 if ( step < inc ) {
 setTimeout('MsgDither()',80); 
 }
 step++;
 }

</script>

  

<SCRIPT language=JavaScript>
      function Eins()
        {window.status = "! ^---^---^---^--- * [���� �������: ������� ������] * ---^---^---^---^ !"; setTimeout("Zwei()",200);}
      function Zwei()
        {window.status = "! -^---^---^---^-- * [  ���� �������: ��� ���� ������ ] * --^---^---^---^- !"; setTimeout("Drei()",200);}
      function Drei()
        {window.status = "! --^---^---^---^- * [      ���� �������: ��� ���� ������] * -^---^---^---^-- !"; setTimeout("Eins()",200);}
      function Drei()
        {window.status = "! ---^---^---^---^ * [   ���� �������: ��� ���� ������   ] * ^---^---^---^--- !"; setTimeout("Eins()",200);}
      Eins();

    </SCRIPT>


</html>