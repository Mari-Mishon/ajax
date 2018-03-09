<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Table</title>
  <meta name="author" content="wh-db.com">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
	
<span id="table">
<table border>
<tr> 
<td align="center" rowspan="2">IEC104</td> 
<td align="center" colspan="3">Modbus </td> 
<td align="center" rowspan="2">GPIO</td> 
</tr> 
<tr> 
<td align="center">Adress</td> 
<td align="center">Function code</td> 
<td align="center">Data type</td> 
</tr> 
<tr> 
<td> <input type="text" name="adress1" id="IEC_adress_1" value="Adress [1]"></td> 
<td> <input type="text" name="Madress1" id="Modbus_adress_1" value="Modbus Adress [1]"></td> 
<td> <input type="number" name="Code1" id="Code_function1"></td> 
<td> <input type="text" name="Type1" id="Data_type1"></td> 
<td> <input type="number" name="gpio1"></td> 
</tr> 
<tr> 
<td> <input type="text" name="adress2" id="IEC_adress_2" value="Adress [2]"></td> 
<td> <input type="text" name="Madress2" id="Modbus_adress_2" value="Modbus Adress [2]"></td> 
<td> <input type="number" name="Code2" id="Code_function2"></td> 
<td> <input type="text" name="Type2" id="Data_type2"></td> 
<td> <input type="number" name="gpio2"></td> 
</tr> 
<tr> 
<td> <input type="text" name="adress3" id="IEC_adress_3" value="Adress [3]"></td> 
<td> <input type="text" name="Madress3" id="Modbus_adress_3" value="Modbus Adress [3]"></td> 
<td> <input type="number" name="Code3" id="Code_function3"></td> 
<td> <input type="text" name="Type3" id="Data_type3"></td> 
<td> <input type="number" name="gpio3"></td> 
</tr> 
<tr> 
<td> <input type="text" name="adress4" id="IEC_adress_4"value="Adress [4]"></td> 
<td> <input type="text" name="Madress4" id="Modbus_adress_2" value="Modbus Adress [4]"></td> 
<td> <input type="number" name="Code4" id="Code_function4"></td> 
<td> <input type="text" name="Type4" id="Data_type4"></td> 
<td> <input type="number" name="gpio4"></td> 
</tr> 


<tr id="newline" nomer="[5]">
<td><input type="text" name="adress[5]"  value="Adress [5]"></td>
<td><input type="text" name="Madress[5]" value="Modbus Adress [5]"></td>
<td><input type="number" name="Code[5]"></td>
<td><input type="text" name="Type[5]"></td>
<td> <input type="number" name="gpio[5]"></td> 
</tr></table>
</span>
  <a href="#" onclick="return addline();">Add</a></td></tr> 

    <br>
<script>
var c=5; //������� ���������� �����
function addline()
{
	c++; // ����������� ������� �����
	s=document.getElementById('table').innerHTML; // �������� HTML-��� �������
	s=s.replace(/[\r\n]/g,''); // �������� ��� ������� �������� �����
	re=/(.*)(<tr id=.*>)(<\/table>)/gi; 
                // ��� ���������� ��������� ��������� �������� ��������� ������ �������
	s1=s.replace(re,'$2'); // �������� HTML-��� ��������� ������ �������
	s2=s1.replace(/\[\d+\]/gi,'['+c+']'); // �������� ��� ����� � ���������� �������
                // �� ����� ����� ������
	s2=s2.replace(/(rmline\()(\d+\))/gi,'$1'+c+')');
                // �������� �������� ������� rmline �� ����� ����� ������
	s=s.replace(re,'$1$2'+s2+'$3');
                // ������ HTML-��� � ����������� ����� ����� ������
	document.getElementById('table').innerHTML=s;
                // ���������� ��������� �� ����� �������� �������
	return false; // ����� �� ���������� ������� �� ������
}
function rmline(q)
{
                // if (c==0) return false; else c--;
                // ���� ����������������� ���������� �������, �� ��������� (������������) 
                // ������� ������� ����� ������.
	s=document.getElementById('table').innerHTML;
	s=s.replace(/[\r\n]/g,'');
	re=new RegExp('<tr id="?newline"? nomer="?\\['+q+'.*?<\\/tr>','gi');
                // ��� ���������� ��������� ��������� �������� ������ ������� � �������� �������
	s=s.replace(re,'');
                // �������� � �� ������ �����
	document.getElementById('table').innerHTML=s;
	return false;
}
</script>
  <input type="button" id="btn" value="Send" />
    </form>
    <div id="result_form"><div> 
</body>
</html>