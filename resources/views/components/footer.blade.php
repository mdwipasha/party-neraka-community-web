<style>
 :root {
    --primary-color: #f58b11;
    --secondary-color: #f8fafc;
    --text-color: #333;
  }

.footer {
  background: var(--primary-color);
  color: #fff;
  padding: 40px 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
}

.footer .footer-logo {
    flex: 1 1 100%;
    text-align: center;
    margin-bottom: 20px;
}

.footer .footer-logo img {
    max-width: 150px;
    border-radius: 50%;
    border: 2px solid #333;
}

.footer .footer-menu {
    flex: 1 1 30%;
    text-align: center;
}

.footer .footer-menu h4 {
    margin-bottom: 10px;
    font-size: 18px;
    text-transform: uppercase;
}

.footer .footer-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer .footer-menu ul li {
    margin: 10px 0;
}

.footer .footer-menu ul li a {
    color: #fff;
    /* text-decoration: none; */
    transition: color 0.3s;
}

.footer .footer-social {
    flex: 1 1 30%;
    text-align: center;
}

.footer .footer-social h4 {
    margin-bottom: 10px;
    font-size: 18px;
    text-transform: uppercase;
}

.footer .footer-social ul {
    list-style: none;
    padding: 0;
    margin-top: 1.5rem;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.footer .footer-social ul li {
    display: inline;
}

.footer .footer-social ul li a {
    background-color: #d88526;
    padding: 10px;
    border-radius: 50%;
    color: #fff;
    font-size: 1.2rem;
    transition: all 0.3s ease-in-out;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}

.footer .footer-social ul li a:hover {
  background-color: #fff;
  color: var(--primary-color);
}

.footer .footer-copyright  {
    flex: 1 1 100%;
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #fff;
}

.footer .footer-copyright a {
  color: #fff;
}
</style>
<footer class="footer">
    <div class="footer-logo">
       <img src="{{ asset('assets/image/logo-partner.png') }}" alt="Logo" width="50">
    </div>
    <div class="footer-menu">
        <h4>Quick Links</h4>
        <ul>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('member') }}">Members</a></li>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('live') }}">Live Now</a></li>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('gallery') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('merch') }}">Merhchandise</a></li>
            <li class="nav-item"><a class="nav-link navbar-default-text" href="{{ route('event') }}">Event</a></li>
        </ul>
    </div>
    <div class="footer-social">
        <h4>Follow Us</h4>
        <ul>
            <li><a href="https://instagram.com/partyneraka" target="_blank" class="navbar-default-text me-3"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@partynerakacommunity" class="navbar-default-text me-3" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <li><a href="#" class="navbar-default-text" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="footer-copyright">
        &copy; 2025 Party Neraka. Designed By <a href="https://instagram.com/mdpashaaa" target="_blank">MDP</a>
    </div>
</footer>