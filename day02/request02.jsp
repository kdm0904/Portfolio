<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<%
	request.setCharacterEncoding("utf-8");
%>

<%
	String name= request.getParameter("Name");
	String studentNum= request.getParameter("studentNum");
	String sex= request.getParameter("sex");
	String country= request.getParameter("country");
	
	if(sex.equalsIgnoreCase("man")){
		sex="남자";
	} else {
		sex="여자";
	}
%>

<h2>학생정보 입력결과</h2>

성명 : <%=name %><p>
학번 : <%=studentNum %><p>
성별 : <%=sex %><p>
국적 : <%=country %><p>

</body>
</html>