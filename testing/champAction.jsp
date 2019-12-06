<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="lolbeans.champsDAO" %>
<%@ page import="java.io.PrintWriter" %>
<% request.setCharacterEncoding("UTF-8"); %>
<jsp:useBean id="champ" class="lolbeans.champs" scope="page"/>
<jsp:setProperty name="champ" property="champ"/>    
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%
		champsDAO champsDAO =  new champsDAO();
		int result = champsDAO.select(champ.getChamp());
		if (result == 1) {
			PrintWriter script = response.getWriter();
			script.println("<script>");
			script.println("location.href = 'champs.jsp'");
			script.println("</script>");
		} else if (result == 0) {
			PrintWriter script = response.getWriter();
			script.println("<script>");
			script.println("alert('존재하지 않는 챔피언입니다')");
			script.println("</script>");
		} else if (result == -1) {
			PrintWriter script = response.getWriter();
			script.println("<script>");
			script.println("alert('데이터베이스 오류가 발생했습니다.')");
			script.println("</script>");
		}	
	%>
</body>
</html>