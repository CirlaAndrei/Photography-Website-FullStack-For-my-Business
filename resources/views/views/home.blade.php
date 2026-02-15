<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogue Vision | Human-Centric Photography</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="canonical" href="{{ url()->current() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <meta name="description" content="Vogue Vision Photography - Human-crafted portraits for digital presence & artistic expression in Bucharest. LinkedIn headshots, creative portraits, professional branding.">
    <meta name="keywords" content="photographer Bucharest, LinkedIn headshots, portrait photography, creative portraits, professional photos, branding photography">
    <meta name="author" content="Vogue Vision">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Vogue Vision Photography" />
    <meta property="og:title" content="Vogue Vision | Human-Centric Photography">
    <meta property="og:description" content="Real portraits for a digital world. Professional & artistic photography in Bucharest.">
    <meta property="og:image" content="{{ asset('images/portfolio/1.jpg') }}">
    <meta property="og:url" content="http://yourdomain.com">
    <meta name="twitter:card" content="summary_large_image">
    @livewireStyles
    <script type="application/ld+json">
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ProfessionalService",
      "@id": "{{ url('/') }}#business",
      "name": "Vogue Vision Photography",
      "image": "{{ asset('images/logo.png') }}",
      "description": "Human-crafted portrait photography for professional digital presence and artistic expression in Bucharest.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Bucharest",
        "addressCountry": "RO"
      }
    }
  ]
}
</script>
@endverbatim
</script>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav-logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Vogue Vision Logo" class="logo-img">
                </a>
            </div>
            <div class="nav-menu">
                <ul class="nav-items">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav-cta">
                <a href="#contact" class="btn btn-outline">Book a Session</a>
            </div>
        </nav>

        <section class="hero container" id="home">
            <div class="hero-content">
                <h1 class="hero-title">Real Portraits for a Digital World</h1>
                <p class="hero-subtitle">Human-crafted photography for your professional presence & creative expression</p>
                <div class="hero-buttons">
                    <a href="#services" class="btn btn-primary">Digital Presence</a>
                    <a href="#portfolio" class="btn btn-secondary">Artistic Expression</a>
                </div>
            </div>
        </section>
    </header>
    <section class="philosophy section-padding" id="process">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">OUR PHILOSOPHY</span>
            <h2 class="section-title">The Human Algorithm</h2>
            <p class="section-description">
                We combine the classic knowledge of traditional portraiture with an innovative style. 
                In an age of AI-generated imagery, we believe in the irreplaceable value of human connection, 
                candid moments, and authentic storytelling.
            </p>
        </div>

        <div class="philosophy-grid">
            <div class="philosophy-card">
                <div class="philosophy-icon">01</div>
                <h3>Connect</h3>
                <p>We start with conversation, not a brief. Understanding your story is the foundation of every authentic portrait.</p>
            </div>
            
            <div class="philosophy-card">
                <div class="philosophy-icon">02</div>
                <h3>Capture</h3>
                <p>Candid moments, real emotions, the authentic you. No stiff poses—just genuine interaction.</p>
            </div>
            
            <div class="philosophy-card">
                <div class="philosophy-icon">03</div>
                <h3>Create</h3>
                <p>AI assists only in editing—never replaces the soul. The final image is 100% human-crafted.</p>
            </div>
        </div>
    </div>
</section>
<section class="portfolio section-padding" id="portfolio">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">OUR WORK</span>
            <h2 class="section-title">Portfolio Gallery</h2>
            <p class="section-description">
                Showcasing professional digital presence portraits and artistic creative expression.
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="portfolio-carousel">
            <button class="carousel-btn prev" aria-label="Previous">‹</button>
            
