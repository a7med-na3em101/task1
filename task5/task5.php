<?php
class Author {
    protected string $name;
    protected string $email;
    protected string $gender;

    function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function __toString() {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}

$auth = new Author("ahmed", "ahmed@gmail.com", "m");
echo $auth->toString() . "\n";

class Book {
    protected string $isbn;
    protected string $name;
    protected Author $author;
    protected float $price;
    protected int $qty = 0;

    function __construct(string $isbn, string $name, Author $author, float $price) {
        $this->isbn = $isbn;
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function getQty() {
        return $this->qty;
    }

    public function setQty(int $qty) {
        $this->qty = $qty;
    }

    public function getAuthorName() {
        return $this->author->getName();
    }

    public function toString() {
        return "Book[isbn={$this->isbn}, name={$this->name}, Author[name={$this->author->getName()}, email={$this->author->getEmail()}], price={$this->price}, qty={$this->qty}]";
    }
}

$author = new Author("ahmed", "ahmed@gmail.com", "m");
$book1 = new Book("1", "Sample Book", $author, 1000);
echo $book1->toString();


trait Circle{
    private float $radius=1.0;
    private string $color="red";
    public function getRadius()
    {
        return $this->radius;
    }
        public function setRadius(float $radius)
    {
        return $this->radius=$radius;
    }
        public function getColor()
    {
        return $this->color;
    }
        public function setColor(string $color)
    {
        return $this->color=$color;
    }
            public function getArea()
    {
        return $this->radius*3.14*$this->radius;
    }
                public function toString()
    {
        return "Circle[radius={$this->radius},color={$this->color}]";
    }
}

class Cylinder{
    use Circle;
    protected float $height=1.0;
public function __construct(float $radius,float $height,string $color)
{
$this->radius=$radius;
$this->height=$height;
$this->color=$color;
}
        public function getheight()
    {
        return $this->height;
    }
            public function setheight()
    {
        return $this->height=$height;
    }
        public function getVolume()
    {
        return $this->radius*3.14*$this->radius*$this->height;
    }
}

$Cylin=new Cylinder(5,10,"red");
echo $Cylin->getVolume();


abstract class Person {
    protected string $name;
    protected string $address;

    public function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress(string $address) {
        $this->address = $address;
    }

    abstract public function __toString();
}

class Student extends Person {
    protected string $program;
    protected int $year;
    protected float $fee;

    public function __construct(string $name, string $address, string $program, int $year, float $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram() {
        return $this->program;
    }

    public function setProgram(string $program) {
        $this->program = $program;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear(int $year) {
        $this->year = $year;
    }

    public function getFee() {
        return $this->fee;
    }

    public function setFee(float $fee) {
        $this->fee = $fee;
    }

    public function __toString() {
        return "Student[Person[name={$this->name}, address={$this->address}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}

class Staff extends Person {
    protected string $school;
    protected float $pay;

    public function __construct(string $name, string $address, string $school, float $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool() {
        return $this->school;
    }

    public function setSchool(string $school) {
        $this->school = $school;
    }

    public function getPay() {
        return $this->pay;
    }

    public function setPay(float $pay) {
        $this->pay = $pay;
    }

    public function __toString() {
        return "Staff[Person[name={$this->name}, address={$this->address}], school={$this->school}, pay={$this->pay}]";
    }
}

    $student = new Student("ahmed", "shobra", "Computer Science", 2024, 15000);
    echo $student->__toString() . "\n";

    $staff = new Staff("mohamed", "shobra", "Mathematics", 50000);
    echo $staff->__toString() . "\n";


interface Shape {
    const COLOR_DEFAULT = "red";
    const FILLED_DEFAULT = true;
    
    public function getColor(): string;
    public function setColor(string $color): void;
    public function isFilled(): bool;
    public function setFilled(bool $filled): void;
    public function __toString(): string;
}

class AbstractShape implements Shape {
    protected string $color;
    protected bool $filled;

    public function __construct(string $color = self::COLOR_DEFAULT, bool $filled = self::FILLED_DEFAULT) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function __toString(): string {
        return "Shape[color={$this->color}, filled={$this->filled}]";
    }
}

class Circle1 extends AbstractShape {
    protected float $radius;

    public function __construct(float $radius = 1.0, string $color = self::COLOR_DEFAULT, bool $filled = self::FILLED_DEFAULT) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string {
        return "Circle[" . parent::toString() . ", radius={$this->radius}]";
    }
}

class Rectangle extends AbstractShape {
    protected float $width;
    protected float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = self::COLOR_DEFAULT, bool $filled = self::FILLED_DEFAULT) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[" . parent::toString() . ", width={$this->width}, length={$this->length}]";
    }
}

class Square extends Rectangle {

    public function __construct(float $side = 1.0, string $color = self::COLOR_DEFAULT, bool $filled = self::FILLED_DEFAULT) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->width;
    }

    public function setSide(float $side): void {
        $this->width = $side;
        $this->length = $side;
    }

    public function setWidth(float $width): void {
        $this->setSide($width);
    }

    public function setLength(float $length): void {
        $this->setSide($length);
    }

    public function __toString(): string {
        return "Square[" . parent::toString() . "]";
    }
}

$circle = new Circle1(5.0, "blue", false);
echo $circle->__toString() . "\n";

$rectangle = new Rectangle(4.0, 6.0, "green", true);
echo $rectangle->__toString() . "\n";

$square = new Square(4.0, "yellow", false);
echo $square->__toString() . "\n";


?>
