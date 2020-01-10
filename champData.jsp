<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.sql.*" %>   
<%@ page import="com.beans.lol.champ.dao.*" %>  
<%@ page import="com.beans.lol.champ.*" %>  
<%@ page import="com.beans.lol.common.*" %>  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<jsp:useBean id="cvo" class="com.beans.lol.champ.ChampVO" scope="page"/>
	<jsp:setProperty name="cvo" property="*" />
	<hr>
	  
	챔피언 : <jsp:getProperty property="champ" name="cvo"/><p>
	<%	Connection conn = null;
    	PreparedStatement pstmt = null;
    	ResultSet rs = null;
		ChampVO champ = new ChampVO();
		try {
			conn = JDBCUtil.getConnection();
			String sql = "select*from champ where champ=?";
			pstmt = conn.prepareStatement(sql);
			pstmt.setString(1, cvo.getChamp());
			rs = pstmt.executeQuery();
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
		if(rs.next()) {
	%>	    
		   <tr>
		       <td align=center><%= rs.getString(2) %></td>
		       <td align=center><%= rs.getString(3) %></td>
		       <td align=center><%= rs.getString(4) %></td>
		       <td align=center><%= rs.getString(5) %></td>
		       <td align=center><%= rs.getString(6) %></td>
		       <td align=center><%= rs.getString(7) %></td>
		       <td align=center><%= rs.getString(8) %></td>
		       <td align=center><%= rs.getString(9) %></td>
		       <td align=center><%= rs.getString(10) %></td>
		       <td align=center><%= rs.getString(11) %></td>
		       <td align=center><%= rs.getString(12) %></td>
	       </tr>
	<% 
		}
	} catch(Exception e) {
		e.printStackTrace();
	} finally {
		JDBCUtil.close(rs, pstmt, conn);
	}
	%>	
	</table>
</body>
</html>