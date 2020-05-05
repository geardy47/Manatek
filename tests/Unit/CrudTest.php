<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Obat;

class CrudTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function testExample()
    {
        $obat = Obat::create(["kodeobat"=>"20003","nama"=>"Komix","jenis"=>"Cair",
            "harga"=>"2000","stok"=>"50"]);
        
        $this->assertDatabaseHas('obat', ["kodeobat"=>"20003","nama"=>"Komix","jenis"=>"Cair",
            "harga"=>"2000","stok"=>"50"]);
        
        $update_obat = Obat::find($obat->kodeobat)->update(["kodeobat"=>"20003","nama"=>"Komix Anak","jenis"=>"Cair",
            "harga"=>"2000","stok"=>"50"]);

        $this->assertDatabaseHas('obat', ["kodeobat"=>"20003","nama"=>"Komix Anak","jenis"=>"Cair",
            "harga"=>"2000","stok"=>"50"]);

        Obat::destroy($obat->kodeobat);

        $this->assertDatabaseMissing('obat', ["kodeobat"=>"20003","nama"=>"Komix Anak","jenis"=>"Cair",
        "harga"=>"2000","stok"=>"50"]);
    }
}
