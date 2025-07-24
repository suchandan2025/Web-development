@extends('Layout.main')

@section('container')
<script src="https://cdn.tailwindcss.com"></script>
<style>
  /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap'); */

  .container {
    max-width: 100%;
    /* margin: 40px auto; */
    display: flex;
    /* background: #f7f9fc; */
    /* border-radius: 8px; */
    /* box-shadow: 0 6px 18px #00000012; */
    /* overflow: hidden; */
  }
  .left, .right {
    padding: 32px 40px;
  }
  .left {
    width: 50%;
    border-right: 1px solid #ddd;
  }
  .right {
    width: 50%;
    background: #f0f3f9;
  }
  h2 {
    font-weight: 600;
    font-size: 1.4rem;
    margin-bottom: 8px;
  }
  .subheading {
    font-weight: 600;
    font-size: 1rem;
    margin: 24px 0 12px;
    color: #222;
  }
  p.description {
    color: #7a7a7a;
    line-height: 1.4;
    font-size: 0.9rem;
    margin-bottom: 24px;
  }
  .office-entry {
    font-size: 0.9rem;
    color: #7a7a7a;
    margin-bottom: 24px;
  }



  
  .office-entry strong {
    display: flex;
    align-items: center;
    font-weight: 600;
    color: #222;
    margin-bottom: 6px;
    gap: 8px;
  }
  .office-entry strong img.flag-icon {
    width: 45px;
    height: 45px;
    object-fit: contain;
  }
  .phone {
    margin-top: 4px;
    color: #f58220;
    font-weight: 600;
    cursor: pointer;
    display: inline-block;
  }
  .divider {
    height: 1px;
    border-bottom: 1px dotted #ccc;
    margin: 24px 0;
  }
  .worktime {
    font-size: 0.9rem;
    color: #444;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
    font-weight: 600;
  }
  .worktime svg {
    width: 18px;
    height: 18px;
    fill: #f58220;
  }

  /* Contact Form */
  .form-group {
    display: flex;
    flex-wrap: wrap;
    gap: 12px 20px;
    margin-top: 5px;
  }
  input[type="text"], input[type="email"], select, textarea {
    flex: 1 1 48%;
    padding: 13px 184px 16px 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background: #fff;
    font-size: 0.9rem;
    color: #444;
    position: relative;
  }
  textarea {
    flex: 1 1 100%;
    min-height: 90px;
    resize: vertical;
    padding: 12px;
  }
  /* Icons inside inputs */
  .input-icon {
    position: relative;
  }
  .input-icon svg {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    fill: #bbb;
    pointer-events: none;
  }
  label {
    font-weight: 600;
    font-size: 1.1rem;
    color: #222;
    margin-bottom: 4px;
  }
  .form-subtitle {
    font-size: 0.85rem;
    color: #7a7a7a;
    font-weight: 500;
    margin-top: -8px;
    margin-bottom: 18px;
  }
  button.submit-btn {
    margin-top: 20px;
    background: #f58220;
    color: #fff;
    border: 0;
    padding: 12px 22px;
    font-weight: 600;
    font-size: 0.92rem;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: background-color 0.3s ease;
  }
  button.submit-btn:hover {
    background: #dc7600;
  }
  button.submit-btn svg {
    width: 16px;
    height: 16px;
    fill: #fff;
    margin-left: 4px;
  }

  /* Responsive */
  @media(max-width: 768px) {
    .container {
      flex-direction: column;
      max-width: 90%;
      margin: 20px auto;
    }
    .left, .right {
      width: 100%;
      border: none;
      padding: 24px 20px;
    }
    input[type="text"], input[type="email"], select {
      flex: 1 1 100%;
    }
  }
