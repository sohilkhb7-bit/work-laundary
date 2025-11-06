<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PureWash | Premium Laundry Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary: #0b74de;
      --primary-dark: #094f9d;
      --secondary: #00d4ff;
      --dark: #0a0e27;
      --light: #f8fafc;
      --gradient: linear-gradient(135deg, #0b74de 0%, #00d4ff 100%);
    }

    body {
      font-family: "Poppins", sans-serif;
      color: #333;
      background-color: var(--light);
      overflow-x: hidden;
    }

    .bg-animation {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      opacity: 0.03;
    }

    .bubble {
      position: absolute;
      border-radius: 50%;
      background: var(--gradient);
      animation: float 15s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-100px) rotate(180deg); }
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
      z-index: 1000;
      transition: all 0.3s ease;
    }

    header.scrolled {
      background: rgba(255, 255, 255, 0.98);
      box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.2rem 7%;
      max-width: 1400px;
      margin: 0 auto;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 1.8rem;
      font-weight: 800;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      cursor: pointer;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 2.5rem;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      position: relative;
      transition: color 0.3s;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gradient);
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .cta-btn {
      padding: 0.7rem 1.8rem;
      background: var(--gradient);
      color: white;
      border: none;
      border-radius: 50px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(11, 116, 222, 0.3);
    }

    .cta-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(11, 116, 222, 0.4);
    }

    .hero {
      margin-top: 80px;
      min-height: 90vh;
      background: linear-gradient(135deg, rgba(11, 116, 222, 0.95) 0%, rgba(0, 212, 255, 0.85) 100%),
        url('https://images.unsplash.com/photo-1581574209461-7cb1c5d8a782?auto=format&fit=crop&w=1600&q=80') center/cover fixed;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      width: 150%;
      height: 150%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
      background-size: 50px 50px;
      animation: moveGrid 20s linear infinite;
    }

    @keyframes moveGrid {
      0% { transform: translate(0, 0); }
      100% { transform: translate(50px, 50px); }
    }

    .hero-content {
      text-align: center;
      color: white;
      z-index: 2;
      max-width: 900px;
      padding: 2rem;
      animation: fadeInUp 1s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      line-height: 1.2;
      text-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    .hero p {
      font-size: 1.3rem;
      margin-bottom: 2.5rem;
      opacity: 0.95;
      font-weight: 300;
    }

    .hero-buttons {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-primary {
      padding: 1rem 2.5rem;
      background: white;
      color: var(--primary);
      border: none;
      border-radius: 50px;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .btn-secondary {
      padding: 1rem 2.5rem;
      background: transparent;
      color: white;
      border: 2px solid white;
      border-radius: 50px;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: white;
      color: var(--primary);
      transform: translateY(-3px);
    }

    .stats {
      padding: 4rem 7%;
      background: white;
      box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.05);
      position: relative;
      z-index: 10;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 3rem;
      max-width: 1400px;
      margin: 0 auto;
      text-align: center;
    }

    .stat-item h3 {
      font-size: 3rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 800;
      margin-bottom: 0.5rem;
    }

    .stat-item p {
      color: #666;
      font-weight: 500;
    }

    .services {
      padding: 6rem 7%;
      background: var(--light);
    }

    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 4rem;
    }

    .section-header h2 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 800;
    }

    .section-header p {
      color: #666;
      font-size: 1.1rem;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2.5rem;
      max-width: 1400px;
      margin: 0 auto;
    }

    .service-card {
      background: white;
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      position: relative;
      overflow: hidden;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--gradient);
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: 0;
    }

    .service-card:hover::before {
      opacity: 0.05;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 60px rgba(11, 116, 222, 0.2);
    }

    .service-card > * {
      position: relative;
      z-index: 1;
    }

    .service-icon {
      width: 80px;
      height: 80px;
      margin-bottom: 1.5rem;
      transition: transform 0.4s ease;
    }

    .service-card:hover .service-icon {
      transform: scale(1.1) rotate(5deg);
    }

    .service-card h3 {
      font-size: 1.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
      font-weight: 700;
    }

    .service-card p {
      color: #666;
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .service-features {
      list-style: none;
      margin-top: 1.5rem;
    }

    .service-features li {
      padding: 0.5rem 0;
      color: #555;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .service-features li::before {
      content: '✓';
      color: var(--primary);
      font-weight: bold;
      font-size: 1.2rem;
    }

    .pricing {
      padding: 6rem 7%;
      background: white;
    }

    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2.5rem;
      max-width: 1400px;
      margin: 0 auto;
    }

    .pricing-card {
      background: white;
      border: 2px solid #e5e7eb;
      border-radius: 20px;
      padding: 2.5rem;
      text-align: center;
      transition: all 0.4s ease;
      position: relative;
    }

    .pricing-card.featured {
      border-color: var(--primary);
      transform: scale(1.05);
      box-shadow: 0 20px 60px rgba(11, 116, 222, 0.2);
    }

    .pricing-card.featured .badge {
      position: absolute;
      top: -15px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--gradient);
      color: white;
      padding: 0.4rem 1.5rem;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .pricing-card h3 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: var(--primary);
    }

    .price {
      font-size: 3rem;
      font-weight: 800;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.5rem;
    }

    .price span {
      font-size: 1.2rem;
      color: #666;
    }

    .pricing-features {
      list-style: none;
      margin: 2rem 0;
      text-align: left;
    }

    .pricing-features li {
      padding: 0.7rem 0;
      color: #555;
      border-bottom: 1px solid #f1f1f1;
    }

    .testimonials {
      padding: 6rem 7%;
      background: var(--dark);
      color: white;
      position: relative;
      overflow: hidden;
    }

    .testimonials::before {
      content: '"';
      position: absolute;
      font-size: 30rem;
      opacity: 0.03;
      top: -100px;
      right: 50px;
      font-family: Georgia, serif;
    }

    .testimonial-slider {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2.5rem;
    }

    .testimonial-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 2.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.4s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.08);
    }

    .testimonial-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: 700;
    }

    .testimonial-info h4 {
      font-weight: 600;
      margin-bottom: 0.3rem;
    }

    .rating {
      color: #ffd700;
      font-size: 1.1rem;
    }

    .testimonial-text {
      font-style: italic;
      line-height: 1.7;
      opacity: 0.9;
    }

    .contact {
      padding: 6rem 7%;
      background: var(--light);
    }

    .contact-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    .contact-info h3 {
      font-size: 2rem;
      margin-bottom: 2rem;
      color: var(--primary);
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
      padding: 1rem;
      background: white;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .info-item:hover {
      transform: translateX(10px);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .info-icon {
      width: 50px;
      height: 50px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
    }

    .contact-form {
      background: white;
      padding: 3rem;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #333;
      font-weight: 500;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 1rem;
      border: 2px solid #e5e7eb;
      border-radius: 10px;
      font-size: 1rem;
      transition: all 0.3s ease;
      font-family: inherit;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(11, 116, 222, 0.1);
    }

    .submit-btn {
      width: 100%;
      padding: 1rem;
      background: var(--gradient);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 30px rgba(11, 116, 222, 0.3);
    }

    footer {
      background: var(--dark);
      color: white;
      padding: 3rem 7%;
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 3rem;
      margin-bottom: 2rem;
    }

    .footer-section h3 {
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
    }

    .footer-section p {
      line-height: 1.8;
      opacity: 0.8;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      opacity: 0.8;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      opacity: 1;
      padding-left: 5px;
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }

    .social-links a {
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background: var(--gradient);
      transform: translateY(-3px);
    }

    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      opacity: 0.6;
    }

    @media (max-width: 968px) {
      .hero h1 {
        font-size: 2.5rem;
      }

      .contact-container {
        grid-template-columns: 1fr;
      }

      .nav-links {
        display: none;
      }

      .navbar {
        padding: 1rem 5%;
      }
    }
  </style>
</head>
<body>
  <div class="bg-animation" id="bgAnimation"></div>

  <header id="header">
    <nav class="navbar">
      <div class="logo">🧺 PureWash</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#testimonials">Reviews</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <button class="cta-btn" onclick="scrollToSection('contact')">Book Now</button>
    </nav>
  </header>

  <section class="hero" id="home">
    <div class="hero-content">
      <h1>Premium Laundry & Dry Cleaning</h1>
      <p>Experience the freshness of perfectly cleaned clothes — delivered to your doorstep with care, precision, and unmatched quality.</p>
      <div class="hero-buttons">
        <button class="btn-primary" onclick="scrollToSection('contact')">Schedule Pickup</button>
        <button class="btn-secondary" onclick="scrollToSection('services')">Explore Services</button>
      </div>
    </div>
  </section>

  <section class="stats">
    <div class="stats-grid">
      <div class="stat-item">
        <h3 class="counter" data-target="15000">0</h3>
        <p>Happy Customers</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="50000">0</h3>
        <p>Orders Completed</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="98">0</h3>
        <p>Satisfaction Rate</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="24">0</h3>
        <p>Hour Service</p>
      </div>
    </div>
  </section>

  <section class="services" id="services">
    <div class="section-header">
      <h2>Our Premium Services</h2>
      <p>We offer comprehensive laundry solutions tailored to your needs with cutting-edge technology and eco-friendly practices.</p>
    </div>
    <div class="service-grid">
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/1514/1514659.png" alt="Washing">
        <h3>Washing & Ironing</h3>
        <p>Premium fabric care using advanced washing techniques and precision ironing for a crisp, fresh finish.</p>
        <ul class="service-features">
          <li>Fabric-specific treatments</li>
          <li>Steam pressing included</li>
          <li>Stain removal expertise</li>
          <li>Same-day service available</li>
        </ul>
      </div>
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/1000/1000946.png" alt="Dry Cleaning">
        <h3>Dry Cleaning</h3>
        <p>Eco-friendly dry cleaning solutions perfect for delicate fabrics, suits, and special garments.</p>
        <ul class="service-features">
          <li>GreenEarth® cleaning</li>
          <li>Expert stain treatment</li>
          <li>Garment inspection</li>
          <li>Professional finishing</li>
        </ul>
      </div>
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/809/809957.png" alt="Pickup">
        <h3>Pickup & Delivery</h3>
        <p>Convenient doorstep collection and delivery service. Schedule online and track your order in real-time.</p>
        <ul class="service-features">
          <li>Free pickup & delivery</li>
          <li>Flexible scheduling</li>
          <li>Real-time tracking</li>
          <li>Contactless service</li>
        </ul>
      </div>
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/2917/2917995.png" alt="Express">
        <h3>Express Service</h3>
        <p>Need it fast? Our express service ensures your clothes are cleaned and returned within hours.</p>
        <ul class="service-features">
          <li>4-hour turnaround</li>
          <li>Priority processing</li>
          <li>Quality guaranteed</li>
          <li>Emergency service</li>
        </ul>
      </div>
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/3050/3050155.png" alt="Alterations">
        <h3>Alterations & Repairs</h3>
        <p>Expert tailoring services including hemming, resizing, button replacement, and zipper repairs.</p>
        <ul class="service-features">
          <li>Professional tailoring</li>
          <li>Button replacement</li>
          <li>Zipper repairs</li>
          <li>Custom fitting</li>
        </ul>
      </div>
      <div class="service-card">
        <img class="service-icon" src="https://cdn-icons-png.flaticon.com/512/2643/2643513.png" alt="Subscription">
        <h3>Subscription Plans</h3>
        <p>Save more with our flexible subscription plans. Perfect for families and professionals.</p>
        <ul class="service-features">
          <li>Up to 30% savings</li>
          <li>Priority booking</li>
          <li>Dedicated support</li>
          <li>Cancel anytime</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="pricing" id="pricing">
    <div class="section-header">
      <h2>Transparent Pricing</h2>
      <p>Choose a plan that fits your lifestyle. All plans include free pickup and delivery.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <h3>Basic</h3>
        <div class="price">$29<span>/month</span></div>
        <ul class="pricing-features">
          <li>Up to 20 lbs per month</li>
          <li>Standard washing & ironing</li>
          <li>Free pickup & delivery</li>
          <li>48-hour turnaround</li>
          <li>Email support</li>
        </ul>
        <button class="cta-btn">Get Started</button>
      </div>
      <div class="pricing-card featured">
        <span class="badge">Most Popular</span>
        <h3>Premium</h3>
        <div class="price">$49<span>/month</span></div>
        <ul class="pricing-features">
          <li>Up to 40 lbs per month</li>
          <li>Dry cleaning included</li>
          <li>Free pickup & delivery</li>
          <li>24-hour turnaround</li>
          <li>Priority support</li>
          <li>Stain protection</li>
        </ul>
        <button class="cta-btn">Get Started</button>
      </div>
      <div class="pricing-card">
        <h3>Business</h3>
        <div class="price">$99<span>/month</span></div>
        <ul class="pricing-features">
          <li>Unlimited laundry</li>
          <li>All services included</li>
          <li>Free pickup & delivery</li>
          <li>Same-day service</li>
          <li>Dedicated account manager</li>
          <li>Custom invoicing</li>
        </ul>
        <button class="cta-btn">Get Started</button>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="section-header">
      <h2>What Our Customers Say</h2>
      <p>Don't just take our word for it — hear from our satisfied customers</p>
    </div>
    <div class="testimonial-slider">
      <div class="testimonial-card">
        <div class="testimonial-header">
          <div class="avatar">RS</div>
          <div class="testimonial-info">
            <h4>Riya Sharma</h4>
            <div class="rating">★★★★★</div>
          </div>
        </div>
        <p class="testimonial-text">"PureWash has completely transformed my laundry routine. The convenience of pickup and delivery, combined with their exceptional service, makes them my go-to choice!"</p>
      </div>        

        <div class="testimonial-card">
            <div class="testimonial-header">
            <div class="avatar">AK</div>
            <div class="testimonial-info">
                <h4>Amit Kumar</h4>
                <div class="rating">★★★★★</div>
            </div>
            </div>
            <p class="testimonial-text">"I was amazed at how well PureWash handled my delicate fabrics. Their dry cleaning service is top-notch, and my clothes always come back looking brand new."</p>    
        </div>
        <div class="testimonial-card">
            <div class="testimonial-header">
            <div class="avatar">PN</div>
            <div class="testimonial-info">
                <h4>Pooja Nair</h4>
                <div class="rating">★★★★★</div>
            </div>
            </div>
            <p class="testimonial-text">"The subscription plan has been a game-changer for my busy schedule. I love the flexibility and savings it offers. Highly recommend PureWash to everyone!"</p>
        </div>
    </div>
    </section>
    <section class="contact" id="contact">
    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Have questions or need assistance? We're here to help!</p>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <div class="info-item">
            <div class="info-icon">📞</div>
            <div>
                <h4>Phone</h4>
                <p>+1 (555) 123-4567</p>
            </div>
            </div>
            <div class="info-item">
            <div class="info-icon">📧</div>
            <div>
                <h4>Email</h4>
                <p>laundary@gmail.com</p>
            </div>
            </div>
            <div class="info-item">
            <div class="info-icon">📍</div>
            <div>
                <h4>Address</h4>
                <p>123 Clean St, Washville, CA 90210</p>
            </div>
            </div>
        </div>
        <form class="contact-form">
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group
">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
    </section>
    <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>About PureWash</h3>
        <p>PureWash is dedicated to providing top-quality laundry and dry cleaning services with convenience and care. Our mission is to make your life easier, one clean garment at a time.</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#testimonials">Reviews</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Follow Us</h3>
        <div class="social-links">
          <a href="#" aria-label="Facebook">📘</a>
          <a href="#" aria-label="Twitter">🐦</a>
          <a href="#" aria-label="Instagram">📸</a>
          <a href="#" aria-label="LinkedIn">💼</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2024 PureWash. All rights reserved.
    </div>
  </footer>
  
    