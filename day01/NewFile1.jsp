<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<%@ page import="java.util.GregorianCalendar" %>    
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>Insert title here</title>
</head>
<body>
	<%
		GregorianCalendar now = new GregorianCalendar();
		String date = String.format("%TF",now);
		String time = String.format("%TT",now);
	%>
	<h1>������ ��¥ : <%=date%></h1>
	<h1>������ �ð� : <%=time%></h1>
</body>
</html>