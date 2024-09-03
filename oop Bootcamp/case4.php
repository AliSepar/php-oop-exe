<?php
// There's two groups, both of 10 students. Every student has a name (even Jaqen) and gets a grade. You can have some fun coming up with the content here :-)

// Provide an easy way to calculate the average score of a group.
// Add a function to move a student from one group to another.
// Show the average score of both groups. Move the top student from one group with the lowest scoring student from another. Show the averages again - how were these affected?


class Student
{
    protected $name;
    protected $grade;

    public function __construct($name, $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name . "(Grade: " . $this->grade . ")";
    }
}



class Group
{
    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }
    public function removeStudent($student)
    {
        $index = array_search($student, $this->students, true); //search the array
        if ($index !== false) {
            unset($this->students[$index]);
            $this->students = array_values($this->students); // Re-index the array
        }
    }

    public function calculateAverage()
    {
        if (count($this->students) == 0) return 0;

        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getGrade();
        }
        return $total / count($this->students);
    }

    public function getHighestScoringStudent()
    {
        if (count($this->students) == 0) return null;

        $highest = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getGrade() > $highest->getGrade()) {
                $highest = $student;
            }
        }
        return $highest;
    }

    public function getLowestScoringStudent()
    {
        if (count($this->students) == 0) return null;
        $lowest = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getGrade() < $lowest->getGrade()) {
                $lowest = $student;
            }
        }
        return $lowest;
    }

    public function __toString() //to print data in side student array
    {
        $output = '';
        foreach ($this->students as $student) {
            $output .= $student . "\r\n";
        }
        return $output;
    }
}




class School
{
    private $group1;
    private $group2;
    public function __construct($group1, $group2)
    {
        $this->group1 = $group1;
        $this->group2 = $group2;
    }

    public function moveStudent(Student $student, Group $fromGroup, Group $toGroup)
    {
        $fromGroup->removeStudent($student);
        $toGroup->addStudent($student);
        //-- Type Hints
        // (Student) $student:
        // This indicates that the $student parameter must be an instance of the Student class.
        // If anything other than a Student object is passed to this parameter, PHP will throw a TypeError.
        //-- Type Safety: Ensures that only objects of the specified types (Student and Group) are passed to the function, reducing the chance of errors and making the code more robust.
    }

    public function swapTopAndLowestScoringStudents()
    {
        $highestInGroup1 = $this->group1->getHighestScoringStudent();
        $lowestInGroup2 = $this->group2->getLowestScoringStudent();
        if ($highestInGroup1 && $lowestInGroup2) {
            $this->moveStudent($highestInGroup1, $this->group1, $this->group2);
            $this->moveStudent($lowestInGroup2, $this->group2, $this->group1);
        }
    }

    public function displayAverages()
    {
        echo "Average of Group 1:" . $this->group1->calculateAverage() . "<br>";
        echo "Average of Group 2:" . $this->group2->calculateAverage() . "<br>";
    }
}


// using classes
// Create students
$students1 = [
    new Student("Alice", 85),
    new Student("Bob", 92),
    new Student("Charlie", 78),
    new Student("David", 88),
    new Student("Eva", 91),
    new Student("Frank", 75),
    new Student("Grace", 82),
    new Student("Hannah", 95),
    new Student("Ivy", 79),
    new Student("Jaqen", 87)
];

$students2 = [
    new Student("Kara", 67),
    new Student("Liam", 84),
    new Student("Mia", 90),
    new Student("Noah", 74),
    new Student("Olivia", 81),
    new Student("Peter", 65),
    new Student("Quinn", 72),
    new Student("Riley", 89),
    new Student("Sophia", 77),
    new Student("Tom", 83)
];

//creating groups and students
$group1 = new Group();
foreach ($students1 as $student) {
    $group1->addStudent($student);
}
echo "Group 1: " . $group1->__toString() . "<br>";

$group2 = new Group();
foreach ($students2 as $student) {
    $group2->addStudent($student);
}
echo "Group 2: " . $group2->__toString() . "<br>";

//creating school and display averages
$school = new School($group1, $group2);
$school->displayAverages();

// Swap top student from group1 with lowest student from group2
$school->swapTopAndLowestScoringStudents();

// Display averages again after swapping
echo "after swapping student : <br>";
$school->displayAverages();
