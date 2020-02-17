package com.prac.board.service;

import java.util.List;

import com.prac.board.vo.BoardVO;

public interface BoardService {
	
	public List<BoardVO> list() throws Exception;
	
	public void write(BoardVO vo) throws Exception;
}
