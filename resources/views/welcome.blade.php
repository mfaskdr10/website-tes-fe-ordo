<?php

$sponsorships = [
  [
    "image" => "seedling-scout",
    "tier" => "Seedling Scout",
    "seeds" => "5 Seeds",
    "buy" => "IDR 75K",
    "benefits" => "Badge",
    "donors" => "4,900 Donors"
  ],
  [
    "image" => "sapling-savior",
    "tier" => "Sapling Savior",
    "seeds" => "10 Seeds",
    "buy" => "IDR 150K",
    "benefits" => "Badge + Pin",
    "donors" => "4,300 Donors"
  ],
  [
    "image" => "tree-titan",
    "tier" => "Tree Titan",
    "seeds" => "20 Seeds",
    "buy" => "IDR 300K",
    "benefits" => "Badge + Pin",
    "donors" => "15,000 Donors"
  ],
  [
    "image" => "mangrove-master",
    "tier" => "Mangrove Master",
    "seeds" => "50 Seeds",
    "buy" => "IDR 750K",
    "benefits" => "Badge + Pin + Bag",
    "donors" => "5,000 Donors"
  ],
  [
    "image" => "guardian-of-the-grove",
    "tier" => "Guardian of the Grove",
    "seeds" => "100 Seeds",
    "buy" => "IDR 1,500K",
    "benefits" => "Badge + Pin + Bag",
    "donors" => "300 Donors"
  ],
  [
    "image" => "mangrove-maven",
    "tier" => "Mangrove Maven",
    "seeds" => "200 Seeds",
    "buy" => "IDR 3,000K",
    "benefits" => "Badge + Pin + Bag",
    "donors" => "10 Donors"
  ],
];

$pangkat = "<sub>2</sub>";

