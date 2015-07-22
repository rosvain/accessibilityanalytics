<?php
class MyDB extends SQLite3 {

    function __construct() {
        $this->open('../data/analytics.db');
    }

}

$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}

$sql = <<<EOF
      create table faculty_avatar
      (id integer primary key autoincrement,
      username text not null,
      hash text not null
       );
EOF;

$ret = $db->exec($sql);
if (!$ret) {
    echo $db->lastErrorMsg();
} else {
    echo "Faculty Avatar Table created successfully\n";
}

$sql = <<<EOF
      create table student_avatar
      (id integer primary key autoincrement,
      username text not null,
      hash text not null
       );
EOF;

$ret = $db->exec($sql);
if (!$ret) {
    echo $db->lastErrorMsg();
} else {
    echo "Student Avatar Table created successfully\n";
}

$db->close();
