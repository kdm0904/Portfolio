<%@page contentType="text/html; charset=euc-kr"%>
<%
    String str1 = request.getParameter("NUM1");
    String str2 = request.getParameter("NUM2");
    int num1 = Integer.parseInt(str1);
    int num2 = Integer.parseInt(str2);
    int result = num1 * num2;
%>
<HTML>
    <HEAD><TITLE>°ö¼À ÇÁ·Î±×·¥</TITLE></HEAD>
    <BODY>
        <%= num1 %> * <%= num2 %> = <%= result %>
    </BODY>
</HTML>
