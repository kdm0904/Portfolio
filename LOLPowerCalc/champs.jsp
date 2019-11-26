<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<% request.setCharacterEncoding("UTF-8"); %>
	<jsp:useBean id="champs" class="javabeans.ChampBeans" scope="page"/>
	<jsp:setProperty property="*" name="champs"/>
	<hr>
	
	챔피언 : <jsp:getProperty property="champ" name="champs"/><p>
	레벨 : <jsp:getProperty property="level" name="champs"/><p>
	정보 : <%=champs.Akali()%>
</body>
</html>