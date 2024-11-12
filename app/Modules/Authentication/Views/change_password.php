<!DOCTYPE html>
<html lang="en-US">

<head>
    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color:#f2f3f8;" leftmargin="0">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:700px; margin:0 auto;" width="100%" border="0"
                   align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <div style="max-width:670px; margin: 0 auto; background:#fff; border-radius:3px; text-align:center; padding: 0 35px;">
                            <img src="https://assets-global.website-files.com/5f3a33a074c2eb9e90f16437/63805c3bd2b16178757252e1_Email%20campaign-rafiki.png"
                                 alt="LLA Logo" style="max-width: 100%; height: auto; max-height: 150px;">
                            <h1 style="color: black; font-size: 24px; font-weight: bold; margin-top: 20px;">Welcome to
                                Linguistics Lab Africa</h1>
                            <p style="color: black; font-size: 16px; margin-top: 10px;">Click this link to reset your
                                account password</p>
                            <a href="<?= base_url('authentication/reset_password/' . $token) ?>"
                               class="activation-button"
                               style="background:#18a899; text-decoration:none !important; font-weight:500; margin-top: 20px; color:#fff; text-transform:uppercase; font-size:14px; padding:10px 24px; display:inline-block; border-radius:50px;">Reset
                                password</a>
                            <br><br>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>