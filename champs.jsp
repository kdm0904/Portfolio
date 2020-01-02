<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.sql.*" %>    
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<% request.setCharacterEncoding("UTF-8"); %>
	<jsp:useBean id="champs" class="lol.champs.Champs" scope="page"/>
	<jsp:setProperty property="*" name="champs"/>
	<hr>
	
	챔피언 : <jsp:getProperty property="champ" name="champs"/><p>
	레벨 : <input type=text name="level"><p>
	
	<%
    Connection conn = null;
    PreparedStatement pstmt = null;
    //String driverName = "org.gjt.mm.mysql.Driver";
    String driverName = "com.mysql.jdbc.Driver";
    String dbURL = "webdeveloper.iptime.org/phpmyadmin";
    try {
        Class.forName(driverName);
        String SQL = "select*from champ where champ = ?";
        conn = DriverManager.getConnection(dbURL, "kdm", "kdm1234");
        pstmt = conn.prepareStatement(SQL);
        ResultSet result = pstmt.executeQuery("");
%>
    <table width=100% border=2 cellpadding=1>
    <tr>
       <td align=center><b>체력</b></td>
       <td align=center><b>체력 재생</b></td>
       <td align=center><b>자원</b></td>
       <td align=center><b>자원 재생</b></td>
       <td align=center><b>공격력</b></td>
       <td align=center><b>공격속도</b></td>
       <td align=center><b>방어력</b></td>
       <td align=center><b>마법 저항력</b></td>
       <td align=center><b>사거리</b></td>
       <td align=center><b>이동속도</b></td>
       <td align=center><b>주문력</b></td>
    </tr>
<%
        while (result.next()) {
%>
    <tr>
       <td align=center><%= result.getString(2) %></td>
       <td align=center><%= result.getString(3) %></td>
       <td align=center><%= result.getString(4) %></td>
       <td align=center><%= result.getString(5) %></td>
       <td align=center><%= result.getString(6) %></td>
       <td align=center><%= result.getString(7) %></td>
       <td align=center><%= result.getString(8) %></td>
       <td align=center><%= result.getString(9) %></td>
       <td align=center><%= result.getString(10) %></td>
       <td align=center><%= result.getString(11) %></td>
       <td align=center><%= result.getString(12) %></td>
    </tr>
<%
        }
        result.close();
    }
    catch(Exception e) {
    	out.println("MySql 데이터베이스 univdb의 student 조회에 문제가 있습니다. <hr>");
        out.println(e.toString());
        e.printStackTrace();
    }
    finally {
        if(pstmt != null) pstmt.close();
        if(conn != null) conn.close();
    }
%>
</table>
</body>
</html>