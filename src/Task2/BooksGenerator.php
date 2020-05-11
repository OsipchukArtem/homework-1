<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
    protected $minPagesNumber;
    protected $libraryBooks;
    protected $maxPrice; 
    protected $storeBooks;
    
    public function __construct($minPagesNumber, $libraryBooks, $maxPrice, $storeBooks) 
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBooks = $storeBooks;
    }

    public function generate(): \Generator
    {
        foreach($this->libraryBooks as $book){
            if($book->getPagesNumber() >= $this->minPagesNumber){
                yield $book;
            }
        }

        foreach($this->storeBooks as $book){
            if($book->getPrice() <= $this->maxPrice){
                yield $book;
            }
        }
    }
}
 