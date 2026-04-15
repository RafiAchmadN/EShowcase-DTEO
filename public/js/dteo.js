/* INI JS nya */

function navigate(page) {
  // Hide all pages
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  // Show target
  const target = document.getElementById('page-' + page);
  if (target) {
    target.classList.add('active');
    window.scrollTo(0, 0);
  }
  // Update nav active states
  document.querySelectorAll('.navbar-links a').forEach(a => {
    a.classList.remove('active');
    if (a.getAttribute('data-page') === page ||
        (page === 'gallery' && a.getAttribute('data-page') === 'gallery') ||
        (page === 'index' && a.getAttribute('data-b page') === 'index')) {
      a.classList.add('active');
    }
  });
  // Hide/show login btn
  const loginBtn = document.querySelector('.btn-login');
  if (page === 'login' || page === 'register') {
    loginBtn.style.display = 'none';
  } else {
    loginBtn.style.display = '';
  }
  // Hide navbar on auth pages? No, keep it
  if (page === 'login' || page === 'register') {
    document.getElementById('main-navbar').style.display = 'flex';
  }
}

// Category tab behavior (home page)
document.querySelectorAll('.cat-tab').forEach(tab => {
  tab.addEventListener('click', function() {
    document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('active'));
    this.classList.add('active');
  });
});

// Topic btn behavior (gallery)
document.querySelectorAll('.topic-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.topic-btn').forEach(b => {
      b.classList.remove('active');
      b.textContent = b.textContent.replace(' ✓', '');
    });
    this.classList.add('active');
    if (!this.textContent.includes('✓')) this.textContent += ' ✓';
  });
});

// Year btn behavior
document.querySelectorAll('.year-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.year-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});

// Pagination behavior
document.querySelectorAll('.page-btn:not(.arrow)').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.page-btn:not(.arrow)').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});

// Init: set Beranda as active
document.querySelector('[data-page="index"]').classList.add('active');