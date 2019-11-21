<%@page contentType="text/html; charset=euc-kr" errorPage="UploadError.jsp" %>
<%@page import="myutil.MultiPart"%>
<%@page import="java.net.URLEncoder"%>
<%
    MultiPart multiPart = new MultiPart(request);
    String title = multiPart.getParameter("TITLE");
    String description = multiPart.getParameter("DESCRIPTION");
    String fileName = multiPart.getFileName("UPLOAD_FILE");
    String newPath = application.getRealPath("/files/" + fileName);
    multiPart.saveFile("UPLOAD_FILE", newPath);
    String url = String.format("UploadResult.jsp?TITLE=%s&DESCRIPTION=%s&FILE_NAME=%s",
                               URLEncoder.encode(title, "EUC-KR"), 
                               URLEncoder.encode(description, "EUC-KR"), 
                               URLEncoder.encode(fileName, "EUC-KR"));
    response.sendRedirect(url); 
%>
