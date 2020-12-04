<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PABW</title>
</head>
<body>

    <table>
        <tr>
            <td>User Dashboard</td>
        </tr>
        <tr>
            <td>
                Selamat Datang <?= $this->session->userdata('username');?>
                klik di sini untuk <a href="<?=base_url('user/logout');?>" title="logout">Logout</a>
            </td>
        </tr>
    </table>
    
</body>
</html>