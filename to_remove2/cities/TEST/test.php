<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaundryMate YZD Series Flatwork Ironer</title>
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8fafc;
      color: #333;
      line-height: 1.7;
    }
    h1,h2,h3 { margin: 0 0 15px; font-weight: 600; }
    p { margin-bottom: 15px; }
    a.btn {
      display: inline-block;
      background: #0077ff;
      color: #fff;
      padding: 12px 25px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: 600;
      transition: 0.3s;
    }
    a.btn:hover { background: #005fcc; }

    /* Hero */
    .hero {
      background: linear-gradient(to right, #0077ff, #00b4d8);
      color: #fff;
      text-align: center;
      padding: 100px 20px;
    }
    .hero h1 { font-size: 2.5rem; }
    .hero p { font-size: 1.1rem; margin-bottom: 25px; }

    /* Section */
    .section { padding: 60px 20px; max-width: 1200px; margin: auto; }

    /* Two column */
    .two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
    }
    .two-col img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .card {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
    .card h3 { margin-bottom: 10px; color: #0077ff; }

    /* Accordion */
    .accordion {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      margin-top: 20px;
    }
    .accordion-item {
      border-bottom: 1px solid #eee;
    }
    .accordion-header {
      padding: 15px 20px;
      cursor: pointer;
      font-weight: 600;
      background: #f9fbfd;
    }
    .accordion-content {
      display: none;
      padding: 15px 20px;
      background: #fff;
    }
    .accordion-item.active .accordion-content {
      display: block;
    }

    /* Grid Services */
    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .service {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    /* Table */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table th, table td {
      padding: 12px 15px;
      border: 1px solid #ddd;
    }
    table th {
      background: #0077ff;
      color: #fff;
      text-align: left;
    }
    table tr:nth-child(even) { background: #f2f6fc; }

    /* CTA */
    .cta {
      background: linear-gradient(to right, #0077ff, #00b4d8);
      color: #fff;
      text-align: center;
      padding: 70px 20px;
    }
    .cta h2 { margin-bottom: 20px; }
  </style>
</head>
<body>

  <!-- Hero -->
  <section class="hero">
    <h1>LaundryMate YZD Series Flatwork Ironer</h1>
    <p>Professional Ironing Solution for Laundromats, Hotels & Commercial Laundry</p>
    <a href="#contact" class="btn">Get Free Consultation</a>
  </section>

  <!-- Why Choose -->
  <section class="section two-col">
    <div>
      <h2>Why Choose the YZD Series?</h2>
      <p>The YZD Series offers unmatched performance, reliability, and user-friendly features, making it an ideal choice for businesses looking to maximize efficiency and profitability.</p>
      <ul>
        <li>🔥 Flexible Heating Options – Steam, Electric, Gas</li>
        <li>⚡ Multiple Roller Configurations – 1 to 5 rollers</li>
        <li>💡 Energy-Saving Design – Wider ironing area</li>
        <li>🛡 Safety First – Auto-stop & pressure control</li>
        <li>🏗 Durable Build – Stainless steel rollers</li>
      </ul>
    </div>
    <div>
      <img src="machine.jpg" alt="LaundryMate YZD Series Flatwork Ironer">
    </div>
  </section>

  <!-- Key Benefits -->
  <section class="section">
    <h2 style="text-align:center;">Key Benefits</h2>
    <div class="cards">
      <div class="card"><h3>Flexible Heating</h3><p>Choose steam, electric, or gas.</p></div>
      <div class="card"><h3>Energy Saving</h3><p>Independent steam control saves costs.</p></div>
      <div class="card"><h3>Safety Features</h3><p>Emergency stop, jam detection.</p></div>
      <div class="card"><h3>Durable Build</h3><p>Stainless steel & galvanized parts.</p></div>
      <div class="card"><h3>Easy Maintenance</h3><p>Simple oiling & belt adjustment.</p></div>
    </div>
  </section>

  <!-- Features Accordion -->
  <section class="section">
    <h2 style="text-align:center;">Features That Drive Success</h2>
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-header">Efficiency & Performance</div>
        <div class="accordion-content">
          <p>Optimized roller design for fast ironing.</p>
          <p>Adjustable speed for various fabrics.</p>
          <p>Reliable chain drive mechanism.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">Energy Savings</div>
        <div class="accordion-content">
          <p>300° rotating joint for coverage.</p>
          <p>Independent steam outlet valves.</p>
          <p>Optional steam adjustment.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">Safety & Reliability</div>
        <div class="accordion-content">
          <p>Transparent baffle plate for monitoring.</p>
          <p>Auto-stop jam detection.</p>
          <p>Emergency stop switches around machine.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">User-Friendly & Convenient</div>
        <div class="accordion-content">
          <p>Simple roller addition/reduction.</p>
          <p>Easy oil feeding & belt adjustment.</p>
          <p>Clear operator instructions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Business Services -->
  <section class="section">
    <h2 style="text-align:center;">Helping You Build a Profitable Laundry Business</h2>
    <div class="services">
      <div class="service">Business Promotion & Branding</div>
      <div class="service">Consultancy for Investors</div>
      <div class="service">Finance Advisory</div>
      <div class="service">Self-Service Laundromat Setup</div>
      <div class="service">Revenue Generation Strategies</div>
      <div class="service">Research & Planning</div>
    </div>
  </section>

  <!-- Specifications -->
  <section class="section">
    <h2 style="text-align:center;">Specifications</h2>
    <table>
      <tr><th>Feature</th><th>Details</th></tr>
      <tr><td>Model</td><td>YZD Series</td></tr>
      <tr><td>Heating Types</td><td>Steam, Electric, Gas</td></tr>
      <tr><td>Roller Options</td><td>1–5 Rollers</td></tr>
      <tr><td>Safety Features</td><td>Emergency stop, auto-jam detection, pressure control</td></tr>
      <tr><td>Build Material</td><td>Stainless steel & galvanized steel</td></tr>
      <tr><td>Manufacturer</td><td>Shanghai LaundryMate Machinery Co., Ltd.</td></tr>
    </table>
  </section>

  <!-- CTA -->
  <section class="cta" id="contact">
    <h2>Take Your Laundry Business to the Next Level</h2>
    <p>Contact us to discuss your equipment needs and business goals.</p>
    <a href="mailto:info@laundrymate.com" class="btn">Request a Quote</a>
  </section>

  <!-- Accordion JS -->
  <script>
    const items = document.querySelectorAll('.accordion-item');
    items.forEach(item => {
      item.querySelector('.accordion-header').addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>

</body>
</html>
