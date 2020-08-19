<?php

namespace Behavioral\Iterator\Tests;

use PHPUnit\Framework\TestCase;
use Behavioral\Iterator\Book;
use Behavioral\Iterator\BookList;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('a', 'A'));
        $bookList->addBook(new Book('b', 'B'));
        $bookList->addBook(new Book('c', 'C'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        $this->assertSame(
            [
                'a by A',
                'b by B',
                'c by C',
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $book = new Book('d', 'D');
        $book2 = new Book('e', 'E');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        $this->assertSame(
            ['e by E'],
            $books
        );
    }

    public function testCanAddBookToList()
    {
        $book = new Book('cc', 'CC');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('cc', 'CC');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }
}