<HTML>
    <HEAD><TITLE>Sum of 1 to 100</TITLE></HEAD>
    <BODY>
        <% int total = 0;
           for (int cnt = 1; cnt <= 100; cnt++)
               total += cnt;
        %>
        1 + 2 + 3 + ... + 100 = <%= total %>
    </BODY>
</HTML>