</style>


  <section class="container" aria-label="Global Offices and Contact Form">
    <div class="left" role="region" aria-labelledby="section-title-offices">
      <h2 id="section-title-offices">Global Offices & Contact Numbers</h2>
      <p class="description">Reach out to our regional offices for tailored support and services.</p>

      <div class="office-entry" aria-label="USA office contact details">
        <strong><img class="flag-icon" src="{{ asset('assets/images/usa-flag.png') }}" alt="US flag icon">USA</strong>
        <p> 2803 Philadelphia Pike B, Claymont, DE 19703, United States</p>
        <a href="tel:+18475820035" class="phone">(+1)  213-643-0502</a>
      </div>
      <div class="divider" aria-hidden="true"></div>

      <div class="office-entry" aria-label="Australia office contact details">
        <strong><img class="flag-icon" src="{{ asset('assets/images/australia-flag.png') }}" alt="Australia flag icon">Australia</strong>
        <p>2803 Philadelphia Pike B, Claymont, DE 19703, United States</p>
        <a href="tel:+61730409911" class="phone">(+1)  213-643-0502</a>
      </div>
      <div class="divider" aria-hidden="true"></div>

      <div class="office-entry" aria-label="India office contact details">
        <strong><img class="flag-icon" src="{{ asset('assets/images/indian-flag.png') }}" alt="India flag icon">India</strong>
        <p>1701, 17th Floor, Aurora Waterfront, GN 34/1, beside IEM Ashram Building, GN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091</p>
        <a href="tel:+917980707600" class="phone">79-8070-7600</a>
      </div>
      <div class="divider" aria-hidden="true"></div>

      <div class="worktime" aria-label="Official work time">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24">
          <path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-19a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 4v6.25l4.75 2.85-.75 1.23-5.5-3.3V7h1.5z"/>
        </svg>
        Monday - Saturday: 9am to 5:30pm
      </div>
      <div class="worktime" aria-label="Support email">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" style="fill:#f58220;">
          <path d="M12 13.5l8-4.5v9c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2v-9l8 4.5z"/>
          <path d="M12 12L4 7h16l-8 5z" />
        </svg>
        support@amelya.com
      </div>
    </div>

    <form class="right" aria-label="Leave a message form" action="#" method="POST" novalidate>
      <h2>Leave a Message</h2>
      <p class="form-subtitle">We’re Ready To Help You</p>
      <div class="form-group">
        <label for="name" class="sr-only">Your Name</label>
        <div class="input-icon" style="flex:1 1 48%;">
          <input id="name" name="name" type="text" placeholder="Your Name" aria-label="Your name" autocomplete="name" required />
          <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
        </div>

        <label for="email" class="sr-only">Email Address</label>
        <div class="input-icon" style="flex:1 1 48%;">
          <input id="email" name="email" type="email" placeholder="Email Address" aria-label="Email address" autocomplete="email" required />
          <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
        </div>
      </div>

      <div class="form-group">
        <label for="phone" class="sr-only">Phone Number</label>
        <div class="input-icon" style="flex:1 1 48%;">
          <input id="phone" name="phone" type="text" placeholder="Phone Number" aria-label="Phone number" autocomplete="tel" />
          <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24">
            <path d="M6.62 10.79a15.09 15.09 0 006.59 6.59l2.2-2.2a1 1 0 011.09-.21 11.36 11.36 0 003.55.57 1 1 0 011 1v3.25a1 1 0 01-1 1A16 16 0 013 5a1 1 0 011-1h3.25a1 1 0 011 1 11.36 11.36 0 00.57 3.55 1 1 0 01-.21 1.09l-2.2 2.2z"/>
          </svg>
        </div>
        <label for="subject" class="sr-only">Select subject</label>
        <select id="subject" name="subject" aria-label="Select subject" style="flex:1 1 48%; padding-right: 36px;">
          <option value="" disabled selected>Select subject</option>
          <option value="support">Support</option>
          <option value="sales">Sales</option>
          <option value="marketing">Marketing</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group" style="margin-top: 0;">
        <label for="message" class="sr-only">Type Your Message</label>
        <textarea id="message" name="message" placeholder="Type Your Message" aria-label="Type your message"></textarea>
      </div>

      <button type="submit" class="submit-btn" aria-label="Submit message">
        Submit Message
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24">
          <path d="M12 4l1.41 1.41L8.83 10H20v2H8.83l4.58 4.59L12 18l-8-8z"/>
        </svg>
      </button>
    </form>
  </section>
</body>
</html>

@endsection
