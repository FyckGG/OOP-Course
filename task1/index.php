<?php
declare(strict_types = 1);

class Book
{
    private ?string $name = null;
    private ?string $author = null;
    private ?int $pageCount = null;
    private ?int $amount = null;

    public function __construct(string $name, string $author, int $pageCount, int $amount)
    {
        $this->name = $name;
        $this->author = $author;
        $this->pageCount = $pageCount;
        $this->amount = $amount;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function getAuthor() :string
    {
        return $this->author;
    }

    public function getPageCount() :int
    {
        return $this->pageCount;
    }

    public function getAmount() :int
    {
        return $this->amount;
    }

}

class BookRepository
{
    private array $books;

    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function getBooks() :array
    {
        return $this->books;
    }

    public function sortByName() :void
    {
        usort($this->books, function ($a, $b)
        {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function sortByAuthor() :void
    {
        usort($this->books, function ($a, $b)
        {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortByPageCount() :void
    {
        usort($this->books, function ($a, $b)
        {
            return $a->getPageCount() > $b->getPageCount();
        });
    }

    public function sortByAmount() :void
    {
        usort($this->books, function ($a, $b)
        {
            return $a->getAmount() > $b->getAmount();
        });
    }
}

function main()
{
    $bookArray = [
        new Book('Going from child, to childish, to childlike is only a matter of time.', ' Lidija Raginheri ',random_int(10, 1000), random_int(0, 100)),
        new Book('A suit of armor provides excellent sun protection on hot days.', ' Helena Haribert ',random_int(10, 1000), random_int(0, 100)),
        new Book('I had a friend in high school named Rick Shaw, but he was fairly useless as a mode of transport.', ' Isidoro Noodin ',random_int(10, 1000), random_int(0, 100)),
        new Book('Mr. Montoya knows the way to the bakery even though he\'s never been there.', ' Marcianus Ragnheiður ',random_int(10, 1000), random_int(0, 100)),
        new Book('Never underestimate the willingness of the greedy to throw you under the bus.', ' Hero Inigo ',random_int(10, 1000), random_int(0, 100)),
        new Book('Peanut butter and jelly caused the elderly lady to think about her past.', ' Katerina Sabryna ',random_int(10, 1000), random_int(0, 100)),
        new Book('As time wore on, simple dog commands turned into full paragraphs explaining why the dog could do something.', ' Lenz Erlendur ',random_int(10, 1000), random_int(0, 100)),
        new Book('He was all business when he wore his clown suit.', ' Salomón Kjell ',random_int(10, 1000), random_int(0, 100)),
        new Book('If eating three-egg omelets causes weight-gain, budgie eggs are a good substitute.', ' Gáspár Hoder ',random_int(10, 1000), random_int(0, 100)),
        new Book('There\'s a message for you if you look up.', ' Gallcobar Krastyu ',random_int(10, 1000), random_int(0, 100)),
        new Book('The body piercing didn\'t go exactly as he expected.', ' Ségolène Tallak ',random_int(10, 1000), random_int(0, 100)),
        new Book('She opened up her third bottle of wine of the night.', ' Manolo Steffen ',random_int(10, 1000), random_int(0, 100)),
        new Book('The hand sanitizer was actually clear glue.', ' Chestibor Sandip ',random_int(10, 1000), random_int(0, 100)),
        new Book('You can\'t compare apples and oranges, but what about bananas and plantains?', ' Adanna Ewout ',random_int(10, 1000), random_int(0, 100)),
        new Book('He fumbled in the darkness looking for the light switch, but when he finally found it there was someone already there.', ' Hardwic Tamra ',random_int(10, 1000), random_int(0, 100)),
    ];

$bookRepository = new BookRepository($bookArray);

    //$bookRepository->sortByName();
    //$bookRepository->sortByAuthor();
    //$bookRepository->sortByPageCount();
    //$bookRepository->sortByAmount();

    $fp = fopen('./data.txt', "w"); 

    foreach($bookRepository->getBooks() as $item)
    {
        $data = 'NAME: ' . $item->getName() . ' ' . 'AUTHOR: ' . $item->getAuthor() . ' ' . 'PAGE COUNT: ' . $item->getPageCount()
         . ' ' . 'AMOUNT: ' . $item->getAmount() . "\r\n";
        fwrite($fp, $data); 
    }

    fclose($fp);
}

main();