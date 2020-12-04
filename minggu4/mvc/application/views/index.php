<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?=$this->session->flashdata('message');?>
    <form method="post" action="<?=base_url('login/ceklogin');?>">
        <table>
            <tr>
                <td style="align: center; colspan=2">Enter Login Details</td>
            </tr>
            <tr>
                <td style="align:center">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button>
            </td>
            </tr>
        </table>

    </form>
    
</body>
</html>