<?php
namespace Chess;

use PChess\Chess\Board;
use PChess\Chess\Chess;
use PChess\Chess\Output\HtmlOutput;
use PChess\Chess\Output\Link;

final class MyHtmlOutput extends HtmlOutput
{
    public function generateLinks(Chess $chess, ?string $from = null, $identifier = null): array
    {
        $links = [];
       
                $class = 'current';
            
            $links[$i] = new Link($class, $url);


        return $links;
    }
}