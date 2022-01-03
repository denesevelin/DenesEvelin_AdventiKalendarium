<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
</head>
<body>
    
    <?php if (isset($adventi_kalendarium)): ?>
        <?php if (!empty($adventi_kalendarium)): ?>
            <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tartalom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adventi_kalendarium as $adventi_kalendarium): ?>
                    <tr>
                        <td><?php echo $adventi_kalendarium['id'] ?></td>
                        <td><?php echo $adventi_kalendarium['tartalom'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        <?php else: ?>
            <h4>Nincs még adat</h4>
        <?php endif; ?>
    <?php else: ?>
        <h4>Hiba történt</h4>
    <?php endif; ?>
</body>
</html>