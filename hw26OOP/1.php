<?php

class Page
{
    public $text;
    public $padding;
}

class PageFactory extends Page
{
    static protected  $list='right';

    public function create(){
        if(PageFactory::$list == 'left') {
            PageFactory::$list = 'right';
            $nextPage = new PageFactory;
            $nextPage->padding = 'left' . '<br>';
            return $nextPage;

        }
        elseif(PageFactory::$list == 'right') {
            PageFactory::$list = 'left';
            $nextPage = new PageFactory;
            $nextPage->padding = 'right' . '<br>';
            return $nextPage;
        }
    }
}

$pageFactory = new PageFactory();

$page1 = $pageFactory->create();

echo $page1->padding;//Выводит right

$page2 = $pageFactory->create();
echo $page2->padding;//Выводит left

$page3 = $pageFactory->create();
echo $page3->padding;//Выводит right

$page4 = $pageFactory->create();
echo $page4->padding;//Выводит left

$page5 = $pageFactory->create();
echo $page5->padding;//Выводит right

$page6 = $pageFactory->create();
echo $page6->padding;//Выводит left