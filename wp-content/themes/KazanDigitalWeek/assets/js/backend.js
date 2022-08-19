document.addEventListener('DOMContentLoaded', ()=>{
  const forms = Array.from(document.querySelectorAll(".js-forms"));

  document.addEventListener('click', function (e) {
    const clickedElement = e.target.closest('[data-path]');
    if (clickedElement) {
      let target = clickedElement.dataset.path;
      let modalHeading = clickedElement.dataset.heading;
      let modalContainer = document.querySelector(`[data-target="${target}"]`);

      if (modalHeading) {
        modalContainer.querySelector(".js-heading").innerHTML = modalHeading;
      }
    }
  });

  forms.forEach((form)=>{
      form.addEventListener("submit", (e)=>{
          e.preventDefault();
          const url = form.getAttribute("action");
          const formData = new FormData(form);
          
          axios.post(url, formData)
            .then(function (response) {
              if (form.closest(".registration")) {
                form.closest(".registration").querySelector(".registration__succes").classList.add("is-active");
                form.classList.remove("is-active");
              };

              if (form.closest(".js-modal-callbak")) {
                window.modal.onClose("callback");
                window.modal.onOpen("successCallback");
              };

              window.clearForm(form);
            })
            .catch(function (error) {
              console.error(error);
            });
      });
  });
});