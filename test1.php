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
                $this->position['x'] =$x;
                $this->position['y'] =$y;
                return $this->position;
            }
            public function resetPosition()
            {
                $this->moveTo(0,0);
                return $this->position;
            }
        }
        
        $spt = new Cat("kitty");
        
        echo $spt->name;
        echo "<br>";
        $spt->name = "Hello Kitty";
        echo $spt->name;
        echo "<br>";
        echo "(".$pet->position['x'].",".$pet->position['y'].")";
        echo "<br>";
        ?>
    </body>
</html>
