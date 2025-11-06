<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PureWash | Premium Laundry Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
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
  
    