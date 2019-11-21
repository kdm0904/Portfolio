<%@page contentType="text/html; charset=euc-kr"%>
<%@page import="java.io.*, java.util.Date"%>
<HTML>
/*톰캣 아래에서 작업해야함*/
    <HEAD><TITLE>게시판 글쓰기 결과 화면</TITLE></HEAD>
    <BODY>
        <H2>글쓰기</H2>
        <% 
             request.setCharacterEncoding("euc-kr"); 
             String name = request.getParameter("NAME");
             String title = request.getParameter("TITLE");
             String content = request.getParameter("CONTENT");
             Date date = new Date();
             Long time = date.getTime();
             String filename = time + ".txt";
             PrintWriter writer = null;
             try {
                 String filePath = application.getRealPath("/WEB-INF/bbs/out.txt" + filename);
                 writer = new PrintWriter(filePath);
                 writer.printf("제목: %s %n", title);
                 writer.printf("글쓴이: %s %n", name);
                 writer.println(content);
                 out.println("저장되었습니다.");
             }
             catch (IOException ioe) {
                 out.println("파일에 데이터를 쓸 수 없습니다.");
             }
             finally {
                 try {
                     writer.close();
                 } 
                 catch (Exception e) {
                 }
             } 
        %>
    </BODY>
</HTML>
