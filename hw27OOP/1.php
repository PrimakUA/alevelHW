<?php


class MyListNode
{
    public $data;
    public $next;
}

class MyList implements Iterator
{
    protected $start;
    protected $current;

    public function append($data)
    {
        if (!$this->start) {
            $this->start = new MyListNode();
            $this->start->data = $data;
            return;
        }
        $newNode = new MyListNode();
        $newNode->data = $data;
        $lastNode = $this->getLast();
        $lastNode->next = $newNode;
    }

    public function getLast()
    {
        $result = $this->start;
        while ($result->next) {
            $result = $result->next;
        }
        return $result;
    }

    public function current()
    {
        return $this->current->data;

    }

    public function key()
    {
        return $this->current;
    }

    public function next()
    {
        $this->current = $this->current->next;

    }

    public function rewind()
    {
        $this->current = $this->start;
    }

    public function valid()
    {
        return !empty($this->current);
    }

}


$myList = new MyList();

$myList->append(1);
$myList->append(2);
$myList->append(5);


foreach ($myList as $item) {
    var_dump($item);//выводит 1 2 5
}
