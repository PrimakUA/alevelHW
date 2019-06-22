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

function newCharacterCreate()
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

    $newCharacterHandCreate[] = $name . ' ' . $lastname . ' ' . $age . ' ' . $sex;

    return $newCharacterHandCreate;

}


function autoNewCharacterCreate(array $maleNames, array $femaleNames, array $lastNames)
{
    $newCharacter = [];
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

    $newCharacter[] = $newName . ' ' . $newLastName . ' ' . $age . ' ' . $genderType;

    return $newCharacter;
}

function special()
{

    $SPECIAL = ['S', 'P', 'E', 'C', 'I', 'A', 'L'];

    $groupMembers = count($SPECIAL);
    $maxSum = 40;
    $maxValue = 10;

    $groups = array();
    $member = 0;

    while ((array_sum($groups) != $maxSum)) {
        $res = rand(1, $maxSum / rand(($maxSum / $maxValue), $maxSum));
        $groups[$member] = $res;
        if (++$member == $groupMembers) {
            $member = 0;
        }
    }
    $resultArray = array_combine($SPECIAL, $groups);

    return $resultArray;
}


$characterChoice = trim(fgets(STDIN));
if ($characterChoice == 1) {
    $handCreate = 0;
    $newCharacterCreated = array_merge(newCharacterCreate(), special());
    echo 'Manual creation: ';
    print_r($newCharacterCreated);

} elseif ($characterChoice == 2) {
    $newCharacterCreated = array_merge(autoNewCharacterCreate($maleNames, $femaleNames, $lastNames), special());
    echo 'Automatic character creation: ';
    print_r($newCharacterCreated);

} else echo 'Invalid input';