<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Answer;
use App\Http\Controllers\ReplyController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReplyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testReplyControllerExists(): void{
        $this -> assertFalse(
            class_exists("ReplyController.php")
        );
    }
    public function testConstructExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "__construct")
        );
    }
    public function testStoreExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "store")
        );
    }
    public function testShowExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "show")
        );
    }
    public function testEditExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "edit")
        );
    }
    public function testUpdateExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "update")
        );
    }
    public function testDestroyExists(): void{
        $this->assertFalse(
            method_exists(ReplyController::class, "destroy")
        );
    }
}
