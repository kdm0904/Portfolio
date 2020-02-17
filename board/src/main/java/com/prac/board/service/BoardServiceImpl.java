package com.prac.board.service;

import java.util.List;
import javax.inject.Inject;
import org.springframework.stereotype.Service;

import com.prac.board.dao.BoardDAO;
import com.prac.board.vo.BoardVO;

@Service
public class BoardServiceImpl implements BoardService {
	
	@Inject 
	private BoardDAO dao;
	
	@Override
	public List<BoardVO> list() throws Exception {
		// TODO Auto-generated method stub
		return dao.list();
	}

	@Override
	public void write(BoardVO vo) throws Exception {
		// TODO Auto-generated method stub
		dao.write(vo);
	}

}
