package lol.champs;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.PreparedStatement;

import com.mysql.jdbc.Driver;


public class ChampsDAO {
	private Connection conn;
	private PreparedStatement pstmt ;
	private ResultSet rs ;
	
	public ChampsDAO() {
		try{
			
			String dbURL = "webdeveloper.iptime.org/phpmyadmin";
			String user = "kdm";
			String passwd = "kdm1234";
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(dbURL, user, passwd);
		} catch(Exception e) {
			e.printStackTrace();
		}
		
	}
	
	public int select(String champ) {
		String SQL = "select*from champ where champ = ?";
		try {
			pstmt = (PreparedStatement) conn.prepareStatement(SQL);
			pstmt.setString(1, champ);
			rs = pstmt.executeQuery();
			if (rs.next()) {
				if(rs.getString(1).contentEquals(champ)) {
					return 1;
				} 
				
			} else {
				return 0;
			}
		} catch(Exception e) {
			e.printStackTrace();
		}
		return -1;
	}
}
