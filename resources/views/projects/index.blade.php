@extends('layouts.app')

@section('content')
<div class="gallery-page">
    <div class="gallery-header">
      <h1>Project Gallery</h1>
      <p>Exploring the intersection of engineering excellence and creative problem solving across all academic departments.</p>
    </div>
    <div class="gallery-layout">
      <!-- Sidebar -->
      <div class="gallery-sidebar">
        <div class="sidebar-label">Search Projects</div>
        <div class="sidebar-search">
          <span>🔍</span>
          <input type="text" placeholder="Project name, student...">
        </div>
        <div class="sidebar-label" style="margin-top:20px;">Topics</div>
        <div class="topic-list">
          <button class="topic-btn active">All Topics ✓</button>
          <button class="topic-btn">Artificial Intelligence</button>
          <button class="topic-btn">Sustainable Energy</button>
          <button class="topic-btn">Biomedical Engineering</button>
          <button class="topic-btn">Internet of Things</button>
          <button class="topic-btn">Robotics</button>
        </div>
        <div class="sidebar-label" style="margin-top:20px;">Batch Year</div>
        <div class="year-grid">
          <button class="year-btn">2024</button>
          <button class="year-btn">2023</button>
          <button class="year-btn">2022</button>
          <button class="year-btn">2021</button>
        </div>
        <div class="sidebar-label" style="margin-top:20px;">Sort By</div>
        <select class="sort-select">
          <option>Most Popular</option>
          <option>Newest</option>
          <option>Oldest</option>
          <option>A-Z</option>
        </select>
      </div>
      <!-- Main Grid -->
      <div class="gallery-main">
        <div class="projects-grid">
          <!-- Card 1 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#0f172a,#1e3a8a);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#0f172a" rx="6"/><circle cx="50" cy="35" r="20" fill="none" stroke="#3b82f6" strokeWidth="2"/><line x1="35" y1="50" x2="65" y2="50" stroke="#60a5fa" strokeWidth="2"/><circle cx="40" cy="30" r="5" fill="#2563eb"/><circle cx="60" cy="30" r="5" fill="#2563eb"/><path d="M30 60 L50 20 L70 60" fill="none" stroke="#1d4ed8" strokeWidth="1.5"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-auto">Automation</span><span class="card-icon">⚙</span></div>
              <div class="project-card-title">Neural-Sync Autonomous Drone</div>
              <div class="project-card-author">By Aris Setiawan, Maya Putri</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#064e3b,#065f46);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#052e16" rx="6"/><rect x="10" y="20" width="80" height="40" rx="4" fill="#14532d" stroke="#16a34a" strokeWidth="1"/><rect x="15" y="25" width="25" height="12" rx="2" fill="#166534"/><rect x="45" y="25" width="15" height="8" rx="2" fill="#15803d"/><rect x="65" y="28" width="18" height="8" rx="2" fill="#166534"/><circle cx="30" cy="45" r="4" fill="#22c55e"/><circle cx="55" cy="45" r="4" fill="#4ade80"/><circle cx="75" cy="45" r="4" fill="#22c55e"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-elec">Electrical</span><span class="card-icon">🔖</span></div>
              <div class="project-card-title">Smart Grid Optimizer 2.0</div>
              <div class="project-card-author">By Kevin Wijaya</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#ecfdf5,#d1fae5);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#f0fdf4" rx="6"/><rect x="20" y="45" width="60" height="25" rx="4" fill="#bbf7d0"/><rect x="30" y="20" width="40" height="30" rx="3" fill="#86efac"/><rect x="35" y="10" width="30" height="15" rx="2" fill="#4ade80"/><circle cx="20" cy="55" r="5" fill="#16a34a"/><circle cx="80" cy="55" r="5" fill="#16a34a"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-mech">Mechanical</span><span class="card-icon">☆</span></div>
              <div class="project-card-title">Biomimetic Turbine Design</div>
              <div class="project-card-author">By Sarah Connor, Kyle Reese</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#1e293b,#334155);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#0f172a" rx="6"/><rect x="15" y="40" width="10" height="30" rx="2" fill="#1d4ed8"/><rect x="30" y="25" width="10" height="45" rx="2" fill="#2563eb"/><rect x="45" y="50" width="10" height="20" rx="2" fill="#1d4ed8"/><line x1="5" y1="20" x2="95" y2="20" stroke="#334155" strokeWidth="1"/><circle cx="20" cy="40" r="3" fill="#60a5fa"/><circle cx="35" cy="25" r="3" fill="#60a5fa"/><circle cx="50" cy="50" r="3" fill="#60a5fa"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-elec">Electrical</span><span class="card-icon">🔖</span></div>
              <div class="project-card-title">Wireless EV-Charging Roadway</div>
              <div class="project-card-author">By Dimas Pratama</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#1c0533,#2d0a4e);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#1c0533" rx="6"/><ellipse cx="50" cy="40" rx="22" ry="28" fill="#4c1d95" stroke="#7c3aed" strokeWidth="1.5"/><ellipse cx="50" cy="40" rx="14" ry="20" fill="#5b21b6"/><ellipse cx="50" cy="40" rx="6" ry="10" fill="#7c3aed"/><circle cx="50" cy="20" r="4" fill="#a855f7"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-mech">Mechanical</span><span class="card-icon">🔖</span></div>
              <div class="project-card-title">Soft Robotics Prosthetic Hand</div>
              <div class="project-card-author">By Laila Fitriani</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
          <!-- Card 6 -->
          <div class="project-card" onclick="navigate('detail')">
            <div class="project-card-img" style="background:linear-gradient(135deg,#1a1a1a,#2d1a0e);display:flex;align-items:center;justify-content:center;height:160px;">
              <svg width="100" height="80" viewBox="0 0 100 80"><rect width="100" height="80" fill="#1a1a1a" rx="6"/><rect x="10" y="30" width="20" height="40" rx="3" fill="#ea580c"/><rect x="35" y="20" width="20" height="50" rx="3" fill="#f97316"/><rect x="60" y="35" width="20" height="35" rx="3" fill="#ea580c"/><line x1="5" y1="72" x2="95" y2="72" stroke="#374151" strokeWidth="1.5"/></svg>
            </div>
            <div class="project-card-body">
              <div class="card-tag-row"><span class="tag-small tag-auto">Automation</span><span class="card-icon">🏆</span></div>
              <div class="project-card-title">IoT Waste Sorting System</div>
              <div class="project-card-author">By Budi Santoso</div>
              <div class="card-actions">
                <button class="btn-detail">Detail Project</button>
                <span class="heart-btn">♡</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="pagination">
          <button class="page-btn arrow">‹</button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <span class="page-ellipsis">...</span>
          <button class="page-btn">12</button>
          <button class="page-btn arrow">›</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <span class="footer-brand">DTEO Project Exhibition</span>
    <ul class="footer-links">
      <li><a href="#">Instagram</a></li><li><a href="#">LinkedIn</a></li>
      <li><a href="#">YouTube</a></li><li><a href="#">Contact Us</a></li>
    </ul>
    <span class="footer-copy">© 2026 Department of Electrical Automation Engineering. All rights reserved.</span>
  </footer>
@endsection
