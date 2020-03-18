<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Party;
use App\Candidate;

class InitData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize database data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private $parties_data = [
        [
            'name' => 'Parti Ayam'
        ],
        [
            'name' => 'Parti Itik'
        ],
        [
            'name' => 'Parti Kucing'
        ]
    ];

    private $candidates_data = [
        [
            'name' => 'Abu Bakar Muhammad',
            'party_id' => 3
        ],
        [
            'name' => 'Ng Pei Li',
            'party_id' => 3
        ],
        [
            'name' => 'Ranjit Singh Deo',
            'party_id' => 3
        ],
        [
            'name' => 'Foo Yoke Wai',
            'party_id' => 1
        ],
        [
            'name' => 'Chia Kim Hooi',
            'party_id' => 2
        ]
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach($this->parties_data as $party_data) {
            $party = new Party;
            $party->name = $party_data['name'];
            $party->save();

            echo "Party $party->name created successfully\n";
        }

        foreach($this->candidates_data as $candidate_data) {
            $candidate = new Candidate;
            $candidate->name = $candidate_data['name'];
            $candidate->party_id = $candidate_data['party_id'];
            $candidate->save();

            echo "Candidate $candidate->name created successfully\n";
        }
    }
}
