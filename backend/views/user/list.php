<?php

/* @var $this yii\web\View */
/* @var $users \common\models\User[] */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Users list!</h1>
    </div>

    <div class="body-content">

        <table class="table">

            <thead>

                <tr>

                    <th>#</th>

                    <th>email</th>

                    <th>PasswordHash</th>

                    <th>State</th>

                </tr>

            </thead>

            <tbody>

            <?php foreach ($users as $user) : ?>

                <tr>

                    <td> <?= $user->getId() ?> </td>

                    <td> <?= $user->email ?> </td>

                    <td> <?= $user->password_hash ?> </td>

                    <td> <?= $user->getStatusSemantic() ?> </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>
</div>