
  <!-- Footer -->
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <footer>
    <div class="container">
      <section class="footer-col" aria-labelledby="footer-about-title">
        <h2 class="logo-footer">
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5d6c47c7-7875-4633-af14-012f5ad369f3.png" alt="Xeroic circular logo in blue and gold" />
          Xeroic
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
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </section>

      <section class="footer-col" aria-labelledby="footer-services-title">
        <h3 id="footer-services-title" class="footer-title">Our Service</h3>
        <ul class="list-links">
          <li><a href="#">Website Development</a></li>
          <li><a href="#">Graphic Designing</a></li>
          <li><a href="#">Digital Marketing</a></li>
          <li><a href="#">UI/UX Designing</a></li>
          <li><a href="#">App Development</a></li>
        </ul>
      </section>

      <section class="footer-col" aria-labelledby="footer-gallery-title">
        <h3 id="footer-gallery-title" class="footer-title">Gallery</h3>
        <div class="footer-gallery" aria-label="Gallery preview images">
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b21fc290-08d4-4da3-a0e0-794ca451f2cb.png" alt="Gallery preview showing digital team working on laptops" loading="lazy" />
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9e088e57-1155-4443-a7cf-e255430b07fa.png" alt="Gallery preview showing brainstorming session with post-it notes on wall" loading="lazy" />
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/33b948e3-7c4f-4c83-9a23-7be0b04a9de4.png" alt="Gallery preview showing desktop screens with digital wireframes and analytics" loading="lazy" />
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ffe9b61d-2972-465a-b002-09b224ad026b.png" alt="Gallery preview showing virtual digital marketing icons floating over desk" loading="lazy" />
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9365c143-a528-44e7-9bca-c363d181c0f6.png" alt="Gallery preview showing a close-up of handshake in business meeting" loading="lazy" />
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/af470ee5-e4b2-44d3-b9f5-17e064119b35.png" alt="Gallery preview showing programmer coding on laptop with code editors" loading="lazy" />
        </div>
      </section>
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

