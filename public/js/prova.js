function Login() {
        $('log').click(function () {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var mail = $("#email").val().trim();
            var psw = $("#password").val();
            $.ajax({
                url: '/login',
                type: 'POST',
                data: {
                    name: name,
                    email: mail,
                    password: psw
                },
                success: function (data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                    } else {
                        alert(data.error);
                    }
                }
            });
        });
}
function Register() {
        $("#reg").click(function(){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            var name = $("#name").val().trim();
            var mail = $("#email").val().trim();
            var psw = $("#password").val();
            var cpsw = $("#password-confirm").val();
            if(psw.match(cpsw)) {
                $.ajax({
                    url: '{{ route(\'register\') }}',
                    type: 'POST',
                    data: {
                        name: name,
                        email: mail,
                        password: psw
                    },
                    success: function (data) {
                        if ($.isEmptyObject(data.error)) {
                            alert(data.success);
                        } else {
                            alert(data.error);
                        }
                    }
                });
            }

    });
}
