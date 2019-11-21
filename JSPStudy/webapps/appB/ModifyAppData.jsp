<%@page contentType="text/html; charset=euc-kr"%>
<HTML>
    <HEAD><TITLE>애플리케이션 애트리뷰트 수정</TITLE></HEAD>
    <BODY>
        <% application.setAttribute("TEMP_DIR", "c:\\new_temp"); %>
        애플리케이션 애트리뷰트 값이 수정되었습니다.
    </BODY>
</HTML>
