<style>
    :root {
    --primary-color: #f58b11;
    --secondary-color: #f8fafc;
    --text-color: #333;
  }

    .navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: transparent;
    padding: 20px 40px;
    transition: all 0.3s ease;
    z-index: 999;
    }

    .navbar.scrolled {
    background-color: rgba(0, 0, 0, 0.9);
    padding: 10px 40px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .logo img{
    height: 50px;
    border-radius: 50%;
    } 

    .nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
    }

    .nav-links li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
    }

    .nav-links li a:hover {
    color: var(--primary-color);
    }

    /* Hamburger Button */
    .menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 5px;
    background: none;
    border: none;
    z-index: 1001;
    }

    .menu-toggle .bar {
    width: 25px;
    height: 3px;
    background-color: white;
    border-radius: 5px;
    transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
    .menu-toggle {
        display: flex;
    }

    .nav-links {
        position: fixed;
        top: 0;
        right: -100%;
        height: 100vh;
        width: 50%;
        background-color: rgba(0, 0, 0, 0.95);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        transition: right 0.3s ease;
    }

    .nav-links.active {
        right: 0;
    }

    .nav-links li a {
        font-size: 20px;
        color: white;
    }

    /* Optional: Change hamburger to "X" when active */
    .menu-toggle.active .bar:nth-child(1) {
        transform: rotate(45deg) translateY(8px);
    }

    .menu-toggle.active .bar:nth-child(2) {
        opacity: 0;
    }

    .menu-toggle.active .bar:nth-child(3) {
        transform: rotate(-45deg) translateY(-8px);
    }
    }
</style>
<header class="navbar" id="navbar">
    <nav>
      <div class="logo">
        <img src="{{ asset('assets/image/logo-partner.png') }}" alt="Logo">
      </div>
      <button class="menu-toggle" id="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
      <ul class="nav-links" id="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('member') }}">Members</a></li>
        <li><a href="{{ route('live') }}">Live Now</a></li>
        <li><a href="{{ route('gallery')}}">Gallery</a></li>
        <li><a href="{{ route('merch') }}">Merhchandise</a></li>
        <li><a href="{{ route('event') }}">Event</a></li>
      </ul>
    </nav>
</header>
<script>
    // Scroll effect
    window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
    });

    // Menu toggle
    const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.getElementById("nav-links");

    menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    navLinks.classList.toggle("active");
    });
</script>