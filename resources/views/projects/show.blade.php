@extends('layouts.app')

@section('content')
<div class="detail-page">
    <span class="detail-tag">ELECTRICAL ENGINEERING</span>
    <h1 class="detail-title">Message Queue Telemetry Transport (MQTT) PLC Siemens S7 - 1200</h1>
    <div class="detail-meta">
      <div class="meta-item">
        <div class="meta-label">Students</div>
        <div class="meta-value">Alex Thompson, Maria Garcia</div>
      </div>
      <div class="meta-item">
        <div class="meta-label">Supervisor</div>
        <div class="meta-value">Dr. Ir. Henry Wijaya</div>
      </div>
      <div class="meta-item">
        <div class="meta-label">Project ID</div>
        <div class="meta-value">EE-2024-042</div>
      </div>
    </div>
    <div class="detail-layout">
      <div class="detail-left">
        <!-- Main Image -->
        <div class="main-img" style="background:linear-gradient(135deg,#e2e8f0,#cbd5e1);display:flex;align-items:center;justify-content:center;">
          <svg width="300" height="200" viewBox="0 0 300 200"><rect width="300" height="200" fill="#c8d6e5" rx="8"/><rect x="20" y="20" width="260" height="160" rx="6" fill="#b0c4d8"/><rect x="30" y="30" width="100" height="140" rx="4" fill="#8fa8be"/><rect x="35" y="40" width="90" height="15" rx="2" fill="#6b8caa"/><rect x="35" y="60" width="90" height="15" rx="2" fill="#6b8caa"/><rect x="35" y="80" width="90" height="15" rx="2" fill="#6b8caa"/><rect x="35" y="100" width="90" height="15" rx="2" fill="#6b8caa"/><rect x="35" y="120" width="50" height="40" rx="3" fill="#5a7d96" stroke="#4a6d86" strokeWidth="1.5"/><rect x="145" y="30" width="130" height="140" rx="4" fill="#8fa8be"/><rect x="155" y="45" width="40" height="30" rx="3" fill="#1abc9c"/><rect x="205" y="45" width="40" height="30" rx="3" fill="#3498db"/><rect x="155" y="90" width="25" height="20" rx="2" fill="#e74c3c"/><rect x="190" y="90" width="25" height="20" rx="2" fill="#e74c3c"/><rect x="225" y="90" width="25" height="20" rx="2" fill="#e74c3c"/><rect x="155" y="120" width="110" height="40" rx="3" fill="#667c8a"/></svg>
        </div>
        <!-- Thumbnails -->
        <div class="thumb-row">
          <div class="thumb" style="background:#2d3748;color:#a0aec0;font-size:18px;">🖥</div>
          <div class="thumb" style="background:#1a202c;color:#a0aec0;font-size:18px;">📊</div>
          <div class="thumb" style="background:#2d3748;color:#a0aec0;font-size:18px;">⚙</div>
          <div class="thumb-more">+5 Photos</div>
        </div>
        <!-- Abstract -->
        <h2 class="abstract-title">Project Abstract</h2>
        <p class="abstract-text">
          This project explores the integration of Industrial Internet of Things (IIoT) protocols within traditional factory automation systems. The primary objective is to implement a robust <strong>MQTT (Message Queuing Telemetry Transport)</strong> communication bridge for the Siemens S7-1200 PLC, enabling low-latency data exchange between local industrial hardware and cloud-based monitoring platforms.<br><br>
          By leveraging the lightweight nature of MQTT, we achieved a 40% reduction in bandwidth consumption compared to standard HTTP-based APIs, while maintaining high reliability in intermittently connected environments. The system facilitates real-time telemetry of motor speeds, temperature sensors, and emergency stop triggers, presenting them in a custom-designed dashboard for remote oversight.
        </p>
        <!-- Key Features -->
        <div class="specs-section">
          <h3 class="specs-title">Key Features &amp; Technical Specs</h3>
          <div class="specs-grid">
            <div class="spec-item">
              <div class="spec-check">✓</div>
              <div>
                <div class="spec-name">MQTT Client Implementation</div>
                <div class="spec-desc">Native library development for TIA Portal V17.</div>
              </div>
            </div>
            <div class="spec-item">
              <div class="spec-check">✓</div>
              <div>
                <div class="spec-name">Secure Communication</div>
                <div class="spec-desc">TLS encryption for end-to-end data security.</div>
              </div>
            </div>
            <div class="spec-item">
              <div class="spec-check">✓</div>
              <div>
                <div class="spec-name">Real-time Analytics</div>
                <div class="spec-desc">Node-RED based dashboard for visualization.</div>
              </div>
            </div>
            <div class="spec-item">
              <div class="spec-check">✓</div>
              <div>
                <div class="spec-name">Multi-Sensor Support</div>
                <div class="spec-desc">Integration of 10+ digital and analog inputs.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Sidebar -->
      <div class="detail-right">
        <div class="info-card">
          <div class="info-card-title">Information Details</div>
          <div class="info-row">
            <div class="info-key">📅 Date Published</div>
            <div class="info-val">May 12, 2024</div>
          </div>
          <div class="info-row">
            <div class="info-key">🔧 Category</div>
            <div class="info-val">Industrial IoT</div>
          </div>
          <div style="margin-bottom:14px;">
            <div class="info-key" style="margin-bottom:8px;">🔩 Tools &amp; Hardware</div>
            <div class="hw-tags">
              <span class="hw-tag">SIEMENS S7-1200</span>
              <span class="hw-tag">TIA PORTAL</span>
              <span class="hw-tag">NODE-RED</span>
              <span class="hw-tag">MOSQUITTO</span>
            </div>
          </div>
        </div>
        <button class="btn-download">⬇ Download Report (PDF)</button>
        <button class="btn-source">&lt;/&gt; View Source Code</button>
        <div class="award-card">
          <div class="award-title">🏆 Distinction Award</div>
          <div class="award-desc">Selected as the most innovative project in the Automation &amp; Controls category for 2024.</div>
        </div>
        <div class="booth-card">
          <span class="booth-icon">📍</span>
          <div>
            <div class="booth-label">Exhibition Booth</div>
            <div class="booth-val">Main Hall - B12</div>
          </div>
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
