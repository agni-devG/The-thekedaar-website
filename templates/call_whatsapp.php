<div class="floating-buttons">
  <a href="tel:919777705555" class="floating-btn call-btn" target="_blank" aria-label="Call Thethekedaar">
    <img src="/assets/images/Call.svg" alt="Call Thethekedaar" title="Call Thethekedaar">
  </a>

  <a href="https://api.whatsapp.com/send?phone=919777705555&text=Hello, I am looking for Interior Design Service. Can you help me?" 
     class="floating-btn whatsapp-btn" target="_blank" aria-label="Chat on WhatsApp">
    <img src="/assets/images/whatsapp.svg" alt="Chat on WhatsApp" title="Chat on WhatsApp">
  </a>
</div>

<style>
/* Container */
.floating-buttons {
  position: fixed;
  bottom: 20px;
  left: 20px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  z-index: 9999;
}

/* Buttons */
.floating-btn {
  /* background: #fff; */

  border-radius: 50%;
    border: 2px solid;
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.3s ease;
}

.floating-btn img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* Hover animation */
.floating-btn:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 14px rgba(0, 0, 0, 0.3);
}

/* WhatsApp and Call theme colors (optional subtle tint) */
.call-btn {
  /* background-color: #f9f9f9; */
  border-color: #f9f9f9;
}

.whatsapp-btn {
  /* background-color: #25D366; */
  border-color: #25D366;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .floating-buttons {
    bottom: 15px;
    left: 15px;
    gap: 10px;
  }

  .floating-btn {
    width: 45px;
    height: 45px;
  }
}

@media (max-width: 480px) {
  .floating-btn {
    width: 40px;
    height: 40px;
  }

  .floating-btn img {
    width: 100%;
    height: 100%;
  }
}
</style>
