@extends('layouts.app')

@section('content')
<div class="auth-layout">
    <div class="auth-left">
      <div style="position:absolute;inset:0;background:linear-gradient(160deg,#0d2158 0%,#1a3a8f 40%,#0f4c8a 100%);z-index:0;"></div>
      <div style="position:absolute;inset:0;z-index:0;opacity:0.12;">
        <svg width="100%" height="100%" viewBox="0 0 560 1000" preserveAspectRatio="xMidYMid slice">
          <polygon points="0,400 280,0 560,400" fill="#fff"/><polygon points="0,600 280,200 560,600" fill="#fff" opacity="0.5"/>
        </svg>
      </div>
      <div class="auth-left-content">
        <span class="auth-badge">JOIN THE ELITE</span>
        <h1 class="auth-left-title">A Legacy of<br><span style="color:#93c5fd;">Innovation</span> Starts Here.</h1>
        <p class="auth-left-desc">Register to showcase your research, connect with industry leaders, and immortalize your academic journey in our digital curator gallery.</p>
        <div class="stats-row">
          <div class="stat-box">
            <div class="stat-num">500+</div>
            <div class="stat-label">Active Exhibits</div>
          </div>
          <div class="stat-box">
            <div class="stat-num">45</div>
            <div class="stat-label">Partnerships</div>
          </div>
        </div>
      </div>
    </div>
    <div class="auth-right">
      <div class="auth-form-box" style="max-width:440px;">
        <h2>Create your profile</h2>
        <p>Join the university's premier digital exhibition platform.</p>
        <div class="form-group">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-input" placeholder="Enter your full legal name">
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Student ID (NIM)</label>
            <input type="text" class="form-input" placeholder="8-12 digits">
          </div>
          <div class="form-group">
            <label class="form-label">University Email</label>
            <input type="email" class="form-input" placeholder="student@univ.ac.id">
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input type="password" class="form-input" placeholder="••••••••">
        </div>
        <div class="form-group">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-input" placeholder="••••••••">
        </div>
        <div class="form-check">
          <input type="checkbox" id="terms">
          <label for="terms">I agree to the <a href="#">Terms and Conditions</a> and Privacy Policy.</label>
        </div>
        <button class="btn-full" onclick="navigate('index')">Create Account</button>
        <p class="auth-switch">Already have an account? <a onclick="navigate('login')">Login here</a></p>
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
