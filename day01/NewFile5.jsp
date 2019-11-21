<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>Insert title here</title>
</head>
<body>
	10^11%12=<%=power(10,11) %><br>
</body>
</html>
<%!
	private long power(int base, int exponent) {
		long result=1;
		for(int cnt=0; cnt<exponent; cnt++)
			result *= base;
		return result%12;
	}

%>