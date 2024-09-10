<?php

class Users extends Dbh
{

    public function getData()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        // $stmt->execute();
        // $rows = $stmt->fetch();
        while ($rows = $stmt->fetch()) {
            echo $rows['username'] . ' ' . $rows['email'] . "<br>";
        }
    }

    public function getDataStmt($username)
    {
        $sql = "SELECT * FROM users WHERE username = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        // $rows = $stmt->fetch();
        while ($rows = $stmt->fetch()) {
            echo "<p style='color:red'>" . $rows['username'] . ' ' . $rows['email'] . "</p>";
        }
    }
}