<div class="carousel-track">
    <!-- Professional Images (1-4) -->
    <div class="carousel-slide professional">
        <img src="{{ asset('images/portfolio/1.jpg') }}" alt="Professional headshot photography Bucharest">
        <div class="slide-overlay">
            <h3>LinkedIn Headshot</h3>
            <p>Professional</p>
        </div>
    </div>
    
    <div class="carousel-slide professional">
        <img src="{{ asset('images/portfolio/2.jpg') }}" alt="Corporate portrait photography Romania">
        <div class="slide-overlay">
            <h3>Corporate Branding</h3>
            <p>Professional</p>
        </div>
    </div>
    
    <div class="carousel-slide professional">
        <img src="{{ asset('images/portfolio/3.jpg') }}" alt="Business portrait session Bucharest">
        <div class="slide-overlay">
            <h3>Executive Portrait</h3>
            <p>Professional</p>
        </div>
    </div>
    
    <div class="carousel-slide professional">
        <img src="{{ asset('images/portfolio/4.jpg') }}" alt="Professional photographer Bucharest">
        <div class="slide-overlay">
            <h3>Personal Branding</h3>
            <p>Professional</p>
        </div>
    </div>
    
    <!-- Artistic Images (5-8) -->
    <div class="carousel-slide artistic">
        <img src="{{ asset('images/portfolio/5.jpg') }}" alt="Artistic portrait photography Romania">
        <div class="slide-overlay">
            <h3>Urban Editorial</h3>
            <p>Artistic</p>
        </div>
    </div>
    
    <div class="carousel-slide artistic">
        <img src="{{ asset('images/portfolio/6.jpg') }}" alt="Creative portrait session Bucharest">
        <div class="slide-overlay">
            <h3>Conceptual Art</h3>
            <p>Artistic</p>
        </div>
    </div>
    
    <div class="carousel-slide artistic">
        <img src="{{ asset('images/portfolio/7.jpg') }}" alt="Dramatic portrait photography">
        <div class="slide-overlay">
            <h3>Dramatic Portrait</h3>
            <p>Artistic</p>
        </div>
    </div>
    
    <div class="carousel-slide artistic">
        <img src="{{ asset('images/portfolio/8.jpg') }}" alt="Creative photography Romania">
        <div class="slide-overlay">
            <h3>Creative Vision</h3>
            <p>Artistic</p>
        </div>
    </div>
    
    <!-- Editorial & Branding (9-12) -->
    <div class="carousel-slide editorial">
        <img src="{{ asset('images/portfolio/9.jpg') }}" alt="Fashion editorial photography Bucharest">
        <div class="slide-overlay">
            <h3>Fashion Editorial</h3>
            <p>Editorial</p>
        </div>
    </div>
    
    <div class="carousel-slide branding">
        <img src="{{ asset('images/portfolio/10.jpg') }}" alt="Personal branding photoshoot Romania">
        <div class="slide-overlay">
            <h3>Brand Identity</h3>
            <p>Branding</p>
        </div>
    </div>
    
    <div class="carousel-slide editorial">
        <img src="{{ asset('images/portfolio/11.jpg') }}" alt="Editorial portrait session">
        <div class="slide-overlay">
            <h3>Magazine Editorial</h3>
            <p>Editorial</p>
        </div>
    </div>
    
    <div class="carousel-slide branding">
        <img src="{{ asset('images/portfolio/12.jpg') }}" alt="Brand photography Bucharest">
        <div class="slide-overlay">
            <h3>Commercial Branding</h3>
            <p>Branding</p>
        </div>
    </div>
        <div class="carousel-slide branding">
        <img src="{{ asset('images/portfolio/13.jpg') }}" alt="Brand photography Bucharest">
        <div class="slide-overlay">
            <h3>Commercial Branding</h3>
            <p>Branding</p>
        </div>
    </div>
</div>
            
            <button class="carousel-btn next" aria-label="Next">›</button>
        </div>

        <!-- Carousel Dots -->
        <div class="carousel-dots">
            <!-- Dots will be added by JavaScript -->
        </div>
    </div>
</section>
<section class="services section-padding" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">SERVICES</span>
            <h2 class="section-title">Photography Packages</h2>
            <p class="section-description">
                Tailored sessions for your digital presence or creative expression. 
                All packages include the human touch—AI assists only in editing.
            </p>
        </div>

