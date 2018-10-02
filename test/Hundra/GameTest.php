<?php

namespace Mahm\Hundra;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testIsInstance()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);
    }

    public function testScoreEquals()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $this->assertEquals($game->saveScore(), $game->saveScore());
    }

    public function testScore()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $score = $game->savedScore[0] = 10;
        $this->assertGreaterThan($game->getScore(), $score);
    }

    public function testPlayers()
    {
        $game = new Game(2);
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $this->assertEquals($game->players, 2);
    }

    public function testNotNull()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $this->assertNull($game->diceValue());
    }

    public function testPlayerReturn()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $game->value = 1;
        $game->activePlayer[0] = 1;
        $this->assertStringStartsWith("Du", $game->diceValue());
    }

    public function testComputerReturn()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $game->value = 1;
        $game->activePlayer[1] = 1;
        $this->assertStringStartsWith("Datorn", $game->diceValue());
    }

    public function testOneReturn()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $game->value = 1;
        $game->activePlayer[1] = 1;

        $this->assertStringStartsWith("Datorn", $game->diceValue());
    }

    public function testPlayerStart()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $game->player = 6;
        $game->comp = 2;

        $this->assertStringStartsWith("Spelaren", $game->getStarter());
    }

    public function testCompStart()
    {
        $game = new Game();
        $this->assertInstanceOf("\Mahm\Hundra\Game", $game);

        $game->player = 2;
        $game->comp = 6;

        $this->assertStringStartsWith("Datorn", $game->getStarter());
    }
}
