<?php
	include 'interceptor.php';

	//$p = new Person();
	//echo $p->name = '1';

	class SportObject{                                          //类SportObject
private $type = ' ';                                        //私有变量$type
public function __get($name){                               //声明魔术方法__get()
        echo "调用__get方法\n";
        if(isset($this ->$name)){                               //判断变量是否被声明
            echo '变量'.$name.'的值为：'.$this -> $name.'<br>';
        }else{
            echo '变量'.$name.'未定义，初始化为0<br>'; 
            $this -> $name = 0;                             //如果未被声明，则对变量初始化
        }
    }
    public function __set($name, $value){                       //声明魔术方法__set()
        echo "调用__set方法\n";
        if(isset($this -> $name)){                              //判断变量是否定义
            $this -> $name = $value;
            echo '变量'.$name.'赋值为：'.$value.'<br>';
        }else{
            $this -> $name = $value;                            //如果未定义，继续对变量进行赋值
            echo '变量'.$name.'被初始化为：'.$value.'<br>';     //输出警告信息
        }
    }
    public function test()
    {
        echo $this->type;
    }

}
$MyComputer = new SportObject();                                //实例化对象$MyComputer
$MyComputer -> type = 'DIY';                                    //给变量赋值  
$MyComputer -> type;                                        //调用变量$type
$MyComputer -> cpu;                                        //调用变量$name
?>