<div class="services-grid">
    <!-- Digital Presence Column -->
    <div class="services-column">
        <div class="column-header">
            <h3>Digital Presence</h3>
            <p>For LinkedIn, professional bios, dating apps, and personal branding</p>
        </div>
        
        <!-- Basic -->
        <div class="package-card">
            <div class="package-header">
                <h4>Essential Profile</h4>
                <div class="package-price">299 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>2 hour session</li>
                <li>1 location (studio)</li>
                <li>1 outfit</li>
                <li>3 high-res edited portraits</li>
                <li>Basic retouching</li>
                <li>Digital delivery (web)</li>
            </ul>
            <a href="#contact" class="btn btn-primary">Book Now</a>
        </div>
        
        <!-- Most Popular -->
        <div class="package-card featured">
            <div class="package-badge">Most Popular</div>
            <div class="package-header">
                <h4>Professional Presence</h4>
                <div class="package-price">599 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>4+ hour session</li>
                <li>2 locations (studio & outdoor)</li>
                <li>3 outfit changes</li>
                <li>10 edited images</li>
                <li>Advanced retouching</li>
                <li>Consultation before shoot</li>
                <li>Digital delivery (web + print-ready)</li>
            </ul>
            <a href="#contact" class="btn btn-primary">Book Now</a>
        </div>
        
        <!-- Premium -->
        <div class="package-card">
            <div class="package-header">
                <h4>Complete Brand Package</h4>
                <div class="package-price">999 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>Full day session (8 hours)</li>
                <li>Multiple locations</li>
                <li>Unlimited outfit changes</li>
                <li>20+ edited images</li>
                <li>Professional hair & makeup artist included</li>
                <li>Full brand consultation</li>
                <li>5 AI-assisted style-test images</li>
                <li>Priority editing (3 days)</li>
                <li>All files (web + print + social media formats)</li>
            </ul>
            <a href="#contact" class="btn btn-primary">Book Now</a>
        </div>
    </div>
    
    <!-- Artistic Expression Column -->
    <div class="services-column">
        <div class="column-header">
            <h3>Artistic Expression</h3>
            <p>Creative, editorial, and concept shoots for personal art or branding</p>
        </div>
        
        <!-- Basic Artistic -->
        <div class="package-card">
            <div class="package-header">
                <h4>Creative Starter</h4>
                <div class="package-price">399 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>2 hour session</li>
                <li>1 location</li>
                <li>Simple theme/styling</li>
                <li>5 artistic edited images</li>
                <li>Basic dramatic editing</li>
                <li>Digital delivery</li>
            </ul>
            <a href="#contact" class="btn btn-secondary">Start Project</a>
        </div>
        
        <!-- Popular Artistic -->
        <div class="package-card">
            <div class="package-header">
                <h4>Artistic Vision</h4>
                <div class="package-price">799 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>4+ hour session</li>
                <li>2 locations</li>
                <li>Concept development consultation</li>
                <li>Professional styling guidance</li>
                <li>12 artistic edited images</li>
                <li>Advanced dramatic editing</li>
                <li>3 images with special effects</li>
                <li>Digital + 3 premium prints</li>
            </ul>
            <a href="#contact" class="btn btn-secondary">Start Project</a>
        </div>
        
        <!-- Premium Artistic -->
        <div class="package-card">
            <div class="package-header">
                <h4>Ultimate Concept Experience</h4>
                <div class="package-price">1,499 <span>RON</span></div>
            </div>
            <ul class="package-features">
                <li>Full day session (8+ hours)</li>
                <li>Unlimited locations in Bucharest</li>
                <li>Complete concept development</li>
                <li>Professional hair & makeup artist</li>
                <li>Costume/stylist consultation</li>
                <li>25+ artistic edited images</li>
                <li>Cinematic editing & color grading</li>
                <li>Movie poster design (1 image)</li>
                <li>Behind-the-scenes video</li>
                <li>Premium album design</li>
                <li>Priority delivery (5 days)</li>
            </ul>
            <a href="#contact" class="btn btn-secondary">Start Project</a>
        </div>
    </div>
</div>
    </div>
