<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>Insert title here</title>
</head>
<body>
	2^1/4=<%=power(2,1) %><br>
	2^2/4=<%=power(2,2) %><br>
	2^3/4=<%=power(2,3) %><br>
	2^4/4=<%=power(2,4) %><br>
	2^5/4=<%=power(2,5) %><br>
</body>
</html>
	<%!
	private double power(int base, int exponent) {
		int result=1;
		for(int cnt=0; cnt<exponent; cnt++)
			result *= base;
			
			return (double)result/4;
	}		

	%>