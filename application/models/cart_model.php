<?php 
	class Cart_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getProduct($id){
			$sql="SELECT * FROM product WHERE `product_id`='".$id."'";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function addToCart($user_id,$product_id,$qty){
			$query = $this->db->query("INSERT INTO cart (user_id,product_id,quantity) VALUES ('$user_id','$product_id','$qty')");
			if($query){
				return 1;
			}
		}
		public function getCart($id){
			$sql="select cart.*,`user`.*,product.* from cart join `user` on `user`.id=cart.user_id join product on product.product_id=cart.product_id where cart.user_id='".$id."'";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function delete($id){
			$sql="DELETE FROM cart WHERE `product_id`='".$id."'";
			$query=$this->db->query($sql);
			if($query){
				return 1;
			}
		}
	}
 ?>