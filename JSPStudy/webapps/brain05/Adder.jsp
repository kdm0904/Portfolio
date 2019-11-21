<%@page contentType="text/html; charset=euc-kr"%>
<%
    int num1 = 0, num2 = 0, result = 0;
    try {
        String str1 = request.getParameter("NUM1");
        String str2 = request.getParameter("NUM2");
        num1 = Integer.parseInt(str1);
        num2 = Integer.parseInt(str2);
        result = num1 + num2;
    } 
    catch (NumberFormatException e) {
        RequestDispatcher dispatcher = request.getRequestDispatcher("DataError.jsp");
        dispatcher.forward(request, response);
    }
%>
<HTML>
    <HEAD><TITLE>µ¡¼À ÇÁ·Î±×·¥</TITLE></HEAD>
    <BODY>
        <%= num1 %> + <%= num2 %> = <%= result %>
    </BODY>
</HTML>
