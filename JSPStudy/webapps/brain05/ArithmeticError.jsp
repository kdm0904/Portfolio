<%@page contentType="text/html; charset=euc-kr" isErrorPage="true" %>
<% response.setStatus(200); %>
<HTML>
    <HEAD><TITLE>산술 연산 에러</TITLE></HEAD>
    <BODY>
        산술 연산 도중에 에러가 발생했습니다. <BR><BR>
        상세 에러 메시지: <%= exception.getMessage() %>
    </BODY>
</HTML>
