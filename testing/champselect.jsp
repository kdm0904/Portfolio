<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="champAction.jsp" method="post">
		<table cellspacing=1 cellpadding=2 align="center">
				<tr bgcolor=yellow>
					<td align="center" colspan=2>
					<b>챔피언 선택</b>
					</td>
				</tr>
				<tr>
					<td align="right">챔피언 : </td>
					<td>
						<input type="text" name="champ">
					</td>
				</tr>
				<tr>
					<td align="right"><input type="submit" value="챔프선택"></td>
				</tr>
		</table>
		
	</form>

</body>
</html>