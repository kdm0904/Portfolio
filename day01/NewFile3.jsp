<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>Insert title here</title>
</head>
<body>
	2*1=<%=power(2,1) %><br>
	2*2=<%=power(2,2) %><br>
	2*3=<%=power(2,3) %><br>
	2*4=<%=power(2,4) %><br>
	2*5=<%=power(2,5) %><br>
</body>
</html>
	<%!
	private int power(int base, int exponent) {
		int result= base*exponent;
		return result;
	}

%>