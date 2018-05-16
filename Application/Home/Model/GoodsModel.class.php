<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model {
	public function getListInfo() {
		$res = $this->select();
		return $res;
	}
}