<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>1~10������ ����</title>
</head>
<!--  JSP�� ������ HTML����  -->
<body>
	<%-- �����͸� ó���ϴ� ��ũ��Ʈ --%>
	<%int result = 1;//������ ���� �ʱ�ȭ 
		/*1~10 �ݺ��� for��*/
		for (int i=1; i<=10; i++){
			result*=i;
		}
	%>
	1���� 10���� ���� ����? <%= result %>
</body>
</html>