<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
<title>1~10까지의 곱셈</title>
</head>
<!--  JSP로 생성한 HTML문서  -->
<body>
	<%-- 데이터를 처리하는 스크립트 --%>
	<%int result = 1;//리턴할 변수 초기화 
		/*1~10 반복의 for문*/
		for (int i=1; i<=10; i++){
			result*=i;
		}
	%>
	1부터 10까지 곱한 값은? <%= result %>
</body>
</html>