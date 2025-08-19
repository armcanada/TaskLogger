<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
    * {
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        font-size: 100%;
        line-height: 1.6em;
        margin: 0;
        padding: 0;
    }

    img {
        max-width: 600px;
        width: auto;
    }

    body {
        height: 100%;
        -webkit-text-size-adjust: none;
        width: 100% !important;
    }
    a {
        color: #348eda;
    }

    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .padding {
        padding: 10px 0;
    }

    table.wrap {
        border: 0px;
    }
    table.body-wrap {
        padding: 20px;
        width: 100%;
    }

    table.body-wrap .container {
        border: 1px solid #f0f0f0;
    }
    table.footer-wrap {
        clear: both !important;
        width: 100%;
    }

    .footer-wrap .container p {
        color: #666666;

    }

    table.footer-wrap a {
        color: #999999;
    }
    h1,
    h2,
    h3 {
        color: #111111;
        font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 200;
        line-height: 1.2em;
        margin: 40px 0 10px;
        margin-top: 0px;
    }

    h1 {
        font-size: 36px;
    }
    h2 {
        font-size: 28px;
    }
    h3 {
        font-size: 18px;
    }

    p,
    ul,
    ol {
        margin-bottom: 10px;
    }

    hr {
        margin-top: 10px;
    }

    ul li,
    ol li {
        margin-left: 5px;
        list-style-position: inside;
    }
    .container {
        clear: both !important;
        display: block !important;
        Margin: 0 auto !important;
        max-width: 600px !important;
    }
    .body-wrap .container {
        padding: 20px;
    }
    .content {
        display: block;
        margin: 0 auto;
        max-width: 600px;
    }
    .content table {
        width: 100%;
    }

    </style>
</head>

<body bgcolor="#f6f6f6">
    <table class="body-wrap" bgcolor="#f6f6f6">
        <tr>
            <td></td>
            <td class="container" bgcolor="#FFFFFF">
                <div class="content">
                    <table class="wrap">
                        <tr>
                            <td>
                                <img style="margin:13px" width="74" height="89" title="" alt="" src="https://agencederecouvrement.com/wp-content/uploads/2019/06/LOGO-ARM-Couleur-N-2.png" />
                                <p>
                                    La tâche "{{ $taskName }}" a échouée.
                                </p>
                                <b>Exception:</b>
                                <p>
                                    {{ $exceptionMessage}}
                                </p>
                                <hr />
                            </td>
                            <tr><td style="padding:0; font-size:10pt">Envoyé le {{date('Y-m-d H:i:s')}}</td></tr>                           
                        </tr>
                    </table>
                </div>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>
