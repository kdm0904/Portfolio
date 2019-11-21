<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>인사하기</title>
</head>
<body>
<%
	request.setCharacterEncoding("utf-8");
%>

안녕하세요 <%=request.getParameter("your_name") %> 님
</body>
</html>