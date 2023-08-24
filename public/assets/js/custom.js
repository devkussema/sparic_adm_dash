/*$(document).ready(function() {
    $.ajax({
        url: '/notificacao/get', // A rota da sua API
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var notificacoes = response.notificacoes;
            var notificacaoList = $('#notificacao_info');

            notificacaoList.empty(); // Limpa a lista antes de preenchê-la novamente

            if (notificacoes.length > 0) {
                $.each(notificacoes, function(index, notificacao) {
                    notificacaoList.append('<li>' + notificacao.mensagem + '</li>');
                });
            } else {
                notificacaoList.append('<li>Nenhuma notificação encontrada.</li>');
            }
        },
        error: function(xhr, status, error) {
            console.log(error); // Trate os erros de acordo com sua necessidade
        }
    });
});
*/
$(document).ready(function() {
    $.ajax({
        url: '/notificacao/get', // A rota da sua API
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var notificacoes = response.notificacoes;
            var notificacaoList = $('#notificacao_info');

            notificacaoList.empty(); // Limpa a lista antes de preenchê-la novamente

            if (notificacoes.length > 0) {
                $.each(notificacoes, function(index, notificacao) {
                    var li = $('<li></li>');

                    var a = $('<a href="#"></a>');
                    var notificationAvatar = $('<span class="notification-avatar"><img src="{{ asset(storage/' +  notificacao.userDe + ') }}" alt=""></span>');
                    var notificationIcon = $('<span class="notification-icon bg-gradient-primary"><i class="icon-feather-thumbs-up"></i></span>');

                    var notificationText = $('<span class="notification-text"></span>');
                    var strong = $('<strong>' + notificacao.user_de + '</strong>');
                    var likeText = notificacao.texto + ' <span class="text-primary">' + notificacao.videoTitle + '</span>';
                    var timeAgo = '<br> <span class="time-ago">' + notificacao.timeAgo + '</span>';

                    notificationText.append(strong, likeText, timeAgo);

                    a.append(notificationAvatar, notificationIcon, notificationText);
                    li.append(a);

                    notificacaoList.append(li);
                });
            } else {
                notificacaoList.append('<li>Nenhuma notificação encontrada.</li>');
            }
        },
        error: function(xhr, status, error) {
            console.log(error); // Trate os erros de acordo com sua necessidade
        }
    });
});