$corporate_sponsorships = [
  [
    "row" => "Price",
    "eco" => "15 Million IDR",
    "green" => "30 Million IDR",
    "vanguard" => "45 Million IDR"
  ],
  [
    "row" => "CO$pangkat Sequestration",
    "eco" => "22,5 ton/year",
    "green" => "45 ton/year",
    "vanguard" => "67,5 ton/year"
  ],
  [
    "row" => "Number of Tress",
    "eco" => "1000 Trees",
    "green" => "2000 Trees",
    "vanguard" => "3000 Trees"
  ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Green Heaven</title>

  @vite(['resources/scss/app.scss'])

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"
    rel="stylesheet" />

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <nav class="navbar">
    <a href="#" class="navbar-logo">
      <img src="images/logo.svg" alt="logo" />
    </a>

    <div class="navbar-nav">
      <a href="#home" class="nav-link">About Green Haven</a>
      <a href="#about">Event Details</a>
      <a href="#menu">Our Sponsors</a>
      <a href="#contact">Leaderboard</a>
    </div>

    <div class="navbar-extra">
      <a href="#" class="btn">Plant a Mangrove</a>
    </div>
  </nav>

  <!-- Section Home -->
  <section class="hero">
    <div class="hero-content">
      <div class="hero-info">
        <p class="tagline">Green Heaven Project - Mangrove</p>
        <h1 class="title">
          Green Horizons Await, Join Us in Planting 10,000 Mangroves!
        </h1>
        <div class="support">
          <div class="mission">
            <div class="details">
              <img src="images/mangrove.svg" alt="" width="40" />
              <p class="count-tree"><span>5,690</span> / 10,000 Pohon</p>
            </div>

            <a href="#" class="btn">
              Support Our Mission
              <img src="images/arrow.svg" alt="arrow" />
            </a>
          </div>
          <div class="progress-bar">
            <div class="progress"></div>
          </div>
        </div>
      </div>
      <img src="images/hero-image.png" alt="" class="hero-image" />
    </div>
    <div class="leaderboard">
      <div class="leaderboard-heading">
        <h1 class="title">Leaderboard</h1>
        <a href="#" class="btn donation">Most Donation</a>
        <a href="#" class="btn recent">Most Recent</a>
      </div>

      <div class="leaderboard-donation">
        <div class="leader-card">
          <div class="card-left">
            <p class="number-card">01</p>
            <div class="card-details">
              <img
                src="images/planet-earth 1.svg"
                alt="planet-earth"
                width="60" />
              <div class="name-card">
                <p class="achive">Mangrove Maven</p>
                <h1 class="name">Budi Hartanto</h1>
              </div>
            </div>
          </div>

          <div class="card-right">
            <img src="images/mangrove.svg" alt="mangrove" />
            <h1 class="count">350 <span>Pohon</span></h1>
          </div>
        </div>
        <div class="leader-card">
          <div class="card-left">
            <p class="number-card">02</p>
            <div class="card-details">
              <img
                src="images/planet-earth 1.svg"
                alt="planet-earth"
                width="60" />
              <div class="name-card">
                <p class="achive">Mangrove Maven</p>
                <h1 class="name">Dewi Sartika</h1>
              </div>
            </div>
          </div>

          <div class="card-right">
            <img src="images/mangrove.svg" alt="mangrove" />
            <h1 class="count">350 <span>Pohon</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="support">
    <img src="images/jala.svg" alt="jala" />
    <img src="images/elfisheri.svg" alt="jala" />
    <img src="images/azarine.svg" alt="jala" />
    <img src="images/kompas.svg" alt="jala" />
    <img src="images/tribunnews.svg" alt="jala" />
    <img src="images/jawapos.svg" alt="jala" />
  </section>

  <section class="about">
    <img src="images/about-logo.svg" alt="about-logo" />
    <img src="images/about-logo-2.svg" alt="about-logo" />
    <h1>About Green Haven Project</h1>
    <p>
      The Green Haven Project - Mangrove aims to restore coastal ecosystems
      and raise awareness by planting mangroves and educating participants
      about the importance of these areas. This six-hour event will involve
      JCI members, local farmers, and students, focusing on combating beach
      erosion and promoting ESG values.
    </p>

    <div class="about-image">
      <div class="image-left">
        <img src="images/about-image.png" alt="" />
        <h3>Before mangroves were planted</h3>
      </div>
      <div class="image-right">
        <img src="images/about-image1.png" alt="" />
        <h3>After mangroves were planted</h3>
      </div>
      <div class="transformation">
        <img src="images/curved-arrow 1.svg" alt="" />
        <p>TRANSFORMATION</p>
      </div>
    </div>
  </section>

  <section class="event-summary">
    <h1 class="title">Event Summary</h1>
    <p class="desc">
      We give you a brief overview of the event to give you a glimpse of what
      we're doing in the Green Haven Project, download the detailed PDF to see
      how you can get involved
    </p>

    <div class="event-details">
      <div class="time">
        <h2>26/04/2024</h2>
        <h1>08:00 - 11:00 WIB</h1>
        <p>
          Join the impactful journey of planting mangroves, where you'll
          learn, collaborate with locals, earn recognition, and share your
          story through media coverage
        </p>
        <hr />
        <a href="#" class="btn">
          <img src="images/document-download.svg" alt="" />
          View Event Details
        </a>
      </div>

      <div class="image-slide">
        <img src="images/event-summary.png" alt="" />
      </div>
    </div>

    <div class="step">
      <div class="step-items active">
        <h1 class="number">01</h1>
        <p class="step-details">
          Introducing the beauty of mangroves on a journey to the planting
          site.
        </p>
      </div>
      <div class="step-items">
        <h1 class="number">02</h1>
        <p class="step-details">
          Working together with local farmers while planting each mangrove
        </p>
      </div>
      <div class="step-items">
        <h1 class="number">03</h1>
        <p class="step-details">
          Exploring the wonders of mangrove ecotourism, an educational
          adventure.
        </p>
      </div>
      <div class="step-items">
        <h1 class="number">04</h1>
        <p class="step-details">
          Receive a plaque & badge, a mark of honor for every tree you plant.
        </p>
      </div>
      <div class="step-items">
        <h1 class="number">05</h1>
        <p class="step-details">
          Coverage & documentation by news media, share your story of change!
        </p>
      </div>
    </div>
  </section>

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
              <img src="images/sponshorship/<?= $sponsorship['image'] ?>.svg" alt="" />
              <?= $sponsorship["tier"]  ?>
            </td>
            <td><?= $sponsorship["seeds"]; ?></td>
            <td><?= $sponsorship["buy"]; ?></td>
            <td><?= $sponsorship["benefits"]; ?></td>
            <td><?= $sponsorship["donors"]; ?></td>
            <td class="action">
              <a href="#" class="btn">
                Support Our Mission
                <i class='bx bx-chevron-right'></i>
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
            <td><?= $corporate_sponsorship["row"]; ?></td>
            <td><?= $corporate_sponsorship["eco"]; ?></td>
            <td><?= $corporate_sponsorship["green"]; ?></td>
            <td><?= $corporate_sponsorship["vanguard"]; ?></td>
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
            <a href="#" class="btn">
              Support Our Mission
              <i class='bx bx-chevron-right'></i>
            </a>
          </td>
          <td>
            <a href="#" class="btn">
              Support Our Mission
              <i class='bx bx-chevron-right'></i>
            </a>
          </td>
          <td>
            <a href="#" class="btn">
              Support Our Mission
              <i class='bx bx-chevron-right'></i>
            </a>
          </td>
        </tr>
      </tfoot>
    </table>
  </section>

  <section class="donate">

    <h1 class="title">
      Donate Today and be a <br />
      Guardian of the Green Belt.
    </h1>
    <p class="desc">
      Join us in our mission to rejuvenate and protect our shorelines
      by donating to our mangrove planting project.
    </p>
    <a href="#" class="btn">
      Support Our Mission
      <i class='bx bx-chevron-right'></i>
    </a>

    <img src="images/donate-image.png" alt="" class="donate-image">
  </section>

  <footer>
    <p>Nama yang Mengerjakan Test : Muhammad Fadhil Alvan Syah</p>
  </footer>
</body>

</html>