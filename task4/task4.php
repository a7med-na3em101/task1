    <?php
    //1
    class Circle {
        private float $radius = 1.0;
        private string $color = "red";

        function __construct(float $radius) {
            $this->radius = $radius;
        }

        public function getRadius(): float {
            return $this->radius;
        }
            public function getColor(): string {
            return $this->color;
        }
            public function setRadius(float $radius){
            $this->radius = $radius;
        }
                public function setcolor(string $color){
            $this->color = $color;
        }

        public function getArea(): float {
            return 3.14 * ($this->radius * $this->radius);
        }
                public function toString(): string {
            echo $this->radius,"<br>";
            echo  $this->color,"<br>";
            echo $this->getArea();
            return 1;
        }
    }

    $c = new Circle(5.0);
    $c->toString();
    //---------------------------------------------------------
    //2
    class Person{
    private String $firstName;
    private String $lastName;

        function __Construct(String $firstName,String $lastName)
        {
            $this->firstName=$firstName;
            $this->lastName=$lastName;
        }
            function getfirstName()
        {
            return $this->firstName;
        }
                function getlastName()
        {
            return $this->lastName;
        }
        function getName()
        {
            return $this->firstName;
            return $this->lastName;
        }
        function toString()
    {
        echo "firstName: ".$this->firstName."<br>";
        echo "lastName: ". $this->lastName."<br>";
    }
    }
    class Employee extends Person{
    
        private static Int $id=0;

        private Int $salary;

        function __Construct(String $firstName,String $lastName,Int $salary)   {
            self::$id++;
            parent::__Construct( $firstName, $lastName);
            $this->salary=$salary;
        }

    function getid()
    {
                return self::$id;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function setSalary(Int $salary){
    $this->salary=$salary;
    }
    function getAnnualSalary(){
    return $this->salary*12;
    }
    function raiseSalary(Int $percent)
    {
        // 10%   1000 
        return $this->salary+($this->salary*($percent/100));
    }
    function toString()
    {
        parent::toString();
            echo "id: " .self::$id."<br>";
    echo "Salary: ". $this->salary."<br>";
    }

    }

    $emp=new Employee("ahmed","mohamed",5000);
    $emp->setSalary(10000);
    $emp->getAnnualSalary();
    $emp->raiseSalary(20);
    $emp->toString();
    echo "<br>";
    $emp1=new Employee("Mohamed","mahmoud",7000);
    $emp1->setSalary(50000);
    $emp1->getAnnualSalary();
    $emp1->raiseSalary(10);
    $emp1->toString();
    echo "<br>";
    $emp12=new Employee("Mohamed","mahmoud",7000);
    $emp12->setSalary(50000);
    $emp12->getAnnualSalary();
    $emp12->raiseSalary(10);
    $emp12->toString();

    //-----------------------------------------------------------
    //3
//use meaningful naming conventions it should be Rectangle 
// you can check this article: https://www.codementor.io/@veenitchauhan/basics-of-naming-conventions-for-php-developers-eliexmew6
    class Rec{
        private  $length=1.0;
        private  $width=1.0;
        function __Construct( float $length,float $width)
        {
            $this->length=$length;
            $this->width=$width;
        }
        function getlength()
        {
            return  $this->length;   }
                function getwidth()
        {
            return  $this->width;   }
            function setlength($length)
            {
                $this->length=$length;
            }
                    function setwidth($width)
            {
                $this->width=$width;
            }
            function getarea()
            {
                return  $this->length*$this->width;
            }
            function getperimeter()
            {
                return  ($this->length+$this->width)*2;
            }
            function toString()
            {
                echo "Rectangle[perimeter= ".$this->getperimeter().",area= ".$this->getarea()."]<br>";
            }
    }


    $rec=new Rec(5.0,10.0);

    $rec->toString();
    //------------------------------------------------------
    //4
    class InvoiceItem {
        private string $id;
        private string $desc;
        private int $qty;
        private float $unitPrice;

        function __construct(string $id, string $desc, int $qty, float $unitPrice) {
            $this->id = $id;
            $this->desc = $desc;
            $this->qty = $qty;
            $this->unitPrice = $unitPrice;
        }

        public function getId(): string {
            return $this->id;
        }

        public function getDesc(): string {
            return $this->desc;
        }

        public function getQty(): int {
            return $this->qty;
        }

        public function setQty(int $qty): void {
            $this->qty = $qty;
        }

        public function getUnitPrice(): float {
            return $this->unitPrice;
        }

        public function setUnitPrice(float $unitPrice): void {
            $this->unitPrice = $unitPrice;
        }

        public function getTotal(): float {
            return $this->unitPrice * $this->qty;
        }

        public function toString(): string {
            return "InvoiceItem[id={$this->id}, desc={$this->desc}, qty={$this->qty}, unitPrice={$this->unitPrice}, total={$this->getTotal()}]";
        }
    }

    $invoiceItem = new InvoiceItem("123", "Item", 10, 99.99);
    echo $invoiceItem->toString();

    //-----------------------------------------------------------------------
    //5


    class Account {
        private string $id;
        private string $name;
        private int $balance = 0;
        function __construct(string $id, string $name, int $balance) {
            $this->id = $id;
            $this->name = $name;
            $this->balance = $balance;
        }
        public function getId(): string {
            return $this->id;
        }
        public function getName(): string {
            return $this->name;
        }
        public function getBalance(): int {
            return $this->balance;
        }
        public function credit(int $amount): int {
            $this->balance += $amount;
            return $this->balance;
        }
        public function debit(int $amount): int|string {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                return $this->balance;
            } else {
                return "Amount exceeded balance";
            }
        }
        public function transferTo(Account $another, int $amount): int|string {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                $another->credit($amount);
                return $this->balance;
            } else {
                return "Amount exceeded balance";
            }
        }
        public function toString(): string {
            return "Account[id={$this->id}, name={$this->name}, balance={$this->balance}]";
        }
    }
    $acc1 = new Account("1", "Ahmed", 10000);
    $acc2 = new Account("2", "Mohamed", 5000);
    $acc1->credit(20000);
    $acc1->transferTo($acc2, 5000);
    echo $acc1->toString();
    echo $acc2->toString();
    //------------------------------------------------------------------------
    //6
    class Ball {
        private float $x;
        private float $y;
        private int $radius;
        private float $xDelta;
        private float $yDelta;

        public function __construct(float $x, float $y, int $radius, float $xDelta, float $yDelta) {
            $this->x = $x;
            $this->y = $y;
            $this->radius = $radius;
            $this->xDelta = $xDelta;
            $this->yDelta = $yDelta;
        }

        public function getX(): float {
            return $this->x;
        }

        public function getY(): float {
            return $this->y;
        }

        public function setX(float $x): void {
            $this->x = $x;
        }

        public function setY(float $y): void {
            $this->y = $y;
        }

        public function getRadius(): int {
            return $this->radius;
        }

        public function setRadius(int $radius): void {
            $this->radius = $radius;
        }

        public function getXDelta(): float {
            return $this->xDelta;
        }

        public function getYDelta(): float {
            return $this->yDelta;
        }

        public function setXDelta(float $xDelta): void {
            $this->xDelta = $xDelta;
        }

        public function setYDelta(float $yDelta): void {
            $this->yDelta = $yDelta;
        }

        public function move(): void {
            $this->x += $this->xDelta;
            $this->y += $this->yDelta;
        }

        public function reflectHorizontal(): void {
            $this->xDelta = -$this->xDelta;
        }

        public function reflectVertical(): void {
            $this->yDelta = -$this->yDelta;
        }

        public function toString(): string {
            return "Ball[({$this->x}, {$this->y}), speed=({$this->xDelta}, {$this->yDelta})]";
        }
    }
    $ball = new Ball(0.0, 0.0, 5, 1.5, 1.5);
    echo $ball->toString();
    $ball->move();
    echo $ball->toString();
    $ball->reflectHorizontal();
    $ball->move();
    echo $ball->toString();
    $ball->reflectVertical();
    $ball->move();
    echo $ball->toString();
    //-------------------------------------------------------------------------------------
    ?>


