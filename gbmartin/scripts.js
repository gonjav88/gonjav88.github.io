// An object containing all text for both languages
const translations = {
  en: {
    introTitle: "Introduction to My Psychology Services",
    introParagraph:
      "Welcome! I offer a range of services tailored to your specific needs. My goal is to help you lead a healthier, more balanced life.",
    servicesTitle: "Services",
    service1: "Cognitive Behavioral Therapy (CBT)",
    service2: "Couples & Family Therapy",
    service3: "Child & Adolescent Therapy",
    plansTitle: "Plans & Prices",
    plan1: "Single Session: $100",
    plan2: "Monthly Plan (4 sessions): $350",
    plan3: "Six-Month Plan (24 sessions): $1800",
    contactTitle: "Contact",
    contactDescription:
      "Feel free to reach out using the form below or by email.",
    contactNameLabel: "Name",
    contactEmailLabel: "Email",
    contactMessageLabel: "Message",
    contactSendButton: "Send",
  },
  es: {
    introTitle: "Introducción a Mis Servicios de Psicología",
    introParagraph:
      "¡Bienvenido! Ofrezco una variedad de servicios adaptados a tus necesidades específicas. Mi objetivo es ayudarte a llevar una vida más saludable y equilibrada.",
    servicesTitle: "Servicios",
    service1: "Terapia Cognitivo Conductual (TCC)",
    service2: "Terapia de Pareja y Familiar",
    service3: "Terapia Infantil y Adolescente",
    plansTitle: "Planes y Precios",
    plan1: "Sesión Única: $100",
    plan2: "Plan Mensual (4 sesiones): $350",
    plan3: "Plan de Seis Meses (24 sesiones): $1800",
    contactTitle: "Contacto",
    contactDescription:
      "No dudes en contactarme utilizando el formulario a continuación o por correo electrónico.",
    contactNameLabel: "Nombre",
    contactEmailLabel: "Correo Electrónico",
    contactMessageLabel: "Mensaje",
    contactSendButton: "Enviar",
  },
};

// Function that sets the language by updating DOM elements
function setLanguage(lang) {
  document.getElementById("intro-title").textContent =
    translations[lang].introTitle;
  document.getElementById("intro-paragraph").textContent =
    translations[lang].introParagraph;

  document.getElementById("services-title").textContent =
    translations[lang].servicesTitle;
  document.getElementById("service1").textContent =
    translations[lang].service1;
  document.getElementById("service2").textContent =
    translations[lang].service2;
  document.getElementById("service3").textContent =
    translations[lang].service3;

  document.getElementById("plans-title").textContent =
    translations[lang].plansTitle;
  document.getElementById("plan1").textContent = translations[lang].plan1;
  document.getElementById("plan2").textContent = translations[lang].plan2;
  document.getElementById("plan3").textContent = translations[lang].plan3;

  document.getElementById("contact-title").textContent =
    translations[lang].contactTitle;
  document.getElementById("contact-description").textContent =
    translations[lang].contactDescription;
  document.getElementById("contact-name-label").textContent =
    translations[lang].contactNameLabel;
  document.getElementById("contact-email-label").textContent =
    translations[lang].contactEmailLabel;
  document.getElementById("contact-message-label").textContent =
    translations[lang].contactMessageLabel;
  document.getElementById("contact-send-button").textContent =
    translations[lang].contactSendButton;
}

// Set a default language when the page loads
window.onload = () => {
  setLanguage("en"); // Default to English
};
