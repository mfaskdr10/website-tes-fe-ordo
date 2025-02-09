<?php

$sponsorships = [
    [
        'image' => 'seedling-scout',
        'tier' => 'Seedling Scout',
        'seeds' => '5 Seeds',
        'buy' => 'IDR 75K',
        'benefits' => 'Badge',
        'donors' => '4,900 Donors',
    ],
    [
        'image' => 'sapling-savior',
        'tier' => 'Sapling Savior',
        'seeds' => '10 Seeds',
        'buy' => 'IDR 150K',
        'benefits' => 'Badge + Pin',
        'donors' => '4,300 Donors',
    ],
    [
        'image' => 'tree-titan',
        'tier' => 'Tree Titan',
        'seeds' => '20 Seeds',
        'buy' => 'IDR 300K',
        'benefits' => 'Badge + Pin',
        'donors' => '15,000 Donors',
    ],
    [
        'image' => 'mangrove-master',
        'tier' => 'Mangrove Master',
        'seeds' => '50 Seeds',
        'buy' => 'IDR 750K',
        'benefits' => 'Badge + Pin + Bag',
        'donors' => '5,000 Donors',
    ],
    [
        'image' => 'guardian-of-the-grove',
        'tier' => 'Guardian of the Grove',
        'seeds' => '100 Seeds',
        'buy' => 'IDR 1,500K',
        'benefits' => 'Badge + Pin + Bag',
        'donors' => '300 Donors',
    ],
    [
        'image' => 'mangrove-maven',
        'tier' => 'Mangrove Maven',
        'seeds' => '200 Seeds',
        'buy' => 'IDR 3,000K',
        'benefits' => 'Badge + Pin + Bag',
        'donors' => '10 Donors',
    ],
];

$pangkat = '<sub>2</sub>';

$corporate_sponsorships = [
    [
        'row' => 'Price',
        'eco' => '15 Million IDR',
        'green' => '30 Million IDR',
        'vanguard' => '45 Million IDR',
    ],
    [
        'row' => "CO$pangkat Sequestration",
        'eco' => '22,5 ton/year',
        'green' => '45 ton/year',
        'vanguard' => '67,5 ton/year',
    ],
    [
        'row' => 'Number of Tress',
        'eco' => '1000 Trees',
        'green' => '2000 Trees',
        'vanguard' => '3000 Trees',
    ],
];

?>


<section class="sponsorsship">
    <h1 class="title">Sponsorship Packages</h1>
    <p class="desc">
        Our sponsorship package offers branding, promotional opportunities, and
        visibility at our event, ideal for enhancing company presence and
        community engagement.
    </p>

    <h3 class="subtitle">Personal Sponsorship Package</h3>

    <table class="table-sponsorship">
        <thead>
            <tr>
                <td class="tier">Membership Tier</td>
                <td>Min. Seeds</td>
                <td>Min. Buy</td>
                <td>Benefits</td>
                <td>Donors</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sponsorships as $sponsorship) : ?>
            <tr>
                <td class="tier">
                    <img src="images/sponshorship/<?= $sponsorship['image'] ?>.svg" alt="" width="27" />
                    <?= $sponsorship['tier'] ?>
                </td>
                <td><?= $sponsorship['seeds'] ?></td>
                <td><?= $sponsorship['buy'] ?></td>
                <td><?= $sponsorship['benefits'] ?></td>
                <td><?= $sponsorship['donors'] ?></td>
                <td class="action">
                    <a href="#" class="btn-support">
                        Support Our Mission
                        <img src="images/arrow.svg" alt="arrow" />
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <hr />

    <h3 class="subtitle">Corporate Sponsorship Package</h3>

    <table class="table-sponsorship">
        <thead>
            <tr>
                <td>Benefits</td>
                <td>Eco Trailblazers</td>
                <td>Green Innovators</td>
                <td>Eco Vanguard</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($corporate_sponsorships as $corporate_sponsorship) : ?>
            <tr>
                <td><?= $corporate_sponsorship['row'] ?></td>
                <td><?= $corporate_sponsorship['eco'] ?></td>
                <td><?= $corporate_sponsorship['green'] ?></td>
                <td><?= $corporate_sponsorship['vanguard'] ?></td>
            </tr>
            <?php endforeach ?>
            <tr>
                <td>Logo on JCI Banner</td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
            <tr>
                <td>Logo on Communal Stainless Plate</td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
            <tr>
                <td>Considered as Main Sponsor</td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
            <tr>
                <td>Dedicated Stainless Plate</td>
                <td></td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
            <tr>
                <td>Report Update on Planted Trees</td>
                <td></td>
                <td><i class='bx bx-check-circle'></i></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
            <tr>
                <td>Logo on Event Clothings</td>
                <td></td>
                <td></td>
                <td><i class='bx bx-check-circle'></i></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Make a Donation</td>
                <td>
                    <a href="#" class="btn-support">
                        Support Our Mission
                        <img src="images/arrow-blue.svg" alt="arrow-blue" />
                    </a>
                </td>
                <td>
                    <a href="#" class="btn-support">
                        Support Our Mission
                        <img src="images/arrow-blue.svg" alt="arrow-blue" />
                    </a>
                </td>
                <td>
                    <a href="#" class="btn-support">
                        Support Our Mission
                        <img src="images/arrow-blue.svg" alt="arrow-blue" />
                    </a>
                </td>
            </tr>
        </tfoot>
    </table>
</section>
