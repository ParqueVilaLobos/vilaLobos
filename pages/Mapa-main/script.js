 const img = document.getElementById('mapaImg');
    let zoomed = false;

    img.addEventListener('click', function (e) {
      const rect = img.getBoundingClientRect();
      const offsetX = e.clientX - rect.left;
      const offsetY = e.clientY - rect.top;
      const xPercent = (offsetX / rect.width) * 100;
      const yPercent = (offsetY / rect.height) * 100;

      if (!zoomed) {
        img.classList.add('zoomed');
        img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
      } else {
        img.classList.remove('zoomed');
        img.style.transformOrigin = 'center center';
      }
      zoomed = !zoomed;
});