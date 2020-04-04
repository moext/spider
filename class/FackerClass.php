<?php

class FackerClass
{
	public function run($num = 20) 
	{
		for($i = 0; $i < $num; $i++) {
			echo $this->realName() . PHP_EOL;
		}
	}

	public function realName()
	{
		$arrFirstName = ['赵','钱','孙','李','周','吴','郑','王','冯','陈','褚','卫','蒋','沈','韩','杨','朱','秦','尤','许','何','吕','施','张','孔','曹','严','华','金','魏','陶','姜','戚','谢','邹','喻','柏','窦','章','云','苏','潘','葛','奚','范','彭','郎','鲁','韦','昌','马','苗','方','俞','任','袁','柳','史','唐','费','岑','薛','雷','贺','倪','汤','殷','罗','毕','郝','邬','安','常','于','时','傅','卞','齐','康','伍','余','元','顾','孟','黄','穆','萧','尹','姚','邵','汪','祁','毛','狄','成','戴','宋','庞','纪','屈','项','祝','董','梁','杜','阮','席','季','麻','贾','江','郭','林','钟','徐','高','夏','蔡'];
		$arrLastName = ['娜娜', '丽丽', '莉莉', '妍', '刚', '强', '明', '军', '磊', '少强', '艳艳', '小燕', '雅', '芳', '小红', '小丽', '龙', '飞虎', '建军', '建国', '小凤', '小刚', '小强'];
		$firstNameSeed = mt_rand(0, count($arrFirstName)-1);
		$lastNameSeed = mt_rand(0, count($arrLastName)-1);
		$realName = $arrFirstName[$firstNameSeed] . $arrLastName[$lastNameSeed];
		return $realName;
	}


}

