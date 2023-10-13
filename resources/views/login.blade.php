<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン</title>

        <script type="text/javascript">
            function check(){
                var form = document.getElementById("callbackForm");
                var json = {
                    "_token": form._token.value,
                    "provider_user_id": form.provider_user_id.value,
                    "provider_user_name": form.provider_user_name.value,
                    "provider_user_email": form.provider_user_email.value,
                    "provider_user_gender": form.provider_user_gender.value,
                    "provider_id": form.provider_id.value,
                    "adcode": form.adcode.value,
                    "status": form.status.value,
                    "provider_row": {
                        "address": form.address.value,
                        "tel": form.tel.value
                    }
                };

                alert("provider_user_id:" + json['provider_user_id']  + "\n" +
                    "provider_user_name:" + json['provider_user_name']  + "\n" +
                    "provider_user_email:" + json['provider_user_email']  + "\n" +
                    "provider_user_gender:" + json['provider_user_gender']  + "\n" +
                    "provider_id:" + json['provider_id']  + "\n" +
                    "adcode:" + json['adcode']  + "\n" +
                    "status:" + json['status']  + "\n" +
                    "provider_row.address:" + json['provider_row']['address']+ "\n" +
                    "provider_row.tel:" + json['provider_row']['tel']);
            }
            function sendck(){
                var form = document.getElementById("callbackForm");
                form.action = "{{ url('api/cookie') }}";
                form.submit();
            }
        </script>
    </head>
    <body>
        <h1>ソーシャルログイン</h1>
        <a href="https://{{{ $snsdomain }}}/auth/{{{ $sitekey }}}/google/redirect?AC=google">GoogleでログインしてGoogleへ</a><br>
        <a href="https://{{{ $snsdomain }}}/auth/{{{ $sitekey }}}/google/redirect?AC=mypage">Googleでログインしてマイページへ</a><br>

        <hr>
        <h1>キックバックテスト</h1>
        <form id="callbackForm" action="{{ url('api/callback') }}" method="post">
            @csrf
            <table border=0 cellpadding=2>
            <tr><td colspan=2>provider_user_id:&nbsp;</td><td><input type="text" name="provider_user_id" ></td></tr>
            <tr><td colspan=2>provider_user_name:&nbsp;</td><td><input type="text" name="provider_user_name" ></td></tr>
            <tr><td colspan=2>provider_user_email:&nbsp;</td><td><input type="text" name="provider_user_email" ></td></tr>
            <tr><td colspan=2>provider_user_gender:&nbsp;</td><td><input type="text" name="provider_user_gender" ></td></tr>
            <tr><td colspan=2>provider_id:&nbsp;</td><td><input type="text" name="provider_id" ></td></tr>
            <tr><td colspan=2>adcode:&nbsp;</td><td><input type="text" name="adcode" ></td></tr>
            <tr><td colspan=2>status:&nbsp;</td><td><input type="text" name="status" ></td></tr>
            <tr><td rowspan=2>provider_row:&nbsp;</td><td>address:&nbsp;</td><td><input type="text" name="address" ></td></tr>
                                                      <tr><td>tel:&nbsp;</td><td><input type="text" name="tel" ></td></tr>
            </table>
            <br>
            <input type="button" value="確認" onclick="check();">
            <span style="width: 30px;">
            <input type="button" value="test" onclick="sendck();">
            <span style="width: 30px;">
            <input type="submit" name="送信" >
        </form>

        <hr>
        <h1>ログインエラーテスト</h1>
        <form name="errorForm" action="{{ url('api/error') }}" method="post">
            @csrf
            adcode:&nbsp;<input type="text" name="adcode" ><br>
            <br>
            <input type="button" value="GET" onclick="document.errorForm.method = 'GET'; document.errorForm.submit();">
            <span style="width: 30px;">
            <input type="button" value="POST" onclick="document.errorForm.method = 'POST'; document.errorForm.submit();">
        </form>

    </body>
</html>
