$(document).ready(function() {
  refreshCombatsData()
})

function refreshCombatsData() {
  setTimeout(function() {

    $.ajax({
      url: $('#site-data').data('combat-ajax-url'),
      method: 'GET',
    })
      .done(function(response) {
        handleHasNewCombats(response.combats)
      })

    refreshCombatsData()
  }, 5000)
}

function handleHasNewCombats(combats) {
  if (!combats.length) {
    return false
  }

  var html = ``;

  combats.forEach(combat => {
    html += `
      <div>
        Combat initié par ${combat.user_demande}
        <a href="${combat.url}">Accepter</a> | <a href="">Refuser</a> 
      </div>
    `
  })

  $('#modalCombat #combats-list').html(html)
  var $modalCombat = new bootstrap.Modal(document.getElementById('modalCombat'))
  $modalCombat.show()
}
