package com.prac.board.dao;

import java.util.List;

import javax.inject.Inject;

import org.apache.ibatis.session.SqlSession;
import org.springframework.stereotype.Repository;

import com.prac.board.vo.BoardVO;

@Repository 
public class BoardDAOImpl implements BoardDAO {
	
	@Inject 
	private SqlSession sql;
	
	private static String namespace = "com.prac.board.mappers.board";
	
	@Override
	public List<BoardVO> list() throws Exception {
		// TODO Auto-generated method stub
		return sql.selectList(namespace+".list");
	}

	@Override
	public void write(BoardVO vo) throws Exception {
		// TODO Auto-generated method stub
		sql.insert(namespace+".write", vo);
	}
	
}
