'use strict';

{
  const openModalButton = document.getElementById('openModalButton');
  const modal = document.getElementById('modal');
  const title = openModalButton.dataset.title;
  const modalBody = document.getElementById('modalBody');
  const closeModalButton = document.getElementById('closeModalButton');
  const destroyButton = document.getElementById('destroyButton');

  openModalButton.addEventListener('click', ()=>{
    modal.classList.add('is-open');
    modalBody.innerHTML = "クイズ「"+title+"」を削除しますか？";
  })

  closeModalButton.addEventListener('click', ()=>{
    modal.classList.remove('is-open');
  })

  destroyButton.addEventListener('click', ()=>{
    modal.classList.remove('is-open');
  })
}