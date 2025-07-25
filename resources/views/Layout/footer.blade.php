<!-- Footer -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<footer>
    <div class="container">
        {{-- <div class="max-w-7xl mx-auto px-6 py-12 grid sm:grid-cols-3 gap-6 border-t " id='aa'> --}}
            <!-- USA -->
            <div class="flex items-center gap-4 border-r border-[#17294b] pr-6">
                <div class="bg-[#152b59] p-3 rounded">
                    <svg class="w-6 h-6 stroke-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <p class="uppercase font-semibold text-white text-sm">USA</p>
                    <p class="text-xs leading-tight max-w-[13rem] text-gray-400">2803 Philadelphia Pike B, Claymont, DE
                        19703, United States
                    </p>
                </div>
            </div>

            <!-- Australia -->
            <div class="flex items-center gap-4 border-r border-[#17294b] px-6">
                <div class="bg-[#152b59] p-3 rounded">
                    <svg class="w-6 h-6 stroke-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <p class="uppercase font-semibold text-white text-sm">Australia</p>
                    <p class="text-xs leading-tight max-w-[10rem] text-gray-400">2803 Philadelphia Pike B, Claymont, DE
                        19703, United States</p>
                </div>
            </div>

            <!-- India -->
            <div class="flex items-center gap-4 pl-6">
                <div class="bg-[#152b59] p-3 rounded">
                    <svg class="w-6 h-6 stroke-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <p class="uppercase font-semibold text-white text-sm">India</p>
                    <p class="text-xs leading-tight max-w-[14rem] text-gray-400">
                        1701, 17th Floor, Aurora Waterfront, GN 34/1, beside IEM Ashram Building, GN Block,<br />
                        Sector V, Bidhannagar, Kolkata, West Bengal 700091
                    </p>
                </div>
            </div>
            {{--
        </div> --}}

        <div
            class="border-t border-orange-500/70 max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row justify-between items-center gap-6">

            <section class="footer-col" aria-labelledby="footer-about-title" id="foot">
                <h2 class="logo-footer">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" height="50">
                    </a>
                </h2>
                <p id="footer-about-title" class="about-desc">
                    The new energy and spirit of business driven by
                    digital marketing excellence and innovations with
                    the best digital team on board.
                </p>
                <div class="social-links" aria-label="Social links in footer">
                    <a href="#" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </section>

            <section class="footer-col" aria-labelledby="footer-quick-links-title">
                <h3 id="footer-quick-links-title" class="footer-title">Quick Links</h3>
                <ul class="list-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    {{-- <li><a href="#">Service</a></li> --}}
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('Contact') }}">Contact Us</a></li>
                </ul>
            </section>

            <section class="footer-col" aria-labelledby="footer-services-title">
                <h3 id="footer-services-title" class="footer-title">Our Service</h3>
                <ul class="list-links">
                    <li><a href="{{ route('website.development') }}">Website Development</a></li>
                    <li><a href="{{ route('graphic.designing') }}">Graphic Designing</a></li>
                    <li><a href="{{ route('digital.marketing') }}">Digital Marketing</a></li>
                    <li><a href="{{ route('UI/UX.designing') }}">UI/UX Designing</a></li>
                    <li><a href="{{ route('app.development') }}">App Development</a></li>
                </ul>
            </section>

            <section class="footer-col" aria-labelledby="footer-gallery-title">
                <h3 id="footer-gallery-title" class="footer-title">About Us</h3>
                <div class="footer-gallery" aria-label="Gallery preview images">
                    <li><a href="#">-----</a></li>
                    {{-- <img
                        src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b21fc290-08d4-4da3-a0e0-794ca451f2cb.png"
                        alt="Gallery preview showing digital team working on laptops" loading="lazy" />
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9e088e57-1155-4443-a7cf-e255430b07fa.png"
                        alt="Gallery preview showing brainstorming session with post-it notes on wall" loading="lazy" />
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/33b948e3-7c4f-4c83-9a23-7be0b04a9de4.png"
                        alt="Gallery preview showing desktop screens with digital wireframes and analytics"
                        loading="lazy" />
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ffe9b61d-2972-465a-b002-09b224ad026b.png"
                        alt="Gallery preview showing virtual digital marketing icons floating over desk"
                        loading="lazy" />
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9365c143-a528-44e7-9bca-c363d181c0f6.png"
                        alt="Gallery preview showing a close-up of handshake in business meeting" loading="lazy" />
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/af470ee5-e4b2-44d3-b9f5-17e064119b35.png"
                        alt="Gallery preview showing programmer coding on laptop with code editors" loading="lazy" />
                    --}}
                </div>
            </section>
        </div>
    </div>
    <div class="copyright">
        All Copyright © 2023 by XeroicTech.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Testimonial slider logic
    (() => {
      const testimonials = document.querySelectorAll("#testimonial-slider .testimonial-card");
      const dots = document.querySelectorAll("#testimonial-dots .dot");
      let current = 0;

      function showTestimonial(idx) {
        testimonials.forEach((t, i) => {
          t.classList.toggle("active", i === idx);
          t.setAttribute("tabindex", i === idx ? "0" : "-1");
        });
        dots.forEach((d, i) => {
          d.classList.toggle("active", i === idx);
          d.setAttribute("aria-selected", i === idx ? "true" : "false");
          d.setAttribute("tabindex", i === idx ? "0" : "-1");
        });
        current = idx;
      }

      dots.forEach((dot, idx) => {
        dot.addEventListener("click", () => showTestimonial(idx));
        dot.addEventListener("keydown", e => {
          if (e.key === "ArrowRight") {
            let next = (idx + 1) % dots.length;
            dots[next].focus();
            showTestimonial(next);
          } else if (e.key === "ArrowLeft") {
            let prev = (idx - 1 + dots.length) % dots.length;
            dots[prev].focus();
            showTestimonial(prev);
          }
        });
      });

      // Auto rotate testimonials every 10sec
      setInterval(() => {
        let next = (current + 1) % testimonials.length;
        showTestimonial(next);
      }, 10000);

      // Initialize
      showTestimonial(0);
    })();
</script>
</body>

</html>
