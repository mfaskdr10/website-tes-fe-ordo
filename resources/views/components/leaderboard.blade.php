<?php
$leader_boards = [
    [
        'id' => 1,
        'number' => '01',
        'tier' => 'Mangrove Moven',
        'tierImage' => 'planet-earth-1',
        'name' => 'Budi Hartanto',
        'jumlahPohon' => '350',
    ],
    [
        'id' => 2,
        'number' => '02',
        'tier' => 'Mangrove Moven',
        'tierImage' => 'planet-earth-1',
        'name' => 'Dewi Sartika',
        'jumlahPohon' => '330',
    ],
    [
        'id' => 3,
        'number' => '03',
        'tier' => 'Mangrove Moven',
        'tierImage' => 'planet-earth-1',
        'name' => 'Eko Wahyudi',
        'jumlahPohon' => '200',
    ],
    [
        'id' => 4,
        'number' => '04',
        'tier' => 'Guardian of the Grove',
        'tierImage' => 'planet-earth-2',
        'name' => 'Rina Kartika',
        'jumlahPohon' => '190',
    ],
    [
        'id' => 5,
        'number' => '05',
        'tier' => 'Guardian of the Grove',
        'tierImage' => 'planet-earth-2',
        'name' => 'Agus Prasetyo',
        'jumlahPohon' => '140',
    ],
    [
        'id' => 6,
        'number' => '06',
        'tier' => 'Mangrove Master',
        'tierImage' => 'planet-earth-3',
        'name' => 'Irfan Setiawan',
        'jumlahPohon' => '80',
    ],
];
?>

<div class="leaderboard" data-aos="fade-left">
    <div class="leaderboard-heading">
        <h1 class="title">Leaderboard</h1>
        <a href="#" class="btn donation">Most Donation</a>
        <a href="#" class="btn recent">Most Recent</a>
    </div>

    <div class="leaderboard-donation">
        @foreach ($leader_boards as $leader_board)
            <div class="leader-card">
                <div class="card-left">

                    <p
                        class="
                    @if ($leader_board['id'] >= 1 && $leader_board['id'] <= 3) number-card green
                    @elseif ($leader_board['id'] == 4)
                        number-card green-light
                    @elseif ($leader_board['id'] >= 5 && $leader_board['id'] <= 6)
                        number-card yellow @endif
                
                    ">
                        {{ $leader_board['number'] }}</p>

                    <div class="card-details">
                        <img src="images/{{ $leader_board['tierImage'] }}.svg" alt="planet-earth" width="60" />
                        <div class="name-card">
                            <p class="achive">{{ $leader_board['tier'] }}</p>
                            <h1 class="name">{{ $leader_board['name'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="card-right">
                    <img src="images/mangrove.svg" alt="mangrove" />
                    <h1 class="count">{{ $leader_board['jumlahPohon'] }} <span>Pohon</span></h1>
                </div>
            </div>
        @endforeach
    </div>
</div>
