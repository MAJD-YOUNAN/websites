document.addEventListener("DOMContentLoaded", function () {
    new Splide("#skills-carousel", {
      type: "loop", // Enable infinite loop
      perPage: 3, // Show at least 3 skills at a time
    }).mount();
  });

  document.addEventListener("DOMContentLoaded", function () {
    new Splide("#hobbies-carousel", {
      type: "loop", // Enable infinite loop
      perPage: 1, // Show at least 3 skills at a time
    }).mount();
  });