</section>
<section class="testimonials section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">TESTIMONIALS</span>
            <h2 class="section-title">Client Reviews</h2>
            <p class="section-description">
                What our clients say about the Vogue Vision experience.
            </p>
        </div>

        <div class="testimonials-grid">
            <!-- Testimonial 1 - Professional -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Andrei captured my professional essence perfectly. The LinkedIn headshots got me 3 interview calls in one week. The session was relaxed and he made me feel completely natural."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4>Alexandra M.</h4>
                        <p>Marketing Director, Bucharest</p>
                    </div>
                </div>
                <div class="testimonial-category">
                    <span class="category-tag professional">Digital Presence</span>
                </div>
            </div>
            
            <!-- Testimonial 2 - Artistic -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"The artistic shoot was beyond my expectations. The concept we developed together resulted in portfolio pieces that truly stand out. The 'human touch' philosophy is real—every image has emotion."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4>Andrei P.</h4>
                        <p>Graphic Designer & Artist</p>
                    </div>
                </div>
                <div class="testimonial-category">
                    <span class="category-tag artistic">Artistic Expression</span>
                </div>
            </div>
            
            <!-- Testimonial 3 - Mixed -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"I needed both professional headshots for my startup and creative images for our brand. Vogue Vision delivered both in one seamless experience. The AI-assisted edits saved time without losing authenticity."</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4>Maria S.</h4>
                        <p>Tech Entrepreneur</p>
                    </div>
                </div>
                <div class="testimonial-category">
                    <span class="category-tag mixed">Both Services</span>
                </div>
            </div>
        </div>
        
        <!-- Instagram Call-to-Action -->
        <div class="instagram-cta">
            <p>See more reviews and behind-the-scenes on our 
                <a href="https://www.instagram.com/voguevisionphoto/" target="_blank" class="instagram-link">
                    Instagram <span>→</span>
                </a>
            </p>
        </div>
    </div>
