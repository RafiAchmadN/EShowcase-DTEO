@extends('layouts.app')

@section('content')
<div class="submit-page">
    <div class="submit-left">
      <span class="submit-badge">EXHIBITION CURATOR</span>
      <h1>Submit Your<br>Creative Vision.</h1>
      <p>Join the hall of excellence. Your project will be featured in our digital gallery, reaching academic peers and industry leaders globally.</p>
      <div class="submit-img">
        <svg width="200" height="180" viewBox="0 0 200 180" fill="none"><rect width="200" height="180" fill="#0d2158" rx="8"/><rect x="20" y="40" width="70" height="90" rx="4" fill="rgba(255,255,255,0.08)"/><rect x="30" y="50" width="50" height="30" rx="2" fill="rgba(255,255,255,0.12)"/><rect x="30" y="86" width="50" height="6" rx="3" fill="rgba(255,255,255,0.2)"/><rect x="30" y="96" width="35" height="5" rx="2" fill="rgba(255,255,255,0.12)"/><rect x="110" y="60" width="70" height="50" rx="4" fill="rgba(255,255,255,0.08)"/><rect x="120" y="70" width="50" height="20" rx="2" fill="rgba(255,255,255,0.12)"/><circle cx="150" cy="120" r="12" fill="rgba(59,130,246,0.5)" stroke="rgba(147,197,253,0.5)" strokeWidth="2"/><path d="M145 120 L149 124 L155 116" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/></svg>
      </div>
    </div>
    <div class="submit-right">
      <!-- Core Details -->
      <div class="form-section">
        <div class="form-section-header">
          <h3>Core Details</h3>
          <p>Identify your contribution to the academic community.</p>
        </div>
        <div class="form-group">
          <label class="form-label">Project Title</label>
          <input type="text" class="form-input" placeholder="e.g., AI-Driven Sustainable Architecture">
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Student Name(s)</label>
            <input type="text" class="form-input" placeholder="Full names, separated by commas">
          </div>
          <div class="form-group">
            <label class="form-label">Supervisor</label>
            <input type="text" class="form-input" placeholder="Lead professor name">
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Department</label>
          <select class="form-select">
            <option value="">Select Department</option>
            <option>Electrical Engineering</option>
            <option>Mechanical Engineering</option>
            <option>Computer Science</option>
            <option>Industrial Engineering</option>
            <option>Biomedical Engineering</option>
          </select>
        </div>
      </div>
      <!-- Narrative -->
      <div class="form-section">
        <div class="form-section-header">
          <h3>Narrative &amp; Context</h3>
          <p>Describe the problem and your unique solution.</p>
        </div>
        <div class="form-group">
          <label class="form-label">Project Description</label>
          <textarea class="form-textarea" placeholder="Share the story behind your project, the methodology, and the key findings..."></textarea>
        </div>
      </div>
      <!-- Media Assets -->
      <div class="form-section">
        <div class="form-section-header">
          <h3>Media Assets</h3>
          <p>High-quality visuals significantly increase engagement.</p>
        </div>
        <div class="upload-row">
          <div class="upload-box">
            <div class="upload-icon">🖼</div>
            <div class="upload-title">Project Image</div>
            <div class="upload-sub">JPG, PNG up to 10MB</div>
          </div>
          <div class="upload-box">
            <div class="upload-icon" style="color:#dc2626;">📄</div>
            <div class="upload-title">PDF Report</div>
            <div class="upload-sub">Final submission document</div>
          </div>
        </div>
      </div>
      <!-- Submit -->
      <div class="submit-footer">
        <button class="btn-primary" style="font-size:16px;padding:14px 36px;">Submit Project ▷</button>
        <p class="submit-disclaimer">By submitting, you agree to the university's exhibition privacy policy and academic integrity guidelines.</p>
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
