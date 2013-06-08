<?php
class Main_menu extends CI_Controller {

	public function main()
	{
		$this->load->database();
		$query = $this->db->query('SELECT * FROM table_menu');
		
		
		$menu_item = array(array('액션','수퍼 마리오','별의 카비','롤플레잉','드래곤 퀘스트','파이널 판타지','어드벤처','원숭이 섬의 비밀','매니악 맨션','시뮬레이션','팰콘 3.0','아파치 롱보우'),
				array('1','2','2','1','2','2','1','2','2','1','2','2'),
				array('2','2','2','2','2','2','2','2','2','2','2','2'));
				
		if ($query->num_rows() > 0)
		{
			$data['todo_list'] = $query->result_array();
	
			$data['title'] = "My Real Title";
			$data['heading'] = 'Total Results: ' + $query->num_rows();
			
			$data['menu_item'] = $menu_item;
			
			$this->load->view('menu', $data);
		}

	}	

}	
	
?>