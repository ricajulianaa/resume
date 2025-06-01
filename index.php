<?php
$name = "Rica Juliana Palisoc";
$role = "IT Support";
$location = "Cavite, Philippines";
$phone = "+639 457914155";
$email = "ricapalisoc44@gmail.com";

$skills = [
    "Lead Generation & Research",
    "CRM Management (HubSpot)",
    "Python Programming & SQL Basics",
    "Administrative Support",
    "Data Entry & Organization",
    "Strategic Planning & Scheduling",
    "Data Analysis & Reporting",
    "E-Commerce Marketing",
];

$tools = [
    "Amazon Seller Central", "GoHighLevel", "Slack", "Discord", "Trello",
    "Gmail", "Live Chat Tools", "Meta Business Suite",
    "Microsoft Office", "Google Sheets", "Instagram"
];

$certifications = [
    "Information Technology Specialist – Python (Certiport)",
    "Information Technology Specialist – Databases (Certiport)",
    "Cisco Certified Support Technician – Networking (Certiport)"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $name; ?> - Resume</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #fceff1, #fff0f4);
      color: #333;
      font-size: 13px;
    }

    .container {
      max-width: 960px;
      display: grid;
      grid-template-columns: 250px 1fr;
      gap: 1rem;
      background: #fff;
      margin: 2rem auto;
      padding: 1rem;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .sidebar {
      background: #fff5f8;
      border-radius: 10px;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .profile-pic {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      border: 3px solid #f8d2e0;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    .sidebar h1 {
      font-size: 1.3rem;
      color: #c2185b;
      margin: 0.5rem 0 0;
      text-align: center;
    }

    .sidebar p {
      font-size: 0.8rem;
      text-align: center;
      margin: 0.2rem 0;
    }

    .section {
      margin-bottom: 1rem;
      width: 100%;
    }

    .section h2 {
      font-size: 1rem;
      color: #c2185b;
      border-bottom: 1px solid #f2cdd4;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .section h2 i {
      color: #c2185b;
    }

    .section ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .section li::before {
      content: "\2022";
      color: #c2185b;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .section p, .section li {
      font-size: 0.85rem;
      line-height: 1.5;
    }

    .main {
      padding: 0.5rem 1rem;
    }

    .contact i {
      margin-right: 0.4rem;
      color: #c2185b;
    }

    @media print {
      body {
        background: white;
      }
      .container {
        box-shadow: none;
        border: none;
        margin: 0;
        padding: 0;
        width: 100%;
        display: block;
      }
    }
  </style>
</head>
<body>
<div class="container">
  <aside class="sidebar">
    <img src="PALISOC.jpg" alt="Rica Juliana Palisoc" class="profile-pic">
    <h1><?php echo $name; ?></h1>
    <p><?php echo $role; ?></p>
    <div class="contact">
      <p><i class="fas fa-map-marker-alt"></i> <?php echo $location; ?></p>
      <p><i class="fas fa-phone"></i> <?php echo $phone; ?></p>
      <p><i class="fas fa-envelope"></i> <?php echo $email; ?></p>
    </div>
    <div class="section">
      <h2><i class="fas fa-cogs"></i> Skills</h2>
      <ul><?php foreach ($skills as $skill) echo "<li>$skill</li>"; ?></ul>
    </div>
    <div class="section">
      <h2><i class="fas fa-tools"></i> Tools</h2>
      <ul><?php foreach ($tools as $tool) echo "<li>$tool</li>"; ?></ul>
    </div>
    <div class="section">
      <h2><i class="fas fa-certificate"></i> Certifications</h2>
      <ul><?php foreach ($certifications as $cert) echo "<li>$cert</li>"; ?></ul>
    </div>
  </aside>

  <main class="main">
    <section class="section">
      <h2><i class="fas fa-user"></i> About Me</h2>
      <p>I am a 2nd year student at FEU Institute of Technology, currently studying BS Information Technology with a specialization in Cybersecurity. I work part-time as a Virtual Assistant. I assist with virtual administrative tasks, lead generation, CRM management, and technical support.</p>
    </section>

    <section class="section">
      <h2><i class="fas fa-graduation-cap"></i> Education</h2>
      <p><strong>BS in Information Technology (Cybersecurity)</strong><br>
      FEU Institute of Technology<br>
      2023 – Present</p>
      <p><strong>STEM Strand</strong><br>
      Moreh Academy<br>
      2021 – 2023</p>
    </section>

    <section class="section">
      <h2><i class="fas fa-briefcase"></i> Experience</h2>
      <h3>Assistant & CRM Specialist</h3>
      <p>Remote | 2024 – Present</p>
      <ul>
        <li>Manage inboxes, calendars, and client communications.</li>
        <li>Build and organize lead generation lists and CRM databases (HubSpot).</li>
        <li>Research verified contacts for sales pipelines.</li>
        <li>Assist in setting up email sequences and workflow automations.</li>
      </ul>

      <h3>Airbnb System Tasks</h3>
      <p>Remote | Oct 2024 – Feb 2025</p>
      <ul>
        <li>Managed Airbnb listings and client communications for rental inquiries.</li>
        <li>Updated booking schedules and coordinated with cleaning teams.</li>
        <li>Handled pricing updates, calendar syncs, and guest messaging.</li>
      </ul>

      <h3>Bead Pattern and Pixel Art Designer</h3>
      <p>Private Client | Remote | Jan - Jun 2022</p>
      <ul>
        <li>Created organized bead and pixel art patterns for crafting projects.</li>
        <li>Delivered clean, color-coded visual guides based on client needs.</li>
        <li>Managed project files and communication for on-time delivery.</li>
      </ul>
    </section>
  </main>
</div>
</body>
</html>