</section>
<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">GET IN TOUCH</span>
            <h2 class="section-title">Book Your Session</h2>
            <p class="section-description">
                Ready to create authentic portraits? Tell us about your project.
            </p>
        </div>

        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-container">
                <form class="contact-form" id="bookingForm" method="POST" action="/contact">
                     @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="package">Interest in Package *</label>
                            <select id="package" name="package" required>
                                <option value="">Select a package</option>
                                <option value="essential-profile">Essential Profile (299 RON)</option>
                                <option value="professional-presence">Professional Presence (599 RON)</option>
                                <option value="complete-brand">Complete Brand Package (999 RON)</option>
                                <option value="creative-starter">Creative Starter (399 RON)</option>
                                <option value="artistic-vision">Artistic Vision (799 RON)</option>
                                <option value="ultimate-concept">Ultimate Concept Experience (1,499 RON)</option>
                                <option value="not-sure">Not sure yet - need advice</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Preferred Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    
                    <div class="form-group">
                        <label for="project-type">Project Type *</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="project-type" value="digital-presence" required>
                                <span>Digital Presence (LinkedIn, dating apps, professional)</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="project-type" value="artistic-expression">
                                <span>Artistic Expression (creative, editorial, concept)</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="project-type" value="both">
                                <span>Both</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" rows="5" required 
                                  placeholder="Tell us about your vision, location ideas, specific needs..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-option">
                            <input type="checkbox" name="newsletter" checked>
                            <span>Send me photography tips and updates (optional)</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox" name="privacy" required>
                            <span>I agree to the privacy policy and terms of service *</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Booking Request</button>
                </form>
                
                <div id="formMessage" class="form-message"></div>
            </div>
            
            <!-- Contact Info & Process -->
            <div class="contact-info">
                <div class="info-card">
                    <h3>Our Process</h3>
                    <ol class="process-list">
                        <li>
                            <strong>1. Initial Consultation</strong>
                            <p>We discuss your vision, locations, and ideas</p>
                        </li>
                        <li>
                            <strong>2. Concept Development</strong>
                            <p>We create a moodboard and shooting plan</p>
                        </li>
                        <li>
                            <strong>3. The Shoot</strong>
                            <p>Relaxed, candid session with guidance</p>
                        </li>
                        <li>
                            <strong>4. Editing & Delivery</strong>
                            <p>Human-led editing with AI assistance</p>
                        </li>
                    </ol>
                </div>
                
                <div class="info-card">
                    <h3>Contact Details</h3>
                    <ul class="contact-details">
                        <li>
                            <span class="detail-icon">✉️</span>
                            <div>
                                <strong>Email</strong>
                                <a href="mailto:cirlaandrei7@yahoo.com">cirlaandrei7@yahoo.com</a>
                            </div>
                        </li>
                        <li>
                            <span class="detail-icon">📱</span>
                            <div>
                                <strong>Phone/WhatsApp</strong>
                                <a href="tel:+40712345678">+40 712 345 678</a>
                            </div>
                        </li>
                        <li>
                            <span class="detail-icon">📍</span>
                            <div>
                                <strong>Location</strong>
                                <span>Bucharest, Romania</span>
                            </div>
                        </li>
                        <li>
                            <span class="detail-icon">🕒</span>
                            <div>
                                <strong>Response Time</strong>
                                <span>Within 24 hours</span>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <h3>Why Choose Us</h3>
                    <ul class="features-list">
                        <li>✓ Human-centric approach</li>
                        <li>✓ AI-assisted editing (not AI-generated)</li>
                        <li>✓ Dual-niche expertise</li>
                        <li>✓ Flexible scheduling</li>
                        <li>✓ Professional equipment</li>
                        <li>✓ Fast delivery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer section-padding">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-column">
                <a href="/" class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Vogue Vision Photography">
                </a>
                <p class="footer-tagline">Portraits with Pulse. Authentically You, in a Digital World.</p>
                <div class="footer-social">
                    <a href="https://www.instagram.com/voguevisionphoto/" target="_blank" class="social-link">
                        Instagram
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="social-link">
                        Facebook
                    </a>
                    <a href="mailto:cirlaandrei7@yahoo.com" class="social-link">
                        Email
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-column">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#process">Our Process</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="footer-column">
                <h3 class="footer-heading">Services</h3>
                <ul class="footer-links">
                    <li><a href="#services">Digital Presence</a></li>
                    <li><a href="#services">Artistic Expression</a></li>
                    <li><a href="#services">LinkedIn Headshots</a></li>
                    <li><a href="#services">Creative Portraits</a></li>
                    <li><a href="#services">Brand Photography</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-column">
                <h3 class="footer-heading">Contact</h3>
                <ul class="footer-contact">
                    <li>
                        <span class="contact-icon">📍</span>
                        <span>Bucharest, Romania</span>
                    </li>
                    <li>
                        <span class="contact-icon">✉️</span>
                        <a href="mailto:cirlaandrei7@yahoo.com">cirlaandrei7@yahoo.com</a>
                    </li>
                    <li>
                        <span class="contact-icon">📱</span>
                        <a href="tel:+40712345678">+40 712 345 678</a>
                    </li>
                </ul>
                <div class="footer-cta">
                    <a href="#contact" class="btn btn-outline">Book a Session</a>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2024 Vogue Vision Photography. All rights reserved.</p>
            <div class="footer-legal">
                <a href="/privacy">Privacy Policy</a>
                <span class="separator">•</span>
                <a href="/terms">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
    @livewireScripts
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== CAROUSEL FUNCTIONALITY ==========
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel-btn.next');
    const prevButton = document.querySelector('.carousel-btn.prev');
    const dotsContainer = document.querySelector('.carousel-dots');
    const carousel = document.querySelector('.portfolio-carousel');
    
    let currentIndex = 0;
    let slideWidth = 0;
    let autoSlideInterval;
    
    // Initialize carousel
    function initCarousel() {
        if (!track || slides.length === 0) return;
        
        const slide = slides[0];
        const slideStyle = window.getComputedStyle(slide);
        slideWidth = slide.offsetWidth + parseInt(slideStyle.marginRight);
        
        dotsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('carousel-dot');
            dot.setAttribute('data-index', index);
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
        
        updateCarousel();
        startAutoSlide();
    }
    
    function updateCarousel() {
        const translateX = currentIndex * slideWidth;
        track.style.transform = `translateX(-${translateX}px)`;
        
        const dots = Array.from(dotsContainer.children);
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[currentIndex]) dots[currentIndex].classList.add('active');
    }
    
    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    }
    
    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateCarousel();
    }
    
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000);
    }
    
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    if (nextButton && prevButton) {
        nextButton.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
        
        prevButton.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
    }
    
    if (carousel) {
        carousel.addEventListener('mouseenter', stopAutoSlide);
        carousel.addEventListener('mouseleave', startAutoSlide);
    }
    
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(initCarousel, 250);
    });
    
    if (track && slides.length > 0) {
        initCarousel();
    }
    
    // Image orientation detection
    const images = document.querySelectorAll('.carousel-slide img');
    images.forEach(img => {
        if (img.complete) {
            setOrientationClass(img);
        } else {
            img.addEventListener('load', function() {
                setOrientationClass(this);
            });
        }
    });
    
    function setOrientationClass(img) {
        const slide = img.closest('.carousel-slide');
        if (img.naturalHeight > img.naturalWidth) {
            slide.classList.add('portrait');
            slide.classList.remove('landscape');
        } else {
            slide.classList.add('landscape');
            slide.classList.remove('portrait');
        }
    }
    
    // ========== CONTACT FORM FUNCTIONALITY ==========
    const form = document.getElementById('bookingForm');
    const formMessage = document.getElementById('formMessage');
    
    if (form) {
        // Get CSRF token from meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
        
        // Set minimum date to today
        const dateInput = document.getElementById('date');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.min = today;
        }
        
        // Form submission
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!validateForm()) {
                return;
            }
            
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Clear any previous messages
            formMessage.textContent = '';
            formMessage.className = 'form-message';
            formMessage.style.display = 'none';
            
            try {
                // Prepare form data
                const formData = new FormData(form);
                
                // Send to server
                const response = await fetch("/contact", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                });
                
                const result = await response.json();
                
                if (response.ok) {
                    // Success
                    formMessage.textContent = result.message || 'Thank you! Your booking request has been sent. We\'ll contact you within 24 hours.';
                    formMessage.className = 'form-message success';
                    formMessage.style.display = 'block';
                    
                    // Reset form
                    form.reset();
                    
                    // Scroll to message
                    formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    
                    // Hide message after 10 seconds
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                    }, 10000);
                    
                } else {
                    // Server returned error
                    throw new Error(result.message || 'Submission failed. Please try again.');
                }
                
            } catch (error) {
                // Network or other error
                formMessage.textContent = 'Error: ' + error.message + '. Please try again or contact us directly.';
                formMessage.className = 'form-message error';
                formMessage.style.display = 'block';
                
                // Scroll to error
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
            } finally {
                // Restore button state
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }
        });
        
        function validateForm() {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            // Clear previous errors
            form.querySelectorAll('.field-error').forEach(error => error.remove());
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    showError(field, 'This field is required');
                    isValid = false;
                } else {
                    clearError(field);
                }
            });
            
            // Validate email format
            const emailField = document.getElementById('email');
            if (emailField && emailField.value && !isValidEmail(emailField.value)) {
                showError(emailField, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Validate date if provided
            const dateField = document.getElementById('date');
            if (dateField && dateField.value) {
                const selectedDate = new Date(dateField.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                
                if (selectedDate < today) {
                    showError(dateField, 'Please select a future date');
                    isValid = false;
                }
            }
            
            return isValid;
        }
        
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
        
        function showError(field, message) {
            clearError(field);
            field.style.borderColor = '#e74c3c';
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'field-error';
            errorDiv.textContent = message;
            errorDiv.style.color = '#e74c3c';
            errorDiv.style.fontSize = '14px';
            errorDiv.style.marginTop = '5px';
            
            field.parentNode.appendChild(errorDiv);
        }
        
        function clearError(field) {
            field.style.borderColor = '';
            const errorDiv = field.parentNode.querySelector('.field-error');
            if (errorDiv) {
                errorDiv.remove();
            }
        }
        
        // Real-time validation
        form.querySelectorAll('input, textarea, select').forEach(field => {
            field.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    showError(this, 'This field is required');
                } else if (this.type === 'email' && this.value && !isValidEmail(this.value)) {
                    showError(this, 'Please enter a valid email address');
                } else if (this.id === 'date' && this.value) {
                    const selectedDate = new Date(this.value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    if (selectedDate < today) {
                        showError(this, 'Please select a future date');
                    } else {
                        clearError(this);
                    }
                } else {
                    clearError(this);
                }
            });
            
            field.addEventListener('input', function() {
                clearError(this);
                this.style.borderColor = '';
            });
        });
    }
    
    // ========== BACK TO TOP BUTTON ==========
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
    
    // ========== SMOOTH SCROLLING FOR ANCHOR LINKS ==========
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>
</body>
</html>