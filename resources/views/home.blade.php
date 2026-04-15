@extends('layouts.app')

@section('content')
<!-- Hero -->
  <section style="background:#fff; padding-bottom:0;">
    <div class="hero">
      <div class="hero-left">
        <span class="hero-badge">ACADEMIC SHOWCASE 2026</span>
        <h1 class="hero-title">Discover Student<br><span>Innovation</span></h1>
        <p class="hero-desc">Explore a curated gallery of breakthrough engineering, creative design, and scientific research developed by the next generation of industry leaders.</p>
        <div class="hero-actions">
          <button class="btn-primary" onclick="navigate('gallery')">Explore Projects</button>
          <button class="btn-outline">Learn More</button>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-img-placeholder" style="background:linear-gradient(135deg,#f1f5f9,#e2e8f0);display:flex;align-items:center;justify-content:center;border-radius:16px;overflow:hidden;width:340px;height:280px;">
          <svg width="200" height="160" viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="160" fill="#e2e8f0" rx="12"/>
            <rect x="20" y="20" width="160" height="100" rx="8" fill="#cbd5e1"/>
            <rect x="35" y="35" width="130" height="70" rx="6" fill="#94a3b8"/>
            <circle cx="60" cy="58" r="12" fill="#64748b"/>
            <line x1="55" y1="75" x2="145" y2="75" stroke="#64748b" strokeWidth="3" strokeLinecap="round"/>
            <line x1="55" y1="85" x2="120" y2="85" stroke="#64748b" strokeWidth="3" strokeLinecap="round"/>
            <rect x="70" y="130" width="60" height="8" rx="4" fill="#cbd5e1"/>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- Search -->
  <section style="background:#fff; padding-bottom:40px;">
    <div class="search-section" style="max-width:860px;margin:0 auto;padding:0 40px;">
      <div class="search-box">
        <span class="search-icon">🔍</span>
        <input type="text" placeholder="Search projects by title, topic, or keyword...">
      </div>
      <div class="cat-tabs">
        <button class="cat-tab active">All Categories</button>
        <button class="cat-tab">Engineering</button>
        <button class="cat-tab">Computer Science</button>
        <button class="cat-tab">Design Arts</button>
        <button class="cat-tab">Biotechnology</button>
      </div>
    </div>
  </section>

  <!-- Featured Exhibits -->
  <section style="background:var(--bg); padding:48px 0;">
    <div class="featured-section">
      <div class="section-header">
        <h2 class="section-title">Featured Exhibits</h2>
        <div class="view-all" onclick="navigate('gallery')">View All Projects →</div>
      </div>
      <div class="featured-grid">
        <div class="featured-card" onclick="navigate('detail')">
          <div class="featured-card-img" style="background:linear-gradient(135deg,#1a1a2e,#16213e);display:flex;align-items:center;justify-content:center;">
            <svg width="120" height="90" viewBox="0 0 120 90"><rect width="120" height="90" fill="#0f3460" rx="8"/><rect x="10" y="10" width="100" height="70" rx="4" fill="#16213e"/><rect x="15" y="15" width="90" height="55" rx="3" fill="#0e2240"/><circle cx="30" cy="35" r="8" fill="#e94560" opacity="0.8"/><rect x="45" y="30" width="50" height="6" rx="3" fill="#1a6bc9" opacity="0.9"/><rect x="45" y="42" width="35" height="4" rx="2" fill="#2e4a6a"/><rect x="20" y="55" width="80" height="3" rx="1" fill="#1a6bc9" opacity="0.5"/></svg>
          </div>
          <div class="featured-card-body">
            <span class="tag-small tag-ee">ELECTRICAL ENGINEERING</span>
            <h3 class="featured-card-title">Autonomous Power Distribution</h3>
            <p class="featured-card-desc">A decentralized smart grid system utilizing AI to predict and redirect energy loads during...</p>
            <div class="view-details">View Details →</div>
          </div>
        </div>
        <div class="featured-card" onclick="navigate('detail')">
          <div class="featured-card-img" style="background:linear-gradient(135deg,#1c1c1c,#2d2d2d);display:flex;align-items:center;justify-content:center;">
            <svg width="120" height="90" viewBox="0 0 120 90"><rect width="120" height="90" fill="#1a1a1a" rx="8"/><circle cx="60" cy="45" r="25" fill="none" stroke="#888" strokeWidth="3"/><circle cx="60" cy="45" r="15" fill="none" stroke="#666" strokeWidth="2"/><circle cx="60" cy="45" r="6" fill="#999"/><line x1="60" y1="20" x2="60" y2="30" stroke="#e74c3c" strokeWidth="2.5" strokeLinecap="round"/><line x1="85" y1="45" x2="75" y2="45" stroke="#e74c3c" strokeWidth="2.5" strokeLinecap="round"/></svg>
          </div>
          <div class="featured-card-body">
            <span class="tag-small tag-ms">MECHANICAL SYSTEMS</span>
            <h3 class="featured-card-title">Kinetic Energy Recovery</h3>
            <p class="featured-card-desc">Redefining urban transport efficiency through a novel mechanical braking system that recove...</p>
            <div class="view-details">View Details →</div>
          </div>
        </div>
        <div class="featured-card" onclick="navigate('detail')">
          <div class="featured-card-img" style="background:linear-gradient(135deg,#0d1b2a,#1b2838);display:flex;align-items:center;justify-content:center;">
            <svg width="120" height="90" viewBox="0 0 120 90"><rect width="120" height="90" fill="#0d1b2a" rx="8"/><circle cx="60" cy="38" r="18" fill="#1e3a5f"/><circle cx="60" cy="38" r="10" fill="#2563eb"/><circle cx="60" cy="38" r="4" fill="#93c5fd"/><line x1="35" y1="65" x2="45" y2="55" stroke="#2563eb" strokeWidth="2"/><line x1="60" y1="56" x2="60" y2="65" stroke="#2563eb" strokeWidth="2"/><line x1="85" y1="65" x2="75" y2="55" stroke="#2563eb" strokeWidth="2"/></svg>
          </div>
          <div class="featured-card-body">
            <span class="tag-small tag-cs">COMPUTER SCIENCE</span>
            <h3 class="featured-card-title">Neural Analytics Platform</h3>
            <p class="featured-card-desc">An accessible visualization engine for complex neural networks, making deep learning model...</p>
            <div class="view-details">View Details →</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <div class="cta-banner" style="max-width:1100px;margin:0 auto 60px;">
    <h2>Ready to witness the future of academic excellence?</h2>
    <p>Join us for the live exhibition event where students present their work to industry leaders and the general public.</p>
    <div class="cta-actions">
      <button class="btn-white" onclick="navigate('register')">Register to Attend</button>
      <button class="btn-outline-white" onclick="navigate('submit')">Submit a Project</button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <span class="footer-brand">DTEO Project Exhibition</span>
    <ul class="footer-links">
      <li><a href="#">Instagram</a></li>
      <li><a href="#">LinkedIn</a></li>
      <li><a href="#">YouTube</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <span class="footer-copy">© 2026 Department of Electrical Automation Engineering. All rights reserved.</span>
  </footer>
@endsection
