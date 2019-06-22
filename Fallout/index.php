<?php
fwrite(STDOUT, "Enter 1 to create characters manually, or 2 to automatically create: ");

$femaleNames = [
    'Emma',
    'Olivia',
    'Ava',
    'Isabella',
    'Sophia',
    'Charlotte',
    'Mia',
    'Amelia',
    'Harper',
    'Evelyn',
    'Abigail',
    'Emily',
    'Elizabeth',
    'Mila',
    'Ella',
    'Avery',
    'Sofia',
    'Camila',
    'Aria',
    'Scarlett',
    'Victoria',
    'Madison',
    'Luna',
    'Grace',
    'Chloe',
    'Penelope',
    'Layla',
    'Riley',
    'Zoey',
    'Nora'];
$maleNames = [
    'Liam',
    'Noah',
    'William',
    'James',
    'Oliver',
    'Benjamin',
    'Elijah',
    'Lucas',
    'Mason',
    'Logan',
    'Alexander',
    'Ethan',
    'Jacob',
    'Michael',
    'Daniel',
    'Henry',
    'Jackson',
    'Sebastian',
    'Aiden',
    'Matthew',
    'Samuel',
    'David',
    'Joseph',
    'Carter',
    'Owen',
    'Wyatt',
    'John',
    'Jack',
    'Luke',
    'Jayden'];
$lastNames = [
    'Smith',
    'Johnson',
    'Williams',
    'Jones',
    'Brown',
    'Davis',
    'Miller',
    'Wilson',
    'Moore',
    'Taylor',
    'Anderson',
    'Thomas',
    'Jackson',
    'White',
    'Harris',
    'Martin',
    'Thompson',
    'Garcia',
    'Martinez',
    'Robinson',
    'Clark',
    'Rodriguez',
    'Lewis',
    'Lee',
    'Walker',
    'Hall',
    'Allen',
    'Young',
    'Hernandez',
    'King'];

function newCharacterCreate($handCreate)
{


    fwrite(STDOUT, "Enter name: ");
    $name = trim(fgets(STDIN));
    fwrite(STDOUT, "Enter last Name: ");
    $lastname = trim(fgets(STDIN));
    fwrite(STDOUT, "Enter age: ");
    $age = trim(fgets(STDIN));
    fwrite(STDOUT, "Enter gender: 1-Male ,2 - Female ");
    $gender = trim(fgets(STDIN));
    if ($gender == 1) {
        $sex = 'Male';
    } else $sex = 'Female';

    $newCharacterHandCreate = $name . ' ' . $lastname . ' ' . $age . ' ' . $sex;

    return $newCharacterHandCreate;

}


function autoNewCharacterCreate(array $maleNames, array $femaleNames, array $lastNames)
{
    $genderType = 'Female';
    $genderCreate = rand(0, 1);
    $gender = '';
    if ($genderCreate == 1) {
        $gender = $maleNames;
        $genderType = 'Male';
    } else $gender = $femaleNames;

    $age = rand(16, 50);

    $keyName = array_rand($gender);
    $newName = $gender[$keyName];

    $keyLastName = array_rand($lastNames);
    $newLastName = $lastNames[$keyLastName];

    $newCharacter = $newName . ' ' . $newLastName . ' ' . $age . ' ' . $genderType;

    return $newCharacter;
}


$characterChoice = trim(fgets(STDIN));
if ($characterChoice == 1) {
    $handCreate = 0;
    echo 'Manual creation: ' . newCharacterCreate($handCreate);
} elseif ($characterChoice == 2) {
    echo 'Automatic character creation: ' . autoNewCharacterCreate($maleNames, $femaleNames, $lastNames);;
} else echo 'Invalid input';