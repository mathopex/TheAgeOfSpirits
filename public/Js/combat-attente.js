$(document).ready(function() {
  refreshCombatData()
})

function refreshCombatData() {
  setTimeout(function() {

    $.ajax({
        url: $('#attente-data').data('ajax-url'),
        method: 'GET',
      })
      .done(function(response) {
        if (response.started) {
          window.location = response.url
        }
      })

    refreshCombatData()
  }, 5000)
}
