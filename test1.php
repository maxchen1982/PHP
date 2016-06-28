<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf8">
        <title></title>
    </head>
    <bodyTW>
        <?php
        class Cat
        {
            public $name;
            protected $position;
            public function _construct($name)//方法,建構子,未必要有
            {
                $this->name=$name;
                $this->position=['x'=0,'y'=0];
            }
            public function moveTo($x, $y)
            {
                
            }
        }
        
        ?>
    </body>
</html>
