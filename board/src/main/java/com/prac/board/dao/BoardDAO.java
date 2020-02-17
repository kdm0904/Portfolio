package com.prac.board.dao;

import com.prac.board.vo.BoardVO;
import java.util.List;

public interface BoardDAO {
	
	public List<BoardVO> list() throws Exception;
	
	public void write(BoardVO vo) throws Exception;
}
