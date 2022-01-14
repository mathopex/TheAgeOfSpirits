$(document).ready(function() {
  filterCards()

  $('#perso_class, #perso_clan, #perso_sex').on('input', function() {
    filterCards()
  })

})

function filterCards() {
  const perso = {
    clan: $('#perso_clan').val(),
    class: $('#perso_class').val(),
    sex: $('#perso_sex').val(),
  }

  const $cards = $('.perso-card')
  $cards.addClass('d-none')
  $cards.each(function() {
    const data = $(this).data()
    if ((data.clan === perso.clan || !perso.clan)
      && (data.class === perso.class || !perso.class)
      && (data.sex === perso.sex || !perso.sex)
    ) {
      $(this).removeClass('d-none')
    }
  })
}
