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
	String studentNum = request.getParameter("studentNum");
	String[] majors = request.getParameterValues("major");
%>

<h2>학생정보 입력결과</h2>

학번 : <%=studentNum%><p>
전공 : <%
		if(majors==null){
			out.println("전공없음");
		} else {
			for(int i=0; i<majors.length; i++){
				out.println(majors[i]+"");
			}
		}

%><p>
</body>
</